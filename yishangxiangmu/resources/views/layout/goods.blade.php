
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="SuperMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
   
    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/png" href="/homes/ico/favicon-16x16.png"/>
  
   
    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="/homes/css/bootstrap/css/bootstrap.min.css">
    <link href="/homes/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/homes/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="/homes/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/homes/css/themecss/lib.css" rel="stylesheet">
    <link href="/homes/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="/homes/js/minicolors/miniColors.css" rel="stylesheet">
    
    <!-- Theme CSS
    ============================================ -->
    <link href="/homes/css/themecss/so_searchpro.css" rel="stylesheet">
    
    <link href="/homes/css/themecss/so-categories.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="/homes/css/footer/footer1.css" rel="stylesheet">
    <link href="/homes/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="/homes/css/theme.css" rel="stylesheet"> 
    <link href="/homes/css/responsive.css" rel="stylesheet">


    <link href="/homes/css/themecss/so_megamenu.css" rel="stylesheet">



     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}

         .left-block{
         	width: 200px;
         	height: 200px;
         }

        .item-title{ text-overflow: -o-ellipsis-lastline;
				  overflow: hidden;
				  text-overflow: ellipsis;
				  display: -webkit-box;
				  -webkit-line-clamp: 2;
				  line-clamp: 2;
				  -webkit-box-orient: vertical;}

        .goodss { text-overflow: -o-ellipsis-lastline;
				  overflow: hidden;
				  text-overflow: ellipsis;
				  display: -webkit-box;
				  -webkit-line-clamp: 2;
				  line-clamp: 2;
				  -webkit-box-orient: vertical;}

        #goods{
            width:100%;
            height:27px;
        }
    </style>

</head>

