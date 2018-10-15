<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Goods;

use App\Model\Admin\GoodsImg;

use App\Model\Admin\Category;
use DB;
use Config;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $rs = Goods::orderBy('prod_id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gname = $request->input('prod_name');
                $price = $request->input('price');
                
                if(!empty($gname)) {
                    $query->where('prod_name','like','%'.$gname.'%');
                }
                
                if(!empty($price)) {
                    $query->where('price','like','%'.$price.'%');
                }
            })
            ->paginate($request->input('num', 10));

        return view('admin.goods.index',[
            'title'=>'用户名列表页',
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
        //
        $rs = Category::select(DB::raw('*,concat(path,cid) as paths'))->
        orderBy('paths')->get();
        

         foreach($rs as $k => $v){
          

            $n = substr_count($v -> path, ',') - 1;

            $v->cname = str_repeat('&nbsp;', $n * 8).'|--'.$v -> cname;

            
        }
        return view('admin.goods.add',[
            'title'=>'商品添加页面',
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
        //验证
        $rs = $request->except('_token','pic');


        $data = Goods::create($rs);

        $id = $data->prod_id;
        
 
        $gd = $data::find($id);

        //处理图片
        if($request->hasFile('pic')){

            $files = $request->file('pic');

 

            //
            $gm = [];
            foreach($files as $k => $v){

                $info = [];

                $gname = time().rand(1111,9999);

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads/goods/', $gname.'.'.$suffix);

               
                $info['pic'] = '/uploads/goods/'.$gname.'.'.$suffix;

                $gm[] = $info;

            }

            
            
        }
        //添加数据
        
            

            try{
            //关联模型
            $cds = $gd->pics()->createMany($gm);

            if($cds){

                return redirect('/admin/goods')->with('success','添加成功');
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
       

        $info = GoodsImg::find($id);
        $path = $info->pic;

        

        $data = unlink('.'.$path);


        if(!$data){

            return back()->with('error','删除图片失败');

        }

        $rs = GoodsImg::where('prod_id',$id)->delete();

        if(!$rs){

            return back()->with('error','删除数据失败');
        }

        echo 1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //查询商品分类，获取商品类别表的数据
        $info = Category::select(DB::raw('*,concat(path,cid) as paths'))
        ->orderBy('paths')->
        get();
        //将分类美化
        foreach ($info as $k => $v) {
            //按照path字段中的逗号的个数，定义一个长度变量
            $len = substr_count($v->path,',')-1;
            //根据类名级别选择缩进的空格个数
            $v->cname=str_repeat('&nbsp;',$len*5).$v->cname;
        }

        //查询要修改的商品数据，根据传参和prod_id字段值匹配，展示商品的主表信息
        $rs = Goods::find($id);
        //查询要修改的商品图片，根据传参和cid字段匹配，展示商品图片的信息
        $smgpics = Goodsimg::where('cid',$id)->get();
        //返回视图页面，将数据发送到页面遍历，同时显示默认信息
        
        
        return view('admin.goods.edit',['title'=>'修改商品信息','rs'=>$rs,'info'=>$info,'smgpics'=>$smgpics]);
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
                    
       //获取表单信息
        $res = $request->except('_token','_method','pic');

       


      /*  $id = $data->id;

        $gd = $data::find($id);*/

        //处理图片
        if($request->hasFile('pic')){

            $files = $request->file('pic');
            
            //
            $gm = [];
            foreach($files as $k => $v){

                $info = [];

                $gname = time().rand(1111,9999);

                $suffix = $v->getClientOriginalExtension();

                $v->move('./uploads/goods/', $gname.'.'.$suffix);
               
                $info['cid'] = $id;

                $info['pic'] = '/uploads/goods/'.$gname.'.'.$suffix;

                $gm[] = $info;

            }

         //文件上传   商品详情的图片
        DB::table('prod_pic')->insert($gm);

        }
          //添加数据
        // try{
            //关联模型
            // $cds = $gd->gimgs()->saveMany($gm);
            $data = Goods::where('prod_id',$id)->update($res);

             
            if($data){

                return redirect('/admin/goods')->with('success','修改成功');
            }
        // }catch(\Exception $e){

            return back()->with('error','修改失败,未进行修改');

        // }
    
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
        
        $res = GoodsImg::where('cid',$id)->get();
       // dd($res);
        foreach($res as $k => $v){
                //循环遍历删除本地存储的关联图片，返回结果
            if($v->pic){
                $rs = unlink('.'.$v->pic);

            }

        }

        //删除图片之后，再将传参和商品主表gid进行条件判定，删除主表的数据库商品数据
            $gs = Goods::where('prod_id',$id)->delete();
            //同时删除图片表的数据库路径数据
            $data =Goodsimg::where('cid',$id)->delete();


        if($data && $gs){
                return redirect('/admin/goods')->with('success','删除成功');;
            }
    }
}
