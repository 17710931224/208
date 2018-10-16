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
        //
        // echo 111111111;
        $res = Cart::orderBy('id','desc')->where('uid',1)->get();
        foreach ($res as $k => $v) {
            $v->sum = ($v->price*$v->quantity);
        }
        
        return view('Home.Cart.index',['title'=>'易商购物车','res'=>$res]);
    }

    public function create(Request $request)
    {
        // const REQ = $request->id;
        $goods = DB::table('es_products')->where('prod_id',$request->id)->get();
        $pic = DB::table('prod_pic')->where('cid',$request->id)->get();
        $cart = Cart::where('uid',2)->where('pid',$request->id)->get();

        if($cart == "[]"){
        
            $res = Cart::insert([
                "uid"=>2,
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
    	$sl = Cart::where('id',$res->id)->update(['quantity'=>$res->quantity]);
    	if($sl){
    		$up = Cart::where('id',$res->id)->first();
    			// $up->sum = round($up->price*$up->quantity,3);
	        return $up;
    	}
        	
        
    }

    //购物车商品移除
    public function delete(Request $request)
    {
    	// echo $request->id;

    	
    	$res = Cart::where('id',$request->id)->delete();

    	if($res){
    		return 1;
    	}else{
    		return 2;
    	}

    }

   
}