<body class="res layout-subpage layout-1 banners-effect-5">

    
    <div id="wrapper" class="wrapper-fluid banners-effect-5">
    

    <!-- Header Container  -->
    <header id="header" class=" typeheader-1">
        
        <!-- Header Top -->
        <div class="header-top hidden-compact">
            <div class="container">
                <div class="row">
                    <div class="header-top-left col-lg-7 col-md-8 col-sm-6 col-xs-4">
                        <div class="hidden-md hidden-sm hidden-xs welcome-msg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欢迎来到SuperMarket！</font><font style="vertical-align: inherit;">在Weekends上每天包裹新的优惠/礼物 - 新优惠券代码：</font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Happy2018</font></font></span> </div>
                        <ul class="top-link list-inline hidden-lg ">
                            <li class="account" id="my_account">
                                <a href="#" title="我的帐户 " class="btn-xs dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户 </font></font></span>  <span class="fa fa-caret-down"></span>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a href="register.html"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 寄存器</font></font></a></li>
                                    <li><a href="login.html"><i class="fa fa-pencil-square-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 登录</font></font></a></li>
                                </ul>
                            </li>
                        </ul>            
                    </div>
                    <div class="header-top-right collapsed-block col-lg-5 col-md-4 col-sm-6 col-xs-8">
                        <ul class="top-link list-inline lang-curr">
                            <li class="currency">
                                <div class="btn-group currencies-block">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon icon-credit "></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> $美元  </font></font><span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu btn-xs">
                                            <li> <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（€）欧元</font></font></a></li>
                                            <li> <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（£）磅    </font></font></a></li>
                                            <li> <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（美元）美元 </font></font></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </li>   
                            <li class="language">
                                <div class="btn-group languages-block ">
                                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                                        <a class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                            <img src="/homes/image/catalog/flags/gb.png" alt="英语" title="英语">
                                            <span class=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">英语</font></font></span>
                                            <span class="fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html"><img class="image_flag" src="/homes/image/catalog/flags/gb.png" alt="英语" title="英语"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 英语 </font></font></a></li>
                                            <li> <a href="index.html"> <img class="image_flag" src="/homes/image/catalog/flags/ar.png" alt="阿拉伯" title="阿拉伯"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 阿拉伯 </font></font></a> </li>
                                        </ul>
                                    </form>
                                </div>
                                
                            </li>
                        </ul>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- //Header Top -->

        <!-- Header center -->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="navbar-logo col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="logo"><a href="/"><img src="/homes/image/catalog/logo.png" title="你的商店" alt="你的商店"></a></div>
                    </div>
                    <!-- //end Logo -->

                    
                    <!-- Search -->
                    <div class="col-lg-7 col-md-6 col-sm-5">
                        <div class="search-header-w">
                            <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i></div>                                
                              
                             <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="/search">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type   hidden-sm hidden-xs">
                                            <select class="no-border" name="cate_id">
                                                <option value="0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">所有类别</font></font></option>
                                                
                                                
                                                
                                            </select>
                                        </div>

                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="在这里输入关键字" name="prod_name">
                                
                                        <button type="submit" class="button-search btn btn-primary" ><i class="fa fa-search"></i></button>
                                    
                                    </div>
                                    <input type="hidden" value="product/search">
                                </form>
                            </div>
                        </div>  
                    </div>
                    <!-- //end Search -->
                    <div class="middle-right col-lg-3 col-md-3 col-sm-3">                  
                        <!--cart-->
                        <div class="shopping_cart">
                            <div id="cart" class="btn-shopping-cart">

                                <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="shopcart">
                                        <span class="icon-c">
                                <i class="fa fa-shopping-bag"></i>
                              </span>
                                        <div class="shopcart-inner">
                                            <p class="text-shopping-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

                                                我的车
                                            </font></font></p>

                                            <span class="total-shopping-cart cart-total-full">
                                   <span class="items_cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02 </font></font></span><font style="vertical-align: inherit;"><span class="items_carts"><font style="vertical-align: inherit;">（162.00美元）</font></span></font><span class="items_cart2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 项目（S）</font></font></span><span class="items_carts"><font style="vertical-align: inherit;"></font></span>
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                    <li>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.html">
                                                            <img src="/homes/image/catalog/demo/product/80/1.jpg" style="width:70px" alt="Yutculpa ullamcon" title="Yutculpa ullamco" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="product.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Yutculpa ullamco</font></font></a> 
                                                    </td>
                                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">X1</font></font></td>
                                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 80.00</font></font></td>
                                                    <td class="text-right">
                                                        <a href="product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" style="width:70px">
                                                        <a href="product.html">
                                                            <img src="/homes/image/catalog/demo/product/80/2.jpg" style="width:70px" alt="Xancetta bresao" title="Xancetta bresao" class="preview">
                                                        </a>
                                                    </td>
                                                    <td class="text-left"> <a class="cart_product_name" href="product.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xancetta bresao</font></font></a> 
                                                    </td>
                                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">X1</font></font></td>
                                                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 60.00</font></font></td>
                                                    <td class="text-right">
                                                        <a href="product.html" class="fa fa-edit"></a>
                                                    </td>
                                                    <td class="text-right">
                                                        <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-left"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小计</font></font></strong>
                                                        </td>
                                                        <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 140.00</font></font></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">生态税（-2.00）</font></font></strong>
                                                        </td>
                                                        <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 2.00</font></font></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">增值税（20％）</font></font></strong>
                                                        </td>
                                                        <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 20.00</font></font></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-left"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></strong>
                                                        </td>
                                                        <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 162.00</font></font></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="text-right"> <a class="btn view-cart" href="/home/cart/index"><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看购物车</font></font></a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看</font></font></a> 
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--//cart-->

                        <ul class="wishlist-comp hidden-md hidden-sm hidden-xs">
                            
                            </li>
                            <li class="wishlist hidden-xs"><a href="/home/wishlists/index" id="wishlist-total" class="top-link-wishlist" title="愿望清单（0） "><i class="fa fa-heart"></i></a>
                            </li>
                        </ul>

                    </div>
                    
                </div>

            </div>
        </div>
        <!-- //Header center -->

        <!-- Header Bottom -->
        <div class="header-bottom hidden-compact">
            <div class="container">
                <div class="row">
                     @php
                            use \App\Http\Controllers\admin\AdminController;
                            $data = AdminController::getCateMessage(0);

                        @endphp 
                    
                    <div class="bottom1 menu-vertical col-lg-2 col-md-3 col-sm-3">
                        <div class="responsive so-megamenu megamenu-style-dev ">
                            <div class="so-vertical-menu ">
                                <nav class="navbar-default">    
                                    
                                    <div class="container-megamenu vertical">
                                        <div id="menuHeading">
                                            <div class="megamenuToogle-wrapper">
                                                <div class="megamenuToogle-pattern">
                                                    <div class="container">
                                                        <div>
                                                            <span></span>
                                                            <span></span>
                                                            <span></span>
                                                        </div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                        所有类别                          
                                                    </font></font></div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="navbar-header">
                                            <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">      
                                                <i class="fa fa-bars"></i>
                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">  所有类别     </font></font></span>
                                            </button>
                                        </div>
                                        <div class="vertical-wrapper">
                                            <span id="remove-verticalmenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu">
                                                       
                                                       @foreach($data as $k=>$v)
                                                       <li class="item-vertical  with-sub-menu hover">
                                                            <p class="close-menu"></p>
                                                            <a href="/search?cate_id=0&prod_name=@php echo substr("{$v->cname}",0,strpos("{$v->cname}", '/')); @endphp"" class="clearfix">
                                                                <img src="/Homes/image/catalog/menu/icons/ico10.png" alt="图标">
                                                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->cname}}</font></font></span>
                                                                <b class="fa-angle-right"></b>
                                                            </a>
                                                            <div class="sub-menu" data-subwidth="60" style="width: 57px;">
                                                                <div class="content">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="row">

                                                                                <div class="col-md-12 static-menu">
                                                                                    <div class="menu">
                                                                                    @if($v->sub)
                                                                                        <ul>
                                                                                        @foreach($v->sub as $kk=>$vv)
                                                                                         <div class="col-md-4 static-menu">
                                                                                        <div class="menu">
                                                                                            <li>
                                                                                                <a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                                                                                    
                                                                                                    echo $aname[0]->cname;

                                                                        @endphp" class="main-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->cname}}</font></font></a>

                                                                                                <ul>
                                                                                                 @foreach($vv->sub as $vvv)
                                                                                                    <li><a href="/search?cate_id=0&prod_name=@php $pname = \DB::table('es_categroies')->where('cname',$vvv->cname)->get();
                                                                                                    
                                                                                                    echo $pname[0]->cname;

                                                                        @endphp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vvv->cname}}</font></font></a></li>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                   @endforeach
                                                                                                </ul>
                                                                                            </li>
                                                                                            </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </ul>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                             </div>   
                                                                         </div>       
                                                                    </div>                      
                                                                </div>
                                                            </div>
                                                        </li>
                                                         @endforeach
                                                         <li class="loadmore">
                                                            <i class="fa fa-plus-square-o"></i>
                                                            <span class="more-view"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Open Categories</font></font></span>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Main menu -->
                     <div class="main-menu-w col-lg-10 col-md-9">
                        <div class="responsive so-megamenu megamenu-style-dev">
                            <nav class="navbar-default">
                                <div class=" container-megamenu  horizontal open ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="megamenu-wrapper">
                                        <span id="remove-megamenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container-mega">
                                                <ul class="megamenu" data-transition="slide" data-animationtime="250">
                                                    <li class="home hover">
                                                        <a href="/"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">主页</font></font></a>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">特征</font></font></strong>
                                                            <img class="label-hot" src="/homes/image/catalog/menu/new-icon.png" alt="图标项目">
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; right: auto; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物页面</font></font></a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="cart.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车页面</font></font></a></li>
                                                                                    <li><a href="checkout.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结帐页面</font></font></a></li>
                                                                                    <li><a href="compare.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">比较页面</font></font></a></li>
                                                                                    <li><a href="wishlist.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">愿望清单</font></font></a></li>
                                                                                
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="column">
                                                                            <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户页面</font></font></a>
                                                                            <div>
                                                                                <ul class="row-list">
                                                                                    <li><a href="login.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录页面</font></font></a></li>
                                                                                    <li><a href="register.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册页面</font></font></a></li>
                                                                                    <li><a href="my-account.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户</font></font></a></li>
                                                                                    <li><a href="/home/order/history"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></a></li>
                                                                                    <li><a href="order-information.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单信息</font></font></a></li>
                                                                                    <li><a href="return.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品退货</font></font></a></li>
                                                                                    <li><a href="gift-voucher.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">礼品券</font></font></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支持</font></font></strong>
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 40%; display: none; right: auto;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="faq.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常问问题</font></font></a></li>
                                                                            
                                                                            <li><a class="subcategory_item" href="sitemap.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站地图</font></font></a></li>
                                                                            <li><a class="subcategory_item" href="contact.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></a></li>
                                                                            <li><a class="subcategory_item" href="banner-effect.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横幅效应</font></font></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <ul class="row-list">
                                                                            <li><a class="subcategory_item" href="about-us.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="with-sub-menu hover">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></strong>
                                                            <img class="label-hot" src="/homes/image/catalog/menu/hot-icon.png" alt="图标项目">
                                                  
                                                            <b class="caret"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 100%; display: none; right: 0px;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-md-3 img img1">
                                                                                <a href="#"><img src="/homes/image/catalog/menu/megabanner/image-1.jpg" alt="banner1"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img2">
                                                                                <a href="#"><img src="/homes/image/catalog/menu/megabanner/image-2.jpg" alt="banner2"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img3">
                                                                                <a href="#"><img src="/homes/image/catalog/menu/megabanner/image-3.jpg" alt="banner3"></a>
                                                                            </div>
                                                                            <div class="col-md-3 img img4">
                                                                                <a href="#"><img src="/homes/image/catalog/menu/megabanner/image-4.jpg" alt="banner4"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$data[1]->cname}}</font></font></a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                    @if($data[1]->sub)

                                                                                    @foreach($data[1]->sub as $kk=>$vv)
                                                                                    
                                                                                        <li><a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                                                                        echo $aname[0]->cname;
                                                                                        @endphp" class="main-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->cname}}</font></font></a></li>
                                                                                    @endforeach  
                                                                                    @endif  
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$data[3]->cname}}</font></font></a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                    @if($data[3]->sub)

                                                                                    @foreach($data[3]->sub as $kk=>$vv)
                                                                                    
                                                                                        <li><a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                                                                        echo $aname[0]->cname;
                                                                                        @endphp" class="main-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->cname}}</font></font></a></li>
                                                                                    @endforeach  
                                                                                    @endif  
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$data[2]->cname}}</font></font></a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                    @if($data[2]->sub)

                                                                                    @foreach($data[2]->sub as $kk=>$vv)
                                                                                    
                                                                                        <li><a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                                                                        echo $aname[0]->cname;
                                                                                        @endphp" class="main-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->cname}}</font></font></a></li>
                                                                                    @endforeach  
                                                                                    @endif  
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <a href="#" class="title-submenu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$data[0]->cname}}</font></font></a>
                                                                        <div class="row">
                                                                            <div class="col-md-12 hover-menu">
                                                                                <div class="menu">
                                                                                    <ul>
                                                                                    @if($data[0]->sub)

                                                                                    @foreach($data[0]->sub as$kk=>$vv)
                                                                                    
                                                                                        <li><a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                                                                        echo $aname[0]->cname;
                                                                                        @endphp" class="main-menu"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->cname}}</font></font></a></li>
                                                                                    @endforeach  
                                                                                    @endif  
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">饰品</font></font></strong>
                                         
                                                        </a>
                                            
                                                    </li>
                                                    <li class="">
                                                        <p class="close-menu"></p>
                                                        <a href="blog-page.html" class="clearfix">
                                                            <strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">博客</font></font></strong>
                                                            <span class="label"></span>
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                </ul>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- //end Main menu -->
                                      
                    <div class="bottom3">                        
                        <div class="telephone hidden-xs hidden-sm hidden-md">
                            <ul class="blank"> 
                                <li><a href="#"><i class="fa fa-truck"></i>track your order</a></li> 
                                <li><a href="#"><i class="fa fa-phone-square"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">热线（+123）4 567 890</font></font></a></li> 
                            </ul>
                        </div>  
                        <div class="signin-w hidden-md hidden-sm hidden-xs">
                            <ul class="signin-link blank">                            
                                <li class="log login"><i class="fa fa-lock"></i> <a class="link-lg" href="login.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">或</font></font><a href="register.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">注册</font></font></a></li>                                
                            </ul>                       
                        </div>                  
                    </div>
                    
                </div>
            </div>

        </div>
    </header>
    <!-- //Header Container  -->

    <div class="main-container container">
        <ul class="breadcrumb">
           
           
           
        </ul>
                      
                        
        <div class="row">
            <!--Left Part Start -->
            <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
                <div class="module category-style">
                    <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h3>
                    <div class="modcontent">
                        <div class="box-category">
                            <ul id="cat_accordion" class="list-group">
                                @foreach($data as $k=>$v)
                                <li class="hadchild cutom-parent-li"><a href="/search?cate_id=0&prod_name=@php echo substr("{$v->cname}",0,strpos("{$v->cname}", '/')); @endphp" class="cutom-parent"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->cname}}</font></font><span class="dcjq-icon"></span></a>   <span class="button-view  fa fa-plus-square-o"></span>
                                 @if($v->sub)
                                    <ul style="display: none;">
                                     @foreach($v->sub as $kk=>$vv)
                                        <li><a href="/search?cate_id=0&prod_name=@php $aname = \DB::table('es_categroies')->where('cname','like',$vv->cname)->get();
                                        echo $aname[0]->cname;
                                        @endphp">{{$vv->cname}}</a>
                                        </li>
                                     @endforeach    
                                    </ul>
                                @endif
                                </li>
                               @endforeach 
                                
                            </ul>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="module product-simple">
                    <h3 class="modtitle">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新产品</font></font></span>
                    </h3>
                    <div class="modcontent">
                        <div class="so-extraslider">
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner">
                                <div class="item ">
                                @foreach($goods as $k=>$v)
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}} ">
                                                    <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->first();
                                                                                echo $gpic->pic;
                                                                        @endphp" alt="">
                                                    </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->prod_name}} </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$v->price}}</font></font></span>&nbsp;&nbsp;

                                                

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                 @endforeach 
                                </div>
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>
                <div class="module banner-left hidden-xs ">
                    <div class="banner-sidebar banners">
                      <div>
                        <a title="横幅图像" href="#"> 
                          <img src="/homes/image/catalog/banners/banner-sidebar.jpg" alt="横幅图像"> 
                        </a>
                      </div>
                    </div>
                </div>
            </aside>
