<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');
Route::get('/home','IndexController@index');
Route::get('test','TestController@test');
//路由分组
Route::namespace('Auth')->group(function(){
	//注册
	Route::get('register','RegisterController@showRegistrationForm');
	Route::post('register','RegisterController@register')->middleware('email');

	//登录
	Route::get('login','LoginController@showLoginForm')->name('login');
	Route::post('login','LoginController@login');

	//退出
	Route::get('logout','LoginController@logout');
});


//资源控制器
Route::resource('cart','CartController');

//用户验证,登录后才可以访问某些页面
Route::middleware('auth')->group(function(){
	//申请(借款)路由
	Route::get('jie','ProController@jie');
	Route::post('jie','ProController@jiePost');

	//审核(借款)路由
	Route::get('prolist','CheckController@prolist');
	Route::get('check/{pid}','CheckController@check');
	Route::post('check/{pid}','CheckController@checkPost');
	
	//投资路由
	Route::get('touzi/{pid}','ProController@touzi');
	Route::post('touzi/{pid}','ProController@touziPost');
	
	//支付
	Route::post('pay','ProController@pay');

	//投资人收益
	Route::get('grow','GrowController@grow');

	//账单/收益/投资
	Route::get('myzd','ProController@myzd');
	Route::get('mysy','ProController@mysy');
	Route::get('mytz','ProController@mytz');
	Route::get('captcha','ProController@captcha');
});

// Route::get('test',function(){
// 	var_dump(url('pay'));
// });

Route::get('parent',function(){
	return view('template.parent');
});
// //中间件
// Route::get('test',['middleware'=>'App\Http\Middleware\EmailMiddleware',function(){
// 	echo 'hello';
// }]);

// //中间件(用于控制器)
// Route::get('/',['middleware'=>'\App\Http\Middleware\EmailMiddleware','uses'=>'IndexController@index']);

// Route::get('/','IndexController@index')->middleware('email');


Route::fallback(function(){
	return '404';
});