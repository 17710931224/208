<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Wishlists;
use DB;
class WishlistsController extends Controller
{
    //

	public function index()
	{
		// $commit = Wishlists::find(1);
		$wishlists = Wishlists::orderBy('id','desc')->where('uid',session('uid'))->get();
		$count = Wishlists::where('uid',session('uid'))->count();
		// dd($count);
		// dd($wishlists);
		if($count > 0){
			foreach ($wishlists as $k => $v) {
				
				$goods[] = $v->goods()->get();
			}
			
			foreach ($goods as $k => $v) {
				foreach ($v as $vv) {
					$vv->pic = DB::table('prod_pic')->where('cid',$vv->prod_id)->select('pic')->first();
				}
			}
			return view('home.wishlists.index',['title'=>'愿望清单列表','goods'=>$goods,'count'=>$count]);
		}else{
			return view('home.wishlists.index',['count'=>$count]);
		}	
	}

    public function create(Request $request)
    {	
    	// echo $request;
    	$re = Wishlists::where('uid',session('uid'))->where('pid',$request->pid)->get();

    	// echo $re;
    	if($re == "[]"){
	    	$res = Wishlists::insert(['uid'=>session('uid'),'pid'=>$request->pid]);
	    	if($res) return 1;
    	}else{
    		return 1;
    	}
    }

    public function delete(Request $request)
    {
    	// echo $request;
    	$res = Wishlists::where('uid',session('uid'))->where('pid',$request->pid)->delete();
    	$count = Wishlists::where('uid',session('uid'))->count();
    	if($res){
    		return response()->json(['code'=>1,'count'=>$count]);;
    	}	

    }
}
