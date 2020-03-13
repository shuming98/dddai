<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GrowController extends Controller
{
    public function grow(){
    	$today = date('Ymd',time());
    	$tasks = DB::table('tasks')->where('enddate','>=',$today)->get();
    	foreach($tasks as $t){
    		$t = (array)$t;
    		$t['paytime'] = $today;
    		unset($t['tid']);
    		unset($t['enddate']);
    		DB::table('grows')->insert($t);
    	}
    }
}