@section('content')
	<!-- Main Container  -->
	
	<!-- //Main Container -->
@show	

	<!-- Footer Container -->
    <footer class="footer-container typefooter-1">
        <!-- Footer Top Container -->
 
            <div class="container">
                <div class="row footer-top">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="socials-w">
                          <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关注社交</font></font></h2>
                          <ul class="socials">
                            <li class="facebook"><a href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                            <li class="twitter"><a href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                            <li class="google_plus"><a href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i><span>Google Plus</span></a></li>
                            <li class="pinterest"><a href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                            <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i><span>Youtube</span></a></li>
                            <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i><span>linkedin</span></a></li>
                            <li class="skype"><a href="#" target="_blank"><i class="fa fa-skype"></i><span>skype</span></a></li>
                          </ul>
                        </div>
                        




                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="module newsletter-footer1">
                            <div class="newsletter">

                                <div class="title-block">
                                    <div class="page-heading font-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        注册简报
                                    </font></font></div>
                                    
                                </div>

                                <div class="block_content">
                                    <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                            </div>
                                            <div class="subcribe">
                                                <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            订阅
                                        </font></font></button>
                                            </div>
                                        </div>
                                    </form>


                                </div>
                                <!--/.modcontent-->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
      
        <!-- /Footer Top Container -->
        
        <div class="footer-middle ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-infos">
                        <div class="infos-footer">
                            <a href="#"><img src="/homes/image/catalog/logo-footer.png" alt="图片"></a>
                            <ul class="menu">
                                <li class="adres"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    SanLuispotosí，centro historico，78000 sanluispotosí，SPL，Mexico
                                </font></font></li>
                                <li class="phone"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    （+0214）0 315 215  - （+0214）0 315 215
                                </font></font></li>
                                <li class="mail">
                                    <a href="mailto:contact@opencartworks.com"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">contact@opencartworks.com</font></font></a>
                                </li>
                                <li class="time"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                    开放时间：上午8:00  - 下午6:00
                                </font></font></li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-information box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">信息</font></font></h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常问问题</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">保修和服务</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">全天候支持</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品注册</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品支持</font></font></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-account box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户</font></font></h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">品牌</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">礼券</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关联公司</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">特价</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题解答</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">自定义链接</font></font></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-clear">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h3>
                            <div class="modcontent">
                              <ul class="menu">
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动和派对用品</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家居装修</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯具和灯具</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">厨房和浴室装置</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客户服务</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">厨房和餐厅</font></font></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                            <div class="module clearfix">
                                <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务</font></font></h3>
                                <div class="modcontent">
                                    <ul class="menu">
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">返回</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支持</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">网站地图</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客户服务</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">自定义链接</font></font></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 col-style">
                        <div class="box-service box-footer">
                          <div class="module clearfix">
                            <h3 class="modtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></h3>
                            <div class="modcontent">
                              <ul class="menu">
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">活动和派对用品</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家居装修</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">灯具和灯具</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">厨房和浴室装置</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客户服务</font></font></a></li>
                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">厨房和餐厅</font></font></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                        <div class="footer-b">
                            <div class="bottom-cont">
                                <a href="#"><img src="/homes/image/catalog/demo/payment/pay1.jpg" alt="图片"></a>
                                 
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">**订单满$ 350减$ 50，代码为BOO50。</font><font style="vertical-align: inherit;">订单满$ 500立减$ 75，折扣码为BOO75。</font><font style="vertical-align: inherit;">订单满$ 150减$ 150，使用折扣码BOO150。</font><font style="vertical-align: inherit;">有效期为2016年10月28日至2016年10月31日。优惠不可与其他优惠或促销活动同时使用，不可兑换且不可退款。</font><font style="vertical-align: inherit;">优惠只适用于美国境内。</font></font></p>
                            </div>
                        </div>
            </div>
        </div>
        <!-- Footer Bottom Container -->
        <div class="footer-bottom">
            <div class="container">
                <div class="col-lg-12 col-xs-12 payment-w">
                <img src="/homes/image/catalog/demo/payment/payment.png" alt="imgpayment">
                </div>
            </div>
            <div class="copyright-w">
                <div class="container">
                    <div class="copyright"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    SuperMarket©2018演示商店。</font><font style="vertical-align: inherit;">版权所有。</font><font style="vertical-align: inherit;">由</font><a href="http://www.bootstrapmb.com" target="_blank"><font style="vertical-align: inherit;">OpenCartWorks.Com</font></a><font style="vertical-align: inherit;">设计</font></font><a href="http://www.bootstrapmb.com" target="_blank"><font style="vertical-align: inherit;"></font></a>
                    </div>
                </div>
            </div>            
        </div>
        <!-- /Footer Bottom Container -->
        
        
            <!--Back To Top-->
        <div class="back-to-top hidden-top"><i class="fa fa-angle-up"></i></div>
    </footer>
    <!-- //end Footer Container -->

    </div>
	
	
	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
	<i class="fa fa-cog"></i>
</div>		

<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/homes/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="/homes/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/homes/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="/homes/js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="/homes/js/themejs/libs.js"></script>
	<script type="text/javascript" src="/homes/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="/homes/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="/homes/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="/homes/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="/homes/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="/homes/js/jquery-ui/jquery-ui.min.js"></script>
	
	
	<!-- Theme files
	============================================ -->
	
	
	<script type="text/javascript" src="/homes/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="/homes/js/themejs/addtocart.js"></script>
	<script type="text/javascript" src="/homes/js/themejs/application.js"></script>
	
</body>
@section('js')


@show    
</html>
