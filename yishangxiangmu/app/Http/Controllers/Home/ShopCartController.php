<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cart;

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
