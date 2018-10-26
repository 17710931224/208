<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Link;

class FirstController extends Controller
{
    public function index(Request $request)
    {   

        // $request->session()->regenerate();

        $goods = DB::table('es_products')->inRandomOrder()->take(4)->get();   

    	$goodsinfos = DB::table('es_products')->inRandomOrder()->take(5)->get();

    	$phone = DB::table('es_products')->where('prod_name','like','%手机%')->take(4)->orderBy('price', 'desc')->get();     //手机商品

    	$sole = DB::table('es_products')->where('prod_name','like','%家纺%')->orderBy('price', 'desc')->get(); 

    	$dress = DB::table('es_products')->where('prod_name','like','%女装%')->orderBy('price', 'desc')->get();

    	$books = DB::table('es_products')->where('prod_name','like','%书%')->orderBy('price', 'desc')->get();

    	$computer = DB::table('es_products')->where('prod_name','like','%电脑整机%')->orderBy('price', 'desc')->get();
    	
        
    	$times = DB::table('es_products')->where('created_at','=','2018-10-15')->inRandomOrder()->take(4)->orderBy('price', 'asc')->get();
  

        $site = Link::get();
    	

    	

    	return view('home.index',['title'=>'易商购物',
    		'goods'=>$goods,
    		'goodsinfos'=>$goodsinfos,
    		'times'=>$times,
    		'phone'=>$phone,
    		'sole'=>$sole,
    		'dress'=>$dress,
    		'books'=>$books,
    		'computer'=>$computer,
            'site' => $site
        ]);
    }
}
