<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FirstController extends Controller
{
    public function index()
    {   


    	$goodsinfos = DB::table('es_products')->inRandomOrder()->take(5)->get();

    	return view('home.index',['title'=>'易商购物','goodsinfos'=>$goodsinfos]);
    }
}
