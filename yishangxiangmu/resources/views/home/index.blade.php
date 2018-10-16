@extends('layout.homes')

@section('title',$title)

@section('content')


     <div class="main-container container">
    <div id="content">
        <div class="content-top-w">
            
            <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 main-left">
                <div class="module col1 hidden-sm hidden-xs"></div>
            </div>    
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 main-right">
                <div class="slider-container row"> 
                                
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col2">
                        <div class="module sohomepage-slider ">
                            <div class="yt-content-slider owl2-carousel owl2-theme owl2-responsive-1200 owl2-loaded" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                
                                
                                
                            <div class="owl2-stage-outer"><div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2475px;"><div class="owl2-item active" style="width: 825px; margin-right: 0px;"><div class="yt-content-slide">
                                    <a href="#"><img src="/homes/image/catalog/slideshow/home1/slider-1.jpg" alt="slider1" class="img-responsive"></a>
                                </div></div><div class="owl2-item" style="width: 825px; margin-right: 0px;"><div class="yt-content-slide">
                                    <a href="#"><img src="/homes/image/catalog/slideshow/home1/slider-2.jpg" alt="slider2" class="img-responsive"></a>
                                </div></div><div class="owl2-item" style="width: 825px; margin-right: 0px;"><div class="yt-content-slide">
                                    <a href="#"><img src="/homes/image/catalog/slideshow/home1/slider-3.jpg" alt="slider3" class="img-responsive"></a>
                                </div></div></div></div><div class="owl2-controls"><div class="owl2-nav"><div class="owl2-prev" style="display: none;"></div><div class="owl2-next" style="display: none;"></div></div><div class="owl2-dots" style=""><div class="owl2-dot active"><span></span></div><div class="owl2-dot"><span></span></div><div class="owl2-dot"><span></span></div></div></div></div>
                            
                            <div class="loadeding"></div>
                        </div>
                        
                    </div>

                    
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 col3">
                        <div class="module product-simple extra-layout1">
                            <h3 class="modtitle">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最畅销</font></font></span>
                            </h3>
                            <div class="modcontent">
                                <div id="so_extra_slider_1" class="so-extraslider">
                                    <!-- Begin extraslider-inner -->
                                    <div class="yt-content-slider extraslider-inner owl2-carousel owl2-theme owl2-responsive-1200 owl2-loaded" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                        
                                        
                                    <div class="owl2-stage-outer"><div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 506px;"><div class="owl2-item active" style="width: 253px; margin-right: 0px;"><div class="item ">
                                           @foreach($goodsinfos as $k=>$v)
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}} ">
                                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->first();
                                                                                echo $gpic->pic;
                                                                        @endphp" alt="曼杜尔短">
                                                            </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title" >
                                                        <a  href="/home/product/{{$v->prod_id}}" target="_self" title="曼杜尔短"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; ">{{$v->prod_name}} </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥{{$v->price}}</font></font></span>&nbsp;&nbsp;

                                                        <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 76.00</font></font></span>&nbsp;

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                           @endforeach
                                            
                                            <!-- End item-wrap -->
                                        </div></div><div class="owl2-item" style="width: 253px; margin-right: 0px;"><div class="item ">
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Qeserunt shortloin ">
                                                        <img src="/homes/image/catalog/demo/product/80/5.jpg" alt="Qeserunt shortloin">
                                                        </a>
                                                    </div>
                                                   
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Qeserunt shortloin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Qeserunt shortloin 
                                            </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                        <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                        <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                        <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                        <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    $ 88.00 
                                                </font></font></span>
                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Consecte quichuck ">
                                                        <img src="/homes/image/catalog/demo/product/80/6.jpg" alt="Consecte quichuck">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Consecte quichuck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Consecte quichuck 
                                            </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                        <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                        <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                        <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                        <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 55.00 </font></font></span>&nbsp;&nbsp;

                                                        <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 61.00</font></font></span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Neatball bresaola ">
                                                    <img src="/homes/image/catalog/demo/product/80/7.jpg" alt="Neatball bresaola">
                                                    </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Neatball bresaola"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                Neatball bresaola 
                                            </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                        <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                        <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                        <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                        <span class="fa fa-stack">
                                                        <i class="fa fa-star fa-stack-2x"></i>
                                                    </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 65.00 </font></font></span>&nbsp;&nbsp;

                                                        <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 71.00</font></font></span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                            <div class="product-layout item-inner style1 ">
                                                <div class="item-image">
                                                    <div class="item-img-info">
                                                        <a href="#" target="_self" title="Yutculpa ullamco ">
                                                        <img src="/homes/image/catalog/demo/product/80/8.jpg" alt="Yutculpa ullamco">
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                <div class="item-info">
                                                    <div class="item-title">
                                                        <a href="#" target="_self" title="Yutculpa ullamco"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            Yutculpa ullamco 
                                                        </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                        <span class="fa fa-stack">
                                                            <i class="fa fa-star fa-stack-2x"></i>
                                                        </span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 60.00 </font></font></span>&nbsp;&nbsp;

                                                        <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 77.00</font></font></span>&nbsp;



                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                            <!-- End item-wrap -->
                                        </div></div></div></div></div>
                                    <!--End extraslider-inner -->
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
            </div>                                        
        </div>
        <div class="row content-main-w">
            
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 main-left">
                
                <div class="module">
                    <div class="banners banners2">
                        <div class="banner">
                            <a href="#"><img src="/homes/image/catalog/banners/banner1.jpg" alt="图片"></a>
                        </div>
                    </div>
                </div>

                <div class="module product-simple extra-layout1">
                    <h3 class="modtitle">
                        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新产品</font></font></span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider">
                            <!-- Begin extraslider-inner -->
                            <div class="yt-content-slider extraslider-inner owl2-carousel owl2-theme owl2-responsive-1200 owl2-loaded" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                
                                
                            <div class="owl2-stage-outer"><div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 558px;"><div class="owl2-item active" style="width: 279px; margin-right: 0px;"><div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="product.html" target="_self" title="曼杜尔短 "><img src="/homes/image/catalog/demo/product/80/5.jpg" alt="曼杜尔短"></a>
                                            </div>                                        
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="product.html" target="_self" title="曼杜尔短"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">曼杜尔短 </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 55.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 76.00</font></font></span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="product.html" target="_self" title="Xancetta bresao "><img src="/homes/image/catalog/demo/product/80/3.jpg" alt="Xancetta bresao"></a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="product.html" target="_self" title="Xancetta bresao"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xancetta bresao</font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 80.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 89.00</font></font></span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="product.html" target="_self" title="香肠牛 "><img src="/homes/image/catalog/demo/product/80/4.jpg" alt="香肠牛"></a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="product.html" target="_self" title="香肠牛"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">香肠牛</font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                           
                                            <div class="content_price price">
                                                <span class="price product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 66.00</font></font></span>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="product.html" target="_self" title="鸡swinesha "><img src="/homes/image/catalog/demo/product/80/7.jpg" alt="鸡swinesha"></a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="product.html" target="_self" title="鸡swinesha"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                            鸡swinesha 
                                                        </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                                <span class="fa fa-stack">
                                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                                </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 45.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 56.00</font></font></span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                </div></div><div class="owl2-item" style="width: 279px; margin-right: 0px;"><div class="item ">
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Qeserunt shortloin ">
                                                <img src="/homes/image/catalog/demo/product/80/1.jpg" alt="Qeserunt shortloin">
                                                </a>
                                            </div>
                                           
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Qeserunt shortloin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Qeserunt shortloin 
                                    </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                        <i class="fa fa-star fa-stack-2x"></i>
                                    </span>
                                                <span class="fa fa-stack">
                                        <i class="fa fa-star fa-stack-2x"></i>
                                    </span>
                                                <span class="fa fa-stack">
                                        <i class="fa fa-star fa-stack-2x"></i>
                                    </span>
                                                <span class="fa fa-stack">
                                        <i class="fa fa-star fa-stack-2x"></i>
                                    </span>
                                                <span class="fa fa-stack">
                                        <i class="fa fa-star fa-stack-2x"></i>
                                    </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            $ 88.00 
                                        </font></font></span>
                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Consecte quichuck ">
                                                <img src="/homes/image/catalog/demo/product/80/3.jpg" alt="Consecte quichuck">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Consecte quichuck"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Consecte quichuck 
                                    </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                            <i class="fa fa-star fa-stack-2x"></i>
                                        </span>
                                                <span class="fa fa-stack">
                                            <i class="fa fa-star fa-stack-2x"></i>
                                        </span>
                                                <span class="fa fa-stack">
                                            <i class="fa fa-star fa-stack-2x"></i>
                                        </span>
                                                <span class="fa fa-stack">
                                            <i class="fa fa-star fa-stack-2x"></i>
                                        </span>
                                                <span class="fa fa-stack">
                                            <i class="fa fa-star fa-stack-2x"></i>
                                        </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 55.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 61.00</font></font></span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Neatball bresaola ">
                                            <img src="/homes/image/catalog/demo/product/80/6.jpg" alt="Neatball bresaola">
                                            </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Neatball bresaola"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Neatball bresaola 
                                    </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                                <span class="fa fa-stack">
                                                <i class="fa fa-star fa-stack-2x"></i>
                                            </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 65.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 71.00</font></font></span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                                <a href="#" target="_self" title="Yutculpa ullamco ">
                                                <img src="/homes/image/catalog/demo/product/80/8.jpg" alt="Yutculpa ullamco">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="item-info">
                                            <div class="item-title">
                                                <a href="#" target="_self" title="Yutculpa ullamco"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Yutculpa ullamco 
                                                </font></font></a>
                                            </div>
                                            <div class="rating">
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                                <span class="fa fa-stack">
                                                    <i class="fa fa-star fa-stack-2x"></i>
                                                </span>
                                            </div>
                                            <div class="content_price price">
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 60.00 </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 77.00</font></font></span>&nbsp;



                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                </div></div></div></div><div class="owl2-controls"><div class="owl2-nav"><div class="owl2-prev" style="display: none;"></div><div class="owl2-next" style="display: none;"></div></div><div class="owl2-dots" style=""><div class="owl2-dot active"><span></span></div><div class="owl2-dot"><span></span></div></div></div></div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                <div class="module">
                    <div class="policy-w">
                        <a href="#"><img src="/homes/image/catalog/banners/call-us.jpg" alt="图片"></a>
                        <ul class="block-infos">
                            <li class="info1">
                              <div class="inner">
                              <i class="fa fa-file-text-o"></i>
                              <div class="info-cont">
                              <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免费送货</font></font></a>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单满$ 49.86</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info2">
                              <div class="inner">
                              <i class="fa fa-shield"></i>
                              <div class="info-cont">
                              <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单保护</font></font></a>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">安全信息</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info3">
                              <div class="inner">
                              <i class="fa fa-gift"></i>
                              <div class="info-cont">
                              <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">促销礼品</font></font></a>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">特别优惠！</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info4">
                              <div class="inner">
                              <i class="fa fa-money"></i>
                              <div class="info-cont">
                              <a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退钱</font></font></a>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">返回30天以上</font></font></p>
                              </div>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="module extra">
                    <h3 class="modtitle">
                        <span>推荐</span>
                    </h3>
                    <div class="modcontent">
                        <div id="so_extra_slider_1" class="so-extraslider" >
                            <!-- Begin extraslider-inner -->
                            <div class="products-list yt-content-slider extraslider-inner" data-rtl="yes" data-pagination="yes" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Duis aute irure ">
                                                        <img src="/homes/image/catalog/demo/product/270/e10.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/e7.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Duis aute irure </a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$48.00</span>

                                                </p>
                                            </div>

                                            
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Excepteur sint occ">
                                                        <img src="/homes/image/catalog/demo/product/270/f5.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/f6.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Excepteur sint occ</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$90.00</span>
                                        
                                                </p>
                                            </div>

                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                               
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Cenison meatloa">
                                                        <img src="/homes/image/catalog/demo/product/270/e3.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/e4.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Cenison meatloa</a></h4>
                                                    
                                                </div>
                                                <p class="price">$42.00</p>
                                            </div>
                                           
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                <div class="module so-latest-blog blog-sidebar">

                    <h3 class="modtitle"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最新帖子</font></font></span></h3>
                    <div class="modcontent clearfix">

                        <div class="so-blog-external buttom-type1 button-type1">
                            <div class="blog-external-simple">
                                <div class="cat-wrap">
                                    <div class="media">

                                        <div class="item item-1">
                                            <div class="media-left">
                                                <a href="#" target="_self">
                                                <img src="/homes/image/catalog/blog/1.jpg" alt="Biten恶魔在henderit中的lector" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                <a href="#" title="Biten恶魔在henderit中的lector" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biten恶魔在henderit的leph nemusa tumps</font></font></a>
                                                </h4>
                                                <div class="media-content">
                                                    <div class="media-date-added"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2017年12月4日</font></font></div>         
                                                    <div class="media-subcontent">
                                                    <span class="media-comment"><i class="fa fa-comments"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0评论</font></font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                         
                                <div class="cat-wrap">
                                    <div class="media">

                                        <div class="item item-2">
                                            <div class="media-left">
                                                <a href="#" target="_self">
                                                    <img src="/homes/image/catalog/blog/2.jpg" alt="Commodo laoreet semper tincidun sit" class="media-object">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                <a href="#" title="Commodo laoreet semper tincidun坐" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Commodo laoreet semper tincidun坐在dolor spums</font></font></a>
                                                </h4>
                                                <div class="media-content">
                                                    <div class="media-date-added"><i class="fa fa-calendar"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 2017年11月15日</font></font></div>          
                                                    <div class="media-subcontent">
                                                        <span class="media-comment"><i class="fa fa-comments"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0评论</font></font></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                          
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="module testimonials">
                    <h3 class="modtitle"><span>Testimonials</span></h3>
                    <div class="slider-testimonials">
                        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <div class="img"><img src="/homes/image/catalog/demo/client/user-1.jpg" alt="Image"></div>
                                <div class="name">Johny Walker</div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore”</p>          
                            </div>
                            <div class="item">
                                <div class="img"><img src="/homes/image/catalog/demo/client/user-2.jpg" alt="Image"></div>
                                <div class="name">Jen Nguyen</div>
                                <p>“Ut enim ad minim veniam, lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incidi”</p>          
                            </div>
                            <div class="item">
                                <div class="img"><img src="/homes/image/catalog/demo/client/user-3.jpg" alt="Image"></div>
                                <div class="name">Vin Jame</div>
                                <p>“sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, lorem ipsum dolor sit amet, consectetur adip”</p>          
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="module">
                    <div class="banners banners5">
                        <div class="banner">
                          <a href="#"><img src="/homes/image/catalog/banners/banner2.jpg" alt="图片"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 main-right">
                

                <div class="static-cates">
                    <ul>
                        <li>
                            <a href="#"><img src="/homes/image/catalog/banners/cat1.jpg" alt="图片"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/homes/image/catalog/banners/cat2.jpg" alt="图片"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/homes/image/catalog/banners/cat3.jpg" alt="图片"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/homes/image/catalog/banners/cat4.jpg" alt="图片"></a>
                        </li>
                        <li>
                            <a href="#"><img src="/homes/image/catalog/banners/cat5.jpg" alt="图片"></a>
                        </li>
                    </ul>
                </div>

                <!-- Deals -->
                <div class="module deals-layout1">
                    <div class="head-title">
                        <div class="modtitle">
                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">闪购</font></font></span>
                            <div class="cslider-item-timer">
                              <div class="product_time_maxprice">
                                
                                <div class="item-time">
                                  <div class="item-timer">
                                    <div class="defaultCountdown-30"><div class="time-item time-day"><div class="num-time">181</div><div class="name-time">Day </div></div><div class="time-item time-hour"><div class="num-time">01</div><div class="name-time">Hour </div></div><div class="time-item time-min"><div class="num-time">17</div><div class="name-time">Min </div></div><div class="time-item time-sec"><div class="num-time">28</div><div class="name-time">Sec </div></div></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                              
                              <a class="viewall" href="�route=product�special.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看全部</font></font></a>
                            
                        </div>    
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-11%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Pastrami bacon">
                                                        <img src="/homes/image/catalog/demo/product/270/h1.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/h2.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Pastrami bacon</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$85.00</span>
                                                  <span class="price-old">$96.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="77%" data-toggle='tooltip' style="width: 77%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>51</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-15%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Lommodo quiutvenia">
                                                        <img src="/homes/image/catalog/demo/product/270/f1.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/f2.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 3 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Lommodo quiutvenia</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$50.00</span>
                                                  <span class="price-old">$59.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="65%" data-toggle='tooltip' style="width: 65%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>62</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-12%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Mapicola incidid">
                                                        <img src="/homes/image/catalog/demo/product/270/fu1.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/fu2.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 1 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Mapicola incidid</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$90.00</span>
                                                  <span class="price-old">$102.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="67%" data-toggle='tooltip' style="width: 67%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>45</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-8%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Duis aute irure">
                                                        <img src="/homes/image/catalog/demo/product/270/f3.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/f4.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 5 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Duis aute irure </a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$48.00</span>
                                                  <span class="price-old">$52.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="37%" data-toggle='tooltip' style="width: 37%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>30</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-10%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Excepteur sint occ">
                                                        <img src="/homes/image/catalog/demo/product/270/e1.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/e2.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 2 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Excepteur sint occ</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$90.00</span>
                                                  <span class="price-old">$100.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="38%" data-toggle='tooltip' style="width: 38%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>40</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-11%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Cenison meatloa">
                                                        <img src="/homes/image/catalog/demo/product/270/h3.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/h4.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 1 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Cenison meatloa</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$70.00</span>
                                                  <span class="price-old">$80.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="77%" data-toggle='tooltip' style="width: 77%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>51</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-9%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="product.html" target="_self" title="Ninim spareri sed">
                                                        <img src="/homes/image/catalog/demo/product/270/e3.jpg" class="img-1 img-responsive" alt="image1">
                                                        <img src="/homes/image/catalog/demo/product/270/e4.jpg" class="img-2 img-responsive" alt="image2">
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                        <span>Add to cart </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                    </button>
                                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                    </button>
                                                    
                                                </div>
                                                <div class="caption hide-cont">
                                                    <div class="ratings">
                                                        <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <span class="rating-num">( 3 )</span>
                                                    </div>
                                                    <h4><a href="product.html" title="Pastrami bacon" target="_self">Ninim spareri sed</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">$90.00</span>
                                                  <span class="price-old">$99.00</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="77%" data-toggle='tooltip' style="width: 77%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>51</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                            </div>
                        </div>
                      </div>
                </div>
                <!-- End Deals -->

                <!-- Banners -->
                <div class="banners3 banners">
                    <div class="item1">
                        <a href="#"><img src="/homes/image/catalog/banners/banner3.jpg" alt="图片"></a>
                    </div>
                    <div class="item2">
                        <a href="#"><img src="/homes/image/catalog/banners/banner4.jpg" alt="图片"></a>
                    </div>
                    <div class="item3">
                        <a href="#"><img src="/homes/image/catalog/banners/banner5.jpg" alt="图片"></a>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Category Slider 1 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">技术</font></font></div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="手机" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机</font></font></a></li>
                                    <li><a href="#" title="片" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">片</font></font></a></li>
                                    <li><a href="#" title="电脑" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电脑</font></font></a></li>
                                    <li><a href="#" title="饰品" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">饰品</font></font></a></li>
                                    <li><a href="#" title="海泰" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海泰</font></font></a></li>
                                </ul>
                            </div> 
                        </div>

                     <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Technology" target="_self">
                                  <img class="categories-loadimage" alt="Technology" src="/homes/image/catalog/demo/category/tab1.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Lastrami bacon">
                                                            <img src="/homes/image/catalog/demo/product/270/e1.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e10.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Lastrami bacon</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$80.00</span>
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-15%</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Exceeur sint occaecat">
                                                            <img src="/homes/image/catalog/demo/product/270/e2.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e9.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->
                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 3 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Exceeur sint occaecat</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$50.00</span>
                                                      <span class="price-old">$59.00</span>
                                                    </p>
                                                </div>                                                
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Mapicola incidid">
                                                            <img src="/homes/image/catalog/demo/product/270/e3.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e8.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 5 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Mapicola incidid</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$60.00</span>
                          
                                                    </p>
                                                </div>                                            
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Duis aute irure ">
                                                            <img src="/homes/image/catalog/demo/product/270/e4.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e7.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Duis aute irure </a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$48.00</span>
                              
                                                    </p>
                                                </div>                                        
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Excepteur sint occ">
                                                            <img src="/homes/image/catalog/demo/product/270/e5.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e6.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 4 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Excepteur sint occ</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$90.00</span>
                                            
                                                    </p>
                                                </div>
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                   
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="PCenison meatloa">
                                                            <img src="/homes/image/catalog/demo/product/270/e6.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/e2.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 6 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Cenison meatloa</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">$42.00</p>
                                                </div>
                                               
                                            </div>
                                        </div>      
                                    </div>

                                    
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Category Slider 1 -->

                <!-- Category Slider 2 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider2">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家具和装饰</font></font></div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="手机" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客厅</font></font></a></li>
                                    <li><a href="#" title="片" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">浴室</font></font></a></li>
                                    <li><a href="#" title="电脑" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">卧室</font></font></a></li>
                                    <li><a href="#" title="饰品" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">饰品</font></font></a></li>
                                    <li><a href="#" title="海泰" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">装饰</font></font></a></li>
                                </ul>
                            </div> 
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Funiture & Decor" target="_self">
                                  <img class="categories-loadimage" alt="Funiture & Decor" src="/homes/image/catalog/demo/category/tab2.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Sunt inculpa qui">
                                                            <img src="/homes/image/catalog/demo/product/270/fu1.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu10.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Sunt inculpa qui</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$60.00</span>
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                                            <img src="/homes/image/catalog/demo/product/270/fu2.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu9.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->
                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Chicken swinesha</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$55.00</span>
                                            
                                                    </p>
                                                </div> 
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-10%</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Mapicola incidid">
                                                            <img src="/homes/image/catalog/demo/product/270/fu3.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu8.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Mapicola incidid</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$90.00</span>
                                                      <span class="price-old">$100.00</span>
                                                    </p>
                                                </div>                                        
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Dormd dea irure">
                                                            <img src="/homes/image/catalog/demo/product/270/fu4.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu7.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Dormd dea irure </a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$48.00</span>
                              
                                                    </p>
                                                </div>                                        
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Mecepteur sint rew">
                                                            <img src="/homes/image/catalog/demo/product/270/fu5.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu6.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Mecepteur sint rew</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$90.00</span>
                                            
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                   
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Sed ut perspicia">
                                                            <img src="/homes/image/catalog/demo/product/270/fu6.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu2.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 1 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Sed ut perspicia</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">$42.00</p>
                                                </div>                                               
                                            </div>
                                        </div>      
                                    </div>

                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 2 -->

                <!-- Category Slider 3 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">时尚配饰</font></font></div>
                            <div class="item-sub-cat">
                                <ul>
                                    <li><a href="#" title="手机" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机</font></font></a></li>
                                    <li><a href="#" title="片" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">片</font></font></a></li>
                                    <li><a href="#" title="电脑" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电脑</font></font></a></li>
                                    <li><a href="#" title="饰品" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">饰品</font></font></a></li>
                                    <li><a href="#" title="海泰" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">海泰</font></font></a></li>
                                </ul>
                            </div> 
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="#" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="/homes/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Lastrami bacon">
                                                            <img src="/homes/image/catalog/demo/product/270/f1.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f7.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 3 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Lastrami bacon</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$80.00</span>
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-sale">-15%</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Exceeur sint occaecat">
                                                            <img src="/homes/image/catalog/demo/product/270/f2.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f4.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->
                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 7 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Exceeur sint occaecat</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$50.00</span>
                                                      <span class="price-old">$59.00</span>
                                                    </p>
                                                </div>

                                                
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Mapicola incidid">
                                                            <img src="/homes/image/catalog/demo/product/270/f3.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f8.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Mapicola incidid</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$60.00</span>
                          
                                                    </p>
                                                </div>

                                               
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Duis aute irure ">
                                                            <img src="/homes/image/catalog/demo/product/270/f4.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f7.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 8 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Duis aute irure </a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$48.00</span>
                              
                                                    </p>
                                                </div>

                                                
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Excepteur sint occ">
                                                            <img src="/homes/image/catalog/demo/product/270/f5.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f6.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Excepteur sint occ</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$90.00</span>
                                            
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                   
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="PCenison meatloa">
                                                            <img src="/homes/image/catalog/demo/product/270/f6.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/f2.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Cenison meatloa</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">$42.00</p>
                                                </div>
                                               
                                            </div>
                                        </div>      
                                    </div>

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="product.html" target="_self" title="Chicken swinesha">
                                                            <img src="/homes/image/catalog/demo/product/270/fu2.jpg" class="img-1 img-responsive" alt="image1">
                                                            <img src="/homes/image/catalog/demo/product/270/fu9.jpg" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->
                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                            <span>Add to cart </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                        </button>
                                                        <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                        </button>
                                                        
                                                    </div>
                                                    <div class="caption hide-cont">
                                                        <div class="ratings">
                                                            <div class="rating-box">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            </div>
                                                            <span class="rating-num">( 2 )</span>
                                                        </div>
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Chicken swinesha</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">$55.00</span>
                                            
                                                    </p>
                                                </div>

                                                
                                            </div>
                                        </div>      
                                    </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 3 -->

                <!-- Banners -->
                <div class="banners4 banners">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="/homes/image/catalog/banners/bn1.jpg" alt="图片"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="#"><img src="/homes/image/catalog/banners/bn2.jpg" alt="图片"></a>
                        </div>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Listing tabs -->
                <div class="module listingtab-layout1">
                    
                    <div id="so_listing_tabs_1" class="so-listing-tabs first-load">
                        <div class="loadeding"></div>
                        <div class="ltabs-wrap">
                            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="5" data-md="3" data-sm="2" data-xs="1" data-margin="30">
                                <!--Begin Tabs-->
                                <div class="ltabs-tabs-wrap"> 
                                <span class="ltabs-tab-selected">Best Seller</span> <span class="ltabs-tab-arrow">▼</span>
                                    <div class="item-sub-cat">
                                        <ul class="ltabs-tabs cf">
                                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">畅销书</font></font></span> </li>
                                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">新来港定居人士</font></font></span> </li>
                                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">评分最高</font></font></span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Tabs-->
                            </div>
                        
                            <div class="ltabs-items-container products-list grid">
                                <!--Begin Items-->
                                <div class="ltabs-items ltabs-items-selected items-category-20" data-total="16">
                                    <div class="ltabs-items-inner ltabs-slider">
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Ullamco occaeca">
                                                                <img src="/homes/image/catalog/demo/product/270/h1.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/h7.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Ullamco occaeca </a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$45.00</span>
                                                          
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>
                                        
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Eiusmod tempor incid">
                                                                <img src="/homes/image/catalog/demo/product/270/e3.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/e8.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Eiusmod tempor incid</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$76.00</span>
                              
                                                        </p>
                                                    </div>

                                                   
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Duis aute irure ">
                                                                <img src="/homes/image/catalog/demo/product/270/e4.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/e7.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Duis aute irure </a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$85.00</span>
                                  
                                                        </p>
                                                    </div>

                                                    
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Excepteur sint occ">
                                                                <img src="/homes/image/catalog/demo/product/270/fu5.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/fu6.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Excepteur sint occ</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$90.00</span>
                                                
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>      
                                        </div>

                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                       
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="PCenison meatloa">
                                                                <img src="/homes/image/catalog/demo/product/270/f6.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/f2.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->

                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Cenison meatloa</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">$42.00</p>
                                                    </div>
                                                   
                                                </div>
                                            </div>      
                                        </div>
                                        <div class="item">         
                                            <div class="item-inner product-layout transition product-grid">
                                                <div class="product-item-container">
                                                    <div class="left-block left-b">
                                                        <div class="box-label">
                                                            <span class="label-product label-sale">-10%</span>
                                                        </div>
                                                        <div class="product-image-container second_img">
                                                            <a href="product.html" target="_self" title="Quis nostrud exercita">
                                                                <img src="/homes/image/catalog/demo/product/270/f2.jpg" class="img-1 img-responsive" alt="image1">
                                                                <img src="/homes/image/catalog/demo/product/270/f4.jpg" class="img-2 img-responsive" alt="image2">
                                                            </a>
                                                        </div>
                                                        <!--quickview--> 
                                                        <div class="so-quickview">
                                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                                        </div>                                                     
                                                        <!--end quickview-->
                                                        
                                                    </div>
                                                    <div class="right-block">
                                                        <div class="button-group so-quickview cartinfo--left">
                                                            <button type="button" class="addToCart" title="Add to cart" onclick="cart.add('60 ');">
                                                                <span>Add to cart </span>   
                                                            </button>
                                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
                                                            </button>
                                                            <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-retweet"></i><span>Compare this Product</span>
                                                            </button>
                                                            
                                                        </div>
                                                        <div class="caption hide-cont">
                                                            <div class="rating">    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                            </div>
                                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">Quis nostrud exercita</a></h4>
                                                            
                                                        </div>
                                                        <p class="price">
                                                          <span class="price-new">$50.00</span>
                                                          <span class="price-old">$59.00</span>
                                                        </p>
                                                    </div>

                                                    
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="ltabs-items items-category-18 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                    
                                </div>
                                <div class="ltabs-items  items-category-25 grid" data-total="16">
                                    <div class="ltabs-loading"></div>
                                </div>
                                <!--End Items-->
                            </div>
                            
                        </div>   
                    </div>
                </div>
                <!-- end Listing tabs -->
                
                <!-- Slider Brands -->
                <div class="slider-brands col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="yt-content-slider contentslider" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="7" data-items_column0="7" data-items_column1="5" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes"
                            data-pagination="no" data-lazyload="yes" data-loop="yes">
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b1.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b2.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b3.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b4.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b5.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b6.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b4.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b5.png" alt="brand">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="/homes/image/catalog/brands/b6.png" alt="brand">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slider Brands -->


            </div>
            
        </div>
        
    </div>
</div>

<!-- //Main Container -->



@stop


@section('js')





@stop