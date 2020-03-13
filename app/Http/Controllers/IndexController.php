<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pro;

class IndexController extends Controller
{
    public function index(){
    	$pro = Pro::where('status',1)->take(3)->get();
     	return view('index',compact('pro'));
    }
}
