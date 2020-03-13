<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //重写方法
    public function username(){
      return 'name';
    }

    //手动写验证，需要use Auth
    
    // public function register(){
    //   if(Auth::check()){
    //     return redirect('/');
    //   }else{
    //     if(!Auth::attempt(['name'=>$_POST['name'],'password'=>$_POST['password']])){
    //       return back();
    //     }else{
    //       return redirect('/home');
    //     }
    //   }
    // }

    // public function logout(){
    //   Auth::logout();
    //   return redirect('/home');
    // }
}
