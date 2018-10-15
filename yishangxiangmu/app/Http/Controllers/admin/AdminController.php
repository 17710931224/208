<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin\Cate;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public static function getCateMessage($pid)
    {
        $cate = Cate::where('pid',$pid)->get();
        $arr = [];
        foreach($cate as $k => $v){
            if($v->pid == $pid){
                $v->sub = self::getCateMessage($v->cid);
                $arr[] = $v;
            }
        }  
        return $arr;
    }

}
