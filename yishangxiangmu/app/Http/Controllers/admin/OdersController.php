<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Orders;

class OdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $res = Orders::orderBy('id','asc')
        ->where(function($query) use($request){
        //检测关键字
        $uname = $request->input('uname');
        // $num = $request->input('num');
        $orders = $request->input('orders');
        //如果用户名不为空
        if(!empty($uname)) {
            $query->where('uname','like','%'.$uname.'%');
        }
        //如果订单号不为空
        if(!empty($orders)) {
            $query->where('order_number','like','%'.$orders.'%');
        }
    })
    ->paginate($request->input('onum', 3));
        // dump($request);
        // $res =  Orders::get();
        return view('Admin/.Order.index',['title'=>'订单添加','res'=>$res,'request'=>$request] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // echo $id;
        $res = Orders::where('id',$id)->first();
        return view('Admin.Order.edit',['title'=>'订单修改页面','res'=>$res]);
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
       
       $this->validate($request, [
        'oname' => 'required',
        'address' => 'required',
        'mobile' => 'required',
        
        ],[
            'oname.required' => '收货人不能为空',
            'address.required' => '收货地址不能为空',
            'mobile.required' => '电话不能为空',
        ]);

       $res = $request->except('_token','_method');

       // dd($res);


       try{
        $rs = Orders::where('id',$id)->update($res);
        return redirect('admin/orders')->with('success','修改成功');
        
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
        //
    }
}
