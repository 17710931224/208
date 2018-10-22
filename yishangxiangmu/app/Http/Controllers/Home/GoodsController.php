<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Cate;
use App\Model\Admin\Goods;
use DB;

use App\Model\Home\Reviews;
use App\Model\Home\Reviews_pic;

class GoodsController extends Controller
{   


   public function index(Request $request)
   {
      
      


      return view('layout.goods',['title'=>'商品页','cates'=>$cates]);
   }



    public function goods($id)
    {  
       $goodsinfos = Goods::where('cate_id',$id)->get(); //商品信息
       
       $cate_id = Cate::where('cid',$id)->pluck('pid');
       $cate = Cate::where('cid','=',$cate_id)->get();     //获取分类父级

       $cates = Cate::where('pid','=',$cate_id)->get();    //获取商品


       $goods = Goods::inRandomOrder()->take(5)->get();    //左侧商品随机显示
       
       


       return view('home.goods.goods',['title'=>'商品页','goodsinfos'=>$goodsinfos,'cate'=>$cate,'cates'=>$cates,'goods'=>$goods]);
     }


     public function search(Request $request)
     {
     	 $cate_id = $request->input('prod_name');
      

       $goods = Goods::inRandomOrder()->take(4)->get();
     	


       $datas = Goods::where('prod_name','like','%'.$request->input('prod_name').'%')
       		
            ->paginate($request->input('num', 10));

     	 
     	
        
     	 return view('home.goods.search',[
     	 	'title'=>'商品页',
     	 	'request'=>$request,
     	 	'goods'=>$goods,
        'datas'=>$datas,
        
     	 	'cate_id'=>$cate_id]);
     } 



     public function product($id)
     {

        
        $goodsinfos = Goods::where('prod_id','=',$id)->first();


        //$cgoods = DB::table('es_products')->where('cate_id','=',$id)->pluck('prod_id');

        //$gpics = DB::table('prod_pic')->where('cid','=',$cgoods)->get();
        //
        $gpics = DB::table('prod_pic')->where('cid',$goodsinfos->prod_id)->get();

        $times = Goods::where('created_at','=','2018-10-16')->inRandomOrder()->take(4)->orderBy('price', 'asc')->get();
        

    
        $goods = Goods::inRandomOrder()->take(8)->get();

        //评论查询
        $reviews = Reviews::orderBy('id','desc')->where('prod_id',$id)->paginate(3);
        
        $count = Reviews::where('prod_id',$id)->count();
        // dd($tiaoshu);
        foreach ($reviews as $k => $v) {
             $v['pic'] = $v->goodspic()->get();
             $v['reply'] = $v->reply()->orderBy('id',"desc")->take(5)->get();
             $v['reply_count'] = $v->reply()->count();

        }

        //查询评论回复
        // dd($reviews);

     	return view('home.goods.product',['title'=>'商品详情页','goods'=>$goods,'goodsinfos'=>$goodsinfos,'gpics'=>$gpics,'reviews'=>$reviews,'count'=>$count,'times'=>$times]);
     }


     public function quickview($id)
     {
        $goodsinfos = Goods::where('prod_id','=',$id)->first();
        $gpics = DB::table('prod_pic')->where('cid',$goodsinfos->prod_id)->get();

     	return view('home.goods.quickview',['goodsinfos'=>$goodsinfos,'gpics'=>$gpics]);
     }

}


 