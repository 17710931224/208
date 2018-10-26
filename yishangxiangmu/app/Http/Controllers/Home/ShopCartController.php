<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cart;
use DB;

class ShopCartController extends Controller
{
    //
    public function index()
    {
        
        $count = Cart::where('uid',session('uid'))->count();

        $res = Cart::orderBy('id','desc')->where('uid',session('uid'))->get();
        foreach ($res as $k => $v) {
            $v->sum = ($v->price*$v->quantity);
        }
        
        return view('Home.Cart.index',['title'=>'易商购物车','res'=>$res,'count'=>$count]);
    }


    public function create(Request $request)
    {
        $goods = DB::table('es_products')->where('prod_id',$request->id)->get();
        $pic = DB::table('prod_pic')->where('cid',$request->id)->get();
        $cart = Cart::where('uid',session('uid'))->where('pid',$request->id)->get();


        if($cart == "[]"){
        
            $res = Cart::insert([
                "uid"=>session('uid'),
                "pid"=>$goods[0]->prod_id,
                "pic"=>$pic[0]->pic,
                "prod_name"=>$goods[0]->prod_name,
                "quantity"=>$request->quantity,
                "price"=>$goods[0]->price
            ]);
            if ($res){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            return 1;
        }
    }



    //购物车 商品数量修改
    public function update(Request $request)
    {
        //
       $product = DB::table('es_products')->where('prod_id',$request->id)->value('availability');
        $res = $request;
        $shu = Cart::where('id',$request->id)->first();
        // return $shu;
        // echo $res->quantity;
        if($res->quantity < 1){
        	$sul = Cart::where('id',$res->id)->delete();
        	if($sul) return 1;
        }
        if ($res->quantity == $shu->quantity) {
        	// $shu->sum = round($shu->price*$shu->quantity,3);
        	return $shu;

        }

        if($res->quantity > $product){

             $sl = Cart::where('id',$res->id)->update(['quantity'=>$product]);
            
            return response()->json(['count'=>$product,'code'=>2]);
             
        }

    	$sl = Cart::where('id',$res->id)->update(['quantity'=>$res->quantity]);
    	if($sl){
    		$up = Cart::where('id',$res->id)->first();
    			
	        return $up;
    	}
        	
        
    }

    //购物车商品移除
    public function delete(Request $request)
    {
    	// echo $request->id;

    	$res = Cart::where('id',$request->id)->delete();
        $count = Cart::where('uid',session('uid'))->count();

    	if($res){
    		return response()->json(['count'=>$count,'code'=>1]);
    	}else{
    		return 2;
    	}

    }

   
}
