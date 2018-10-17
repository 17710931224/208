<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Reviews;


class ReviewsController extends Controller
{
    //
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
}
