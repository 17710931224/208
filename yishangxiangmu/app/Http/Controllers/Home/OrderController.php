<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Cart;
use DB;
use App\Model\Home\Order;
use App\Model\Home\OrderDetails;

class OrderController extends Controller
{
    //



      //结算业商品详情
	   public function checkout(Request $request)
	   {	
	   		$tran = DB::table('es_transport')->get();
	   		// dd($tran);
	   		$res = Cart::orderBy('id','desc')->where('uid',1)->get();
	   		$summ = null;
	        foreach ($res as $k => $v) {
	            $v->sum = ($v->price*$v->quantity);
	            $summ += $v->sum;
	        }
	   		return view('Home.Cart.checkout',['res'=>$res,'summ'=>$summ,'tran'=>$tran]);
	   }

	   
	   //运输方式
	   public function sport(Request $request)
	   {
	   	 // echo $request->id;
	   	$tran = DB::table('es_transport')->where('id',$request->id)->value('freight');
	   	echo $tran;

	   }

	  

	   //添加订单
	   public function save(Request $request)
	   {	
	   		// echo "<pre>";
	   		$res = Cart::orderBy('id','desc')->where('uid',1)->get(['pid','prod_name','description','quantity','price','pic']);
	   		foreach ($res as $k => $v) {
	   			$v['total'] = $v->price*$v->quantity;
	   		}
	   		
	   		
	   		 // $ss = time().rand(1111,9999);
	   		function getRandomString($len, $chars=null)  
			{  
			    if (is_null($chars)) {  
			        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";  
			    }  
			    mt_srand(10000000*(double)microtime());  
			    for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++) {  
			        $str .= $chars[mt_rand(0, $lc)];  
			    }  
			    return $str;
			}

			$ord = $request->except('_token','uemail','uphone','s_province','s_city','s_county','confirm_agree','shipping_address');
				$ord['order_number'] = getRandomString(7).time();
				$ord['created_at'] = time();

			// dd($ord);
			try {
					$data = Order::create($ord);
				} catch (Exception $e) {
					
					return back();
				}	
				 
		   	$id = $data->id;

		   	$order = $data->find($id);	
		   	try {
					$der = $order->goods()->createMany($res->toArray());
					if ($der) {
						$cart = Cart::where('uid',1)->delete();
						return redirect('/home/order/success');
					}
				} catch (Exception $e) {
					
					return back();
				}


		   	
		}

		//历史订单浏览
		public function history()
		{	
			$order  = Order::where('uid',1)->get();
			// dd($order != '[]');
			if($order != '[]'){
				foreach ($order as $v) {
					$goods = $v->goods()->get()->toArray();
				}
				// dd($order);
				return view('Home.Order.order_history',['order'=>$order,'goods'=>$goods]);
			}else{
				return view('Home.Order.order_history_null');
			}
		}

		//订单详情
		public function details($id)
		{	
			$order = Order::where('id',$id)->first();
			$details = OrderDetails::where('oid',$id)->get();
			foreach ($details as $k => $v) {
				$v['sum'] = $v->quantity*$v->price;
			}
			return view('Home.Order.order_details',['details'=>$details,'order'=>$order]);
		}


		public function receipt(Request $request)
		{
			// echo $request->id;
			$res = Order::where('id',$request->id)->update(['status'=>3]);
			if($res){
				$rs = Order::where('id',$request->id)->update(['receipt_time'=>time()]);
				return 1;
			}else{
				return 2;
			}
		}

		public function success()
		{

			return view('home.Order.order_success');
		}		   	   
}
