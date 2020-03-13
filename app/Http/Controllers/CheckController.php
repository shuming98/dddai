<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro;
use App\Atts;
use DB;
class CheckController extends Controller
{
    public function prolist(){
    	$pro = Pro::orderBy('pid','desc')->get();
    	return view('prolist',compact('pro'));
    }

    public function check($pid){
    	$pro = Pro::where('pid',$pid)->first();
    	return view('shenhe',$pro);
    }

    public function checkPost($pid){
    	$pro = Pro::find($pid);
    	$att = Atts::where('pid',$pid)->first();

    	DB::begintransaction();

    	try{
    			$pro->title = request('title');
    			$pro->rate = request('rate');
    			$pro->hrange = request('hrange');
    			$pro->status = request('status');
    			$pro->save();
    	}catch(\Exception $e)
    	{
    		DB::rollback();
    		throw $e;
    	}


    	try{
    			$att->title = request('title');
    			$att->realname = request('realname');
    			$att->gender = request('gender');
    			$att->udesc = request('udesc');
    			$att->save();
    	}catch(\Exception $e)
    	{
    		DB::rollback();
    		throw $e;
    	}

    	DB::commit();
    	return redirect('prolist');

    }
}
