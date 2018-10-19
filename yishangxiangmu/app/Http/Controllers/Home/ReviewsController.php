<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Reviews;
use DB;

class ReviewsController extends Controller
{
    //添加评论
    public function create(Request $request)
    {
    	
        try{
        	$res = Reviews::create(['user_id'=>1,'prod_id'=>$request->prod_id,'content'=>$request->content,'star'=>$request->star,'create_at'=>time()]);
        }catch(\Excepition $e){
            return back();
        }

    	$id = $res->id;
    	$reviews = $res->find($id);
    	// dd($reviews);
        if($request->hasFile('pic')){

            $files = $request->file('pic');

            $gm = [];
            foreach($files as $k => $v){

                $info = [];

                $gname = time().rand(1111,9999);

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads/reviews/', $gname.'.'.$suffix);

                $info['pic'] = '/uploads/reviews/'.$gname.'.'.$suffix;
                // dd($info);
                $gm[] = $info;

            }

            try{
               $cds = $reviews->goodspic()->createMany($gm); 
               return redirect("home/product/$request->prod_id");
            }catch(\Excepition $e){
                return back();
            }

        }
    }


    //评论点赞
    public function like(Request $request)
    {   
        $yidian = DB::table('es_comment')->where('rid',$request->id)->where('like_id',2)->get();
        // return $yidian;
        if($yidian == "[]"){
            $like = Reviews::where('id',$request->id)->value('like');
            $like++;
            $likes = Reviews::where('id',$request->id)->update(['like'=>$like]);

            if($likes){
                $dianji = DB::table('es_comment')->insert(['rid'=>$request->id,'like_id'=>2]);
            }
            if($dianji){
                // return response()->json(['count'=>$like,'code'=>1]);
                return 1;
            }
         }else{
            return 2;
         }
        
    }

    //评论踩
    public function stepon(Request $request)
    {
        // echo $request;
        $cai = DB::table('es_comment')->where('rid',$request->id)->where('report_id',2)->get();

        // echo $cai;
        if($cai == "[]"){

            $step = Reviews::where('id',$request->id)->value('stepon');
            $step++;
            $stepon = Reviews::where('id',$request->id)->update(['stepon'=>$step]);
            if($stepon){
                $yidian = DB::table('es_comment')->where('rid',$request->id)->where('like_id',2)->get();
                // echo $yidian[0]->id;
                if($yidian){
                    DB::table('es_comment')->where('id',$yidian[0]->id)->update(['report_id'=>2]);
                    return 1;
                }else{
                    $on = DB::table('es_comment')->insert(['rid'=>$request->id,'report_id'=>2]);
                    return 1;
                }
            }
        }else{
            return 2;
        }    
        // echo $step;
    }

    //评论回复
    public function reply(Request $request)
    {
        // echo $request->rid;
         $res = DB::table('es_reply')->insert([
            'rid' => $request->rid,
            'reply_content' => $request->content,
            'create_at' => time(),
            'uid' => $request->uid
        ]);

         if($res){
            return 1;
         }else{
            return 2;
         }
    }
}
