<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function index()
    {

    	return view('home.index',['title'=>'易商购物']);
    }
}
