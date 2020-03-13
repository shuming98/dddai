<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendPost;
use Mail;
use App\Mail\SendMail;
use App\Rules\SendMobile;
use Cache;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mail::send('emails.mail',['name'=>'测试邮件'],function($message){
        //     $message->to('1165296623@qq.com')->subject('邮件测试');
        // });
        
        //Mail::to('1165296623@qq.com')->send(new SendMail);
        
        //添加
        // Cache::put('key','value',10);
        // Cache::add('key2','value2',10);
        // Cache::forever('key3','value3');

        // //获取
        // dump(Cache::get('key4'));
        
        // //删除
        // dump(Cache::pull('key3'));
        // dump(Cache::forget('key4'));

        // //判断
        // if(Cache::has('key3')){
        //     Cache::forget('key3');
        // }

        // session(['key'=>'value']);
        // session('key');
        // session()->put('key2','value2');
        // session()->get('key2');
        // session()->forget('key2');

        //return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mobile'=>['required',new SendMobile]
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dump('id='.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dump('edit-.$id');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
