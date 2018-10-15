<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//首页
    Route::any('/', 'Home\FirstController@index');


// 后台模板
Route::group([],function(){

	Route::any('admin','Admin\IndexController@index');      
    
    Route::resource('admin/category','Admin\CategoryController');   //后台分类	

    Route::resource('admin/goods', 'Admin\GoodsController');       //后台商品
    
});

//前台模板
Route::group([],function(){
         
    
	Route::get('home/goods/{id}','Home\GoodsController@goods');    //分类跳转商品页

	Route::any('search','Home\GoodsController@search');           //搜索跳转商品页

	Route::any('home/product/{id}','Home\GoodsController@product');   //商品详情页

	Route::any('home/quickview/{id}','Home\GoodsController@quickview');   //快速浏览的商品详情页

    

 



});


	Route::any();