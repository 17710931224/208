<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Demo;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $rs = DB::select('select * from goods where id = 2' );

         // $rs = DB::insert('insert into goods(title,pic,price,url) value ("1232",20,20,20)');

        // $rs = DB::table('users')->insert(
        //    ['username'=>'wang','password'=>20,'email'=>123]
        // );
        
       // $arr = ['username'=>'lang','password'=>21,'email'=>123];

       // $rs = DB::table('users')->insertGetid($arr);
    
       // $rs = DB::table('users')->where('id','<','15')->delete();

        // $rs = DB::table('users')->get();
        // $rs = DB::table('users')->where('id',20)->first();
        // $rs = DB::table('users')->value('password');
        // $rs = DB::table('users')->pluck('username');

        // $rs = DB::table('users')->where('id',15)->update(['username'=>'xiaohong']);

        // $rs = DB::table('users')->select('username','password as pass')->get();

        // $rs = DB::table('users')->where('id','like','2%')->orderby('id','desc')->get();

        $demo = new demo('asdaaadad');



        echo $demo ->name;
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
