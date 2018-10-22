<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Home\Reviews;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // echo 1111;
        $res = Reviews::where('status',0)->paginate(5);
        foreach ($res as $k => $v) {
            $v['pic'] = $v->goodspic()->get();
        }
        // dd($res);
        return view('admin.reviews.evaluation',['res'=>$res,'title'=>'评论审核']);

    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
       // echo  $request->rid;
        $res = Reviews::where('id',$request->rid)->update(['status'=>1]);
        if($res) return 1;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
        $res = Reviews::where('id',$request->rid)->delete();
        if($res) return 1;
    }
}
