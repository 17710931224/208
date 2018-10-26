<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class aadvertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('aadvert')->orderBy('aid','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('aname');
                
                
                if(!empty($gname)) {
                    $query->where('aname','like','%'.$gname.'%');
                }
                
                
            })
            ->paginate($request->input('num', 10));
        return view ('admin.aadvert.index',['title'=>'广告','data'=>$data,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.aadvert.add',['title'=>'添加广告']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token','apic');
        // dd($res);

         try{
        
            
            if($request->hasFile('apic')){

                    //  名字
                    $name = date('Ymd',time()).str_random(6);

                    //  后缀
                    $suffix = $request->file('apic')->getClientOriginalExtension();

                    //  移动
                    $move = $request->file('apic')->move('./uploads/aadvert/',$name.'.'.$suffix);

                    $res['apic'] = '/uploads/aadvert/'.$name.'.'.$suffix;

                    // dd($res);

            }
            $res['status'] = 1;
            // dd($res);

            $data = DB::table('aadvert')->insert($res);

            if($data){
                return redirect('/admin/aadvert')->with('success','添加成功');
            } else {
                return back()->with('error','添加失败');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');

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
        $data = DB::table('aadvert')->where('aid',$id)->first();
        return view('admin/aadvert/edit',['title'=>'广告修改','data'=>$data]);
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
        $res = $request->except('apic','_token','_method');

        try{
        
            
            if($request->hasFile('apic')){

                    $aa = DB::table('aadvert')->where('aid',$id)->first();
                    // dd($aa->adpic);
                    //删除文件
                    unlink('.'.$aa->apic);
                    // dd($bb);

                    //  名字
                    $name = date('Ymd',time()).str_random(6);

                    //  后缀
                    $suffix = $request->file('apic')->getClientOriginalExtension();

                    //  移动
                    $move = $request->file('apic')->move('./uploads/aadvert/',$name.'.'.$suffix);

                    $res['apic'] = '/uploads/aadvert/'.$name.'.'.$suffix;

                    // dd($res);

            }

            $data = DB::table('aadvert')->where('aid',$id)->update($res);

            if($data){
                return redirect('/admin/aadvert')->with('success','添加成功');
            } else {
                return back()->with('error','添加失败');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');

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
        //
    }
}
