<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Lunbo;

class LunBoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   


        $data = Lunbo::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('url');
                
                
                if(!empty($gname)) {
                    $query->where('url','like','%'.$gname.'%');
                }
                
                
            })
            ->paginate($request->input('num', 3));
        
        $zong = count($data);
        

        return view ('admin.lunbo.index',['title'=>'轮播图','data'=>$data,'zong'=>$zong,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('admin.lunbo.add',['title'=>'添加轮播图']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('pic','_token');
        
        $pic = $request->file('pic');
        //名字
        $name =  date('Ymd',time()).str_random(6);
        //后缀
        $suffix = $pic->getClientOriginalExtension();
        //移动
        $pic->move('./uploads/lunbo/',$name.'.'.$suffix);
        //存入数组
        $res['pic'] = '/uploads/lunbo/'.$name.'.'.$suffix;
        $res['uptime'] = time();


        try{
            $ju = Lunbo::create($res);

            if($ju){
                return redirect('/admin/lunbo')->with('success','添加轮播图成功');
            }
        }catch(\Exception $e){
            return back()->with('error','添加轮播图失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Lunbo::where('id',$id)->first();
        return view('admin/lunbo/edit',['title'=>'轮播图修改','data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $res = $request->except('pic','_token','_method');


        $res['uptime'] = time();
        
        if($request->hasFile('pic')){
           $pic = $request->file('pic');
            //名字
            $name =  date('Ymd',time()).str_random(6);
            //后缀
            $suffix = $pic->getClientOriginalExtension();
            //移动
            $pic->move('./uploads/lunbo/',$name.'.'.$suffix);
            //存入数组
            $res['pic'] = '/uploads/lunbo/'.$name.'.'.$suffix;

        }
            try{
                $ju = Lunbo::where('id',$id)->update($res);
                if($ju){
                return redirect('/admin/lunbo')->with('success','轮播图修改成功!');

                }
            }catch(\Exception $e){
                return back()->with('error','轮播图修改失败! 返回首页请点击');
                
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Lunbo::find($id);
        $rs = unlink('.'.$res->pic);
        try{
            $ls = Lunbo::destroy($id);
            if($ls){
                return redirect('/admin/lunbo')->with('success','轮播图删除成功!');
            }
        }catch(\Exception $e){
                return back()->with('error','轮播图删除失败! 返回首页请点击');

        }

     }

    
}
