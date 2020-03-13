<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro;
use App\Atts;
use App\Bid;
use DB;
use Auth;
use Validator;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Rules\captcha;

class ProController extends Controller
{
    /**
     * 借款页面
     */
    public function jie(){
    	//登录后获取用户信息
    	$user = request()->user();
    	return view('woyaojiekuan');
    }

    public function jiePost(){
        // $this->validate(request(),[
        //     'age'=>'in:15,40,80',
        //     'money'=>'required|integer|digits_between:5,7',
        //     'mobile'=>'required|regex:/1[3578]\d{9}/'
        // ]);
        // 
        $validator = Validator::make(request()->all(),[
            'age'=>'in:15,40,80',
            'money'=>'required|integer|digits_between:5,7',
            'mobile'=>'required|regex:/1[3578]\d{9}/',
            'imgcode'=>['required',new captcha]
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

    	$user = Auth::user();
    	//开启事务
    	DB::beginTransaction();

    	try{
    		$pro = Pro::create([
    			'uid'=>$user->uid,
                'name'=>$user->name,
    			'money'=>request('money')*100,
    			'mobile'=>request('mobile'),
    			'pubtime'=>time()
    		]);
    	}catch(\Exception $e)
    	{
    		DB::rollback();
    		throw $e;
    	}

		try{
		$att = Atts::create([
			'pid'=>$pro->pid,
			'uid'=>$user->uid,
			'age'=>request('age')
		]);
    	}catch(\Exception $e)
    	{
    		DB::rollback();
    		throw $e;
    	}

    	//提交事务
    	DB::commit();
    	return 'Success';
    }

    /**
     * [投资页面]
     */
    public function touzi($pid){
        $pro = Pro::find($pid);
        return view('lijitouzi',compact('pro'));
    }

    public function touziPost(Request $req,$pid){
        $user = Auth::user();
        $pro = Pro::find($pid);

        $md5 = $req->v_oid.$req->v_pstatus.$req->v_amount.$req->v_moneytype.'%()#QOKFDLS:1*&U';
        $md5 = md5($md5);
        if(strtoupper($md5) !== $req->v_md5str){
            return '参数不合法';
        }

        $bid = new \App\Bid();
        $bid->uid = $user->uid;
        $bid->pid = $pid;
        $bid->title = $pro->title;
        $bid->money = request()->v_amount*100;
        $bid->pubtime = time();
        $bid->save();

        $pro->recive += $bid->money;
        $pro->save();

        if($pro->recive >= $pro->money){
            $this->touziDone($pid);
        }

        return redirect('/');
    }

    public function touziDone($pid){
        //1.修改项目状态
        $pro = Pro::find($pid);
        $pro->status = 2;
        $pro->save();

        //2.给借款人还款账单
        //每个月还钱额度（本金+利息）
        $amount = $pro->money / $pro->hrange + ($pro->money * $pro->rate)/1200;
        $data = ['uid'=>$pro->uid,'pid'=>$pid,'title'=>$pro->title];
        $data['amount'] = $amount;

        for($i=1;$i<=$pro->hrange;$i++){
            $paydate = date('Ymd',strtotime("+ $i months"));
            $data['paydate'] = $paydate;
            DB::table('hks')->insert($data);
        }

        //3.为投资人生成预收益账单  
        $bid = Bid::where('pid',$pid)->get();
        $row = ['pid'=>$pid,'title'=>$pro->title];
        $enddate = date('Ymd',strtotime("+ $pro->hrange months"));
        $row['enddate'] = $enddate;

        foreach($bid as $b){
            $row['uid'] = $b->uid;
            $row['amount'] = ($b->money * $pro->rate)/36500; //每天利息收益
            DB::table('tasks')->insert($row);
        }
    }

    //我的还款账单
    public function myzd(){
        $hks = DB::table('hks')->where('uid',Auth::Id())->paginate(2);
        return view('myzd',compact('hks'));
    }

    //我的收益
    public function mysy(){
        $grow = DB::table('grows')->where('uid',Auth::Id())->paginate(10);
        return view('mysy',compact('grow'));
    }

    //我的投资
    public function mytz(){
        $invest = DB::table('bids')->where('bids.uid',Auth::user()->uid)->whereIn('status',[1,2])->join('projects','bids.pid','=','projects.pid')->get(['bids.*','projects.status']);
        return view('mytz',compact('invest'));
    }

    public function pay(Request $req){
        $pid = request('pid');
        $data = [];
        $data['v_amount'] = request('money');
        $data['v_moneytype'] = 'CNY';
        $data['v_oid'] = date('YmdHis').mt_rand(1000,9999);
        $data['v_mid'] = '20272562';
        $data['v_url'] = "http://www.dddai.com/touzi/".$pid;
        $data['key'] = '%()#QOKFDLS:1*&U';
        $data['v_md5info'] = strtoupper( md5(implode($data)) );
        return view('pay',$data);
    }

    public function captcha(){
        //创建验证码
        $builder = new CaptchaBuilder;
        $builder->build();

        //数字存入session
        session(['yzm'=>strtoupper($builder->getPhrase())]);

        //模板显示
        header('Content-type: image/jpeg');
        $builder->output();
    }
}
