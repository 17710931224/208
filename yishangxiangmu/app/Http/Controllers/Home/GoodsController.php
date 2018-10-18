<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Cate;

use DB;

class GoodsController extends Controller
{   


   public function index(Request $request)
   {
      
      


      return view('layout.goods',['title'=>'商品页','cates'=>$cates]);
   }



    public function goods($id)
    {  
       $goodsinfos = DB::table('es_products')->where('cate_id',$id)->get(); //商品信息
       
       $cate_id = Cate::where('cid',$id)->pluck('pid');
       $cate = Cate::where('cid','=',$cate_id)->get();     //获取分类父级

       $cates = Cate::where('pid','=',$cate_id)->get();    //获取商品


       $goods = DB::table('es_products')->inRandomOrder()->take(5)->get();    //左侧商品随机显示
       
       


       return view('home.goods.goods',['title'=>'商品页','goodsinfos'=>$goodsinfos,'cate'=>$cate,'cates'=>$cates,'goods'=>$goods]);
     }


     public function search(Request $request)
     {
     	 

     	 $res = DB::table('es_products')->where('prod_name','like','%'.$request->input('prod_name').'%')->get();
         

         $cate = DB::table('es_categroies')->where('cname','like','%'.$request->input('prod_name').'%')->get();
   
         

       //   $cid = DB::table('es_categroies')->where('cid','=',$request->input('cate_id'))->pluck('path');
         
       //   $cid_id = DB::table('es_categroies')->where('pid','=',$request->input('cate_id'))->pluck('cid');
        $cate_id = $request->input('prod_name');


     	 // $cate = DB::table('es_categroies')->where('path','=',$cid[0].$cate_id.','.$cid_id[0].',')->get();
     	
     	$goods = DB::table('es_products')->inRandomOrder()->take(5)->get();
        
     	 return view('home.goods.search',[
     	 	'title'=>'商品页',
     	 	'res'=>$res,
     	 	'goods'=>$goods,
     	 	'cate'=>$cate,
     	 	'cate_id'=>$cate_id]);
     } 



     public function product($id)
     {

        
        $goodsinfos = DB::table('es_products')->where('prod_id','=',$id)->first();


        //$cgoods = DB::table('es_products')->where('cate_id','=',$id)->pluck('prod_id');

        //$gpics = DB::table('prod_pic')->where('cid','=',$cgoods)->get();
        //
        $gpics = DB::table('prod_pic')->where('cid',$goodsinfos->prod_id)->get();
        

    
        $goods = DB::table('es_products')->inRandomOrder()->take(5)->get();

     	return view('home.goods.product',['title'=>'商品详情页','goods'=>$goods,'goodsinfos'=>$goodsinfos,'gpics'=>$gpics]);
     }


     public function quickview($id)
     {
        $goodsinfos = DB::table('es_products')->where('prod_id','=',$id)->first();
        $gpics = DB::table('prod_pic')->where('cid',$goodsinfos->prod_id)->get();

     	return view('home.goods.quickview',['goodsinfos'=>$goodsinfos,'gpics'=>$gpics]);
     }

}
