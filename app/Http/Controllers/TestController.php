<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;

class TestController extends Controller
{
    public function test(Request $request){
    	dump($request);
    }
}



