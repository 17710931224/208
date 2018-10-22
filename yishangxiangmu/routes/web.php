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

session(['uid'=>1]);

//首页
    Route::any('/', 'Home\FirstController@index');


// 后台模板
Route::group([],function(){

	Route::any('admin','Admin\IndexController@index');      
    
    Route::resource('admin/category','Admin\CategoryController');   //后台分类	

    Route::resource('admin/goods', 'Admin\GoodsController');       //后台商品

    Route::resource('admin/lunbo', 'Admin\LunBoController');       //轮播图

    Route::resource('admin/advert','Admin\AdvertController');      //广告
    
});


//前台模板
Route::group([],function(){
         
    
	Route::get('home/goods/{id}','Home\GoodsController@goods');    //分类跳转商品页

	Route::any('search','Home\GoodsController@search');           //搜索跳转商品页

	Route::any('home/product/{id}','Home\GoodsController@product');   //商品详情页

	Route::any('home/quickview/{id}','Home\GoodsController@quickview');   //快速浏览的商品详情页

    

 



});

//后台友情链接
Route::resource('admin/link','admin\LinkController');
	
//后台订单
Route::resource('admin/orders','Admin\OdersController');
Route::any('admin/details/{id}','Admin\OrderDetailsController@show');
Route::any('admin/order/slip','Admin\OrderDetailsController@slip');
Route::any('/admin/evaluation','admin\EvaluationController@index');
Route::any('/admin/evaluation/tg','admin\EvaluationController@update');
Route::any('/admin/evaluation/wtg','admin\EvaluationController@delete');

//前台购物车
// Route::resource('home/cart','Home\CartController');
Route::any('home/cart/create','Home\ShopCartController@create');
Route::any('home/cart/index','Home\ShopCartController@index');
Route::any('home/cart/update','Home\ShopCartController@update');
Route::any('home/cart/delete','Home\ShopCartController@delete');

//前台订单管理
Route::any('home/order/checkout', 'Home\OrderController@checkout');
Route::any('home/tran', 'Home\OrderController@sport');
Route::any('home/order/create', 'Home\OrderController@save');
Route::any('home/order/success', 'Home\OrderController@success');
Route::any('home/order/history', 'Home\OrderController@history');
Route::any('home/order/details/{id}', 'Home\OrderController@details');
Route::any('/home/order/receipt', 'Home\OrderController@receipt');

//前台商品评论
Route::any('/home/reviews/create','Home\ReviewsController@create');	
Route::any('/home/reviews/like','Home\ReviewsController@like');	
Route::any('/home/reviews/stepon','Home\ReviewsController@stepon');
//评论回复
Route::any('/home/reply','Home\ReviewsController@reply');
