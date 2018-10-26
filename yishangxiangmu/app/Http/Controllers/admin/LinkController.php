<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Link;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Link::orderBy('id','asc')
        ->where(function($query) use($request){

        //检测关键字
        $site = $request->input('site');
        //如果站点不为空
        if(!empty($site)) {
            $query->where('site','like','%'.$site.'%');
        }
        
    })
    ->paginate($request->input('snum', 10));

        return view('admin.link.index',['title'=>'浏览友情链接','res'=>$res,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
        // dd($res);
        return view('admin.link.create',['title'=>'添加友情链接']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
        'site' => 'required',
        'link' => 'required',
        ],[
            'site.required' => '站点不能为空',
            'link.required' => '站点链接不能为空',
        ]);
        
        $res = $request->except('_token','imgsrc');
        // dd($res);
        if($request->hasFile('imgsrc')){

            $files = $request->file('imgsrc');

            foreach ($files as $k => $v) {

                $gname = time().rand(1111,9999);

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads/linkimage/', $gname.'.'.$suffix);

                $res['imgsrc'] = '/uploads/linkimage/'.$gname.'.'.$suffix;
                
            }
        }else{
            return back()->with('error','站点商标不能为空');
        }

        try{
            $ss = Link::insert($res);
            return redirect('/admin/link')->with('success','添加友情链接成功');
        }catch(Exception $e){
            return back()->with('error','添加友情链接失败');
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
        $res = Link::where('id',$id)->first();
        return view('admin.link.edit',['title'=>'友情链接修改页面','res'=>$res]);
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
        // echo "string";
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
        // echo $request;
        $res = $request->except('_token','_method');
        // dd($res);
        if($request->hasFile('imgsrc')){
            $dd = Link::find($id);
            unlink('../public'.$dd->imgsrc);
            $files = $request->file('imgsrc');
            foreach ($files as $k => $v) {
                $gname = time().rand(1111,9999);
                $houzhui = $v->getClientOriginalExtension();
                $v->move('./uploads/linkimage',$gname.'.'.$houzhui);
                $res['imgsrc'] = '/uploads/linkimage/'.$gname.'.'.$houzhui;
            }
        }
        try{
            $ss = Link::where('id',$id)->update($res);
            return redirect('/admin/link')->with('success','修改成功');
        }catch(Exception $e){
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
        $dd = Link::find($id);
        // echo $id;
        try{
            $res = Link::where('id',$id)->delete();
            if($res){
                unlink('../public'.$dd->imgsrc);
            }
            return redirect('/admin/link')->with('success','删除成功');
        }catch(Exception $e){
            return back()->with('error','删除失败');
        }


    }
}
