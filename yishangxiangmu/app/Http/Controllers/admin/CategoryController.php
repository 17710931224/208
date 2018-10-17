<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Category;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rs = Category::select(DB::raw('*,concat(path,cid) as paths'))->
        where('cname','like','%'.$request->input('cname').'%')->
        orderBy('paths')->
        paginate($request->input('num',10));

         foreach($rs as $k => $v){
            

            $n = substr_count($v -> path, ',') - 1;

            $v->cname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> cname;

            // $v->catename = str_repeat('|--', $n).$v -> catename;
        }

        return view('admin.category.index',[
            'title'=>'分类列表',
            'rs'=>$rs,
            'request'=>$request

        ]);


       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rs = Category::select(DB::raw('*,concat(path,cid) as paths'))->
            orderBy('paths')->get();

        // dump($rs);

        foreach($rs as $k => $v){
            //path  0,1,4

            $n = substr_count($v -> path, ',') - 1;

            $v->cname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> cname;

            
        }

        return view('admin.category.add',[
            'title'=>'分类添加',
            'rs'=>$rs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   


    	//获取数据
        $rs = $request->except('_token');

        // dump($rs);

        if($rs['pid'] == '0'){

            $rs['path'] = '0,';
        } else{

            $data = Category::where('cid',$rs['pid'])->first();

            $rs['path'] = $data->path.$data->cid.',';
        }

        try{
           
            $info =  Category::create($rs);


            if($info){

                return redirect('/admin/category')->with('success','添加成功');
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
        //
        $data = Category::find($id);


        $info = Category::select(DB::raw('*,concat(path,cid) as paths'))->
            orderBy('paths')->get();

        foreach($info as $k => $v){
            //path  0,1,4

            $n = substr_count($v -> path, ',') - 1;

            $v->cname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> cname;

        return view('admin.category.edit',[
        'title'=>'修改类名',
        'rs'=>$data,
        'info'=>$info

        ]);
        
       }
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
        //
        $rs = $request->only('cname');

        try{
           
            $data = Category::where('cid',$id)->update($rs);

            if($data){

                return redirect('/admin/category')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

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
         //根据id 查找自己底下有没有其他的类别
        
         $res = Category::where('cid',$id)->first();
         $path = $res->path.$res->cid.',';
         
         $data = Category::where('path','like','%'.$path.'%')->delete();

         try{ 
            //还要根据id删除自己
            $rs = Category::where('cid',$id)->delete();
            
            if($rs){
                return redirect('/admin/category')->with('success','删除成功');
            }
        }catch(\Exception $e){
            return back()->with('error','删除失败');
        }
           
        
            
            
    }
        
    
}
