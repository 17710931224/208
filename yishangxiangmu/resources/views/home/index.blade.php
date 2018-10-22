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
                    @php $lunbo= \DB::table('es_carousel')->where('status','1')->get()  @endphp
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 col2">
					    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  							<!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
							    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
							  </ol>
                               
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner" role="listbox">
							   
							    <div class="item active" id="geshi">
							    
							      <img src="{{$lunbo[0]->pic}}" class="cip" alt="...">
							      <div class="carousel-caption">
							        ...
							      </div>
							       
							    </div>
					
							    
							    <div class="item" id="geshi">
							      <img src="{{$lunbo[1]->pic}}" class="cip" alt="...">
							      <div class="carousel-caption">
							        ...
							      </div>
							    </div>
							    <div class="item" id="geshi">
							      <img src="{{$lunbo[2]->pic}}" class="cip" alt="...">
							      <div class="carousel-caption">
							        ...
							      </div>
							    </div>
							    
							  </div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
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
                                           @foreach($goods as $k=>$v)
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
                                                        <a  href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; ">{{$v->prod_name}} </font></font></a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <div class="content_price price">
                                                        <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥{{$v->price}}</font></font></span>&nbsp;&nbsp;

                                                        

                                                    </div>
                                                </div>
                                                <!-- End item-info -->
                                                <!-- End item-wrap-inner -->
                                            </div>
                                           @endforeach
                                            
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
                            <a href="#"><img src="/homes/image/catalog/banners/timg.jpg" alt="图片"></a>
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
                                
                                
                            <div class="owl2-stage-outer"><div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 558px;"><div class="owl2-item active" style="width: 279px; margin-right: 0px;">
                                    <div class="item ">

                                    @foreach($times as $k=>$v)
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                              
                                                <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}} "><img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->first();
                                                                                echo $gpic->pic;
                                                                        @endphp" alt="{{$v->prod_name}}"></a>
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
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$v->price}} </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{($v->price)+ceil($v->price*0.1)}}</font></font></span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>
                                    <!-- End item-wrap -->
                                    @endforeach
                                    
                                    <!-- End item-wrap -->
                                </div></div></div></div></div>
                            <!--End extraslider-inner -->
                        </div>
                    </div>
                </div>

                <div class="module">
                    <div class="policy-w">
                        <img src="/homes/image/catalog/banners/call-us.jpg" alt="图片">
                        <ul class="block-infos">
                            <li class="info1">
                              <div class="inner">
                              <i class="fa fa-file-text-o"></i>
                              <div class="info-cont">
                              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免费送货</font></font></span>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单满$ 49.00</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info2">
                              <div class="inner">
                              <i class="fa fa-shield"></i>
                              <div class="info-cont">
                              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单保护</font></font></span>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">安全信息</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info3">
                              <div class="inner">
                              <i class="fa fa-gift"></i>
                              <div class="info-cont">
                              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">促销礼品</font></font></span>
                              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">特别优惠！</font></font></p>
                              </div>
                              </div>
                            </li>
                            <li class="info4">
                              <div class="inner">
                              <i class="fa fa-money"></i>
                              <div class="info-cont">
                              <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">退钱</font></font></span>
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
                                @foreach($computer as $k=>$v)
                                <div class="item">         
                                    <div class="product-layout item-inner style1 ">
                                        <div class="item-image">
                                            <div class="item-img-info">
                                              
                                                <a href="product.html" target="_self" title="{{$v->prod_name}} "><img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->first();
                                                                                echo $gpic->pic;
                                                                        @endphp" alt="曼杜尔短"></a>
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
                                                <span class="price-new product-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$v->price}} </font></font></span>&nbsp;&nbsp;

                                                <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{($v->price)+ceil($v->price*0.1)}}</font></font></span>&nbsp;

                                            </div>
                                        </div>
                                        <!-- End item-info -->
                                        <!-- End item-wrap-inner -->
                                    </div>     
                                </div>
                                @endforeach

                                
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
                    <h3 class="modtitle"><span>合作伙伴</span></h3>
                    <div class="slider-testimonials">
                        <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column00="1" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <div class="img"><img src="/homes/image/catalog/demo/client/user-4.jpg" alt="Image"></div>
                                <div class="name">史蒂夫·乔布斯（Steve Jobs)</div>
                                <p>“史蒂夫·乔布斯   （Steve Jobs，1955年2月24日—2011年10月5日   ），出生于美国加利福尼亚州旧金山，美国发明家、企业家、美国苹果公司联合创办人,网站战略合作伙伴之一”</p>          
                            </div>
                            <div class="item">
                                <div class="img"><img src="/homes/image/catalog/demo/client/user-5.jpg" alt="Image"></div>
                                <div class="name">马克·艾略特·扎克伯格（Mark Elliot Zuckerberg）</div>
                                <p>“1984年5月14日生于美国纽约州白原市，社交网站Facebook（脸书）的创始人兼首席执行官 ，被人们冠以“第二盖茨”的美誉,网站战略合作伙伴之一。”</p>          
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
                
              @php $adv= \DB::table('advert')->where('status','1')->get();  @endphp
                <div class="static-cates">
                    <ul>
                       @foreach($adv as $k=>$v)
                        <li id="pp">
                            <a href="{{$v->adurl}}"><img src="{{$v->adpic}}" style="width:100%;height:220px;" alt="图片"></a>
                        </li>
                        @endforeach 
                        
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
                              
                              
                            
                        </div>    
                    </div>
                    <div class="modcontent">
                        <div id="so_deal_1" class="so-deal style1">
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                            @foreach($goodsinfos as $k=>$v) 
                                <div class="item">         
                                    <div class="item-inner product-layout transition product-grid">
                                        <div class="product-item-container">
                                            <div class="left-block left-b">
                                                <div class="box-label">
                                                    <span class="label-product label-sale">-5%</span>
                                                </div>
                                                <div class="product-image-container second_img">
                                                    <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}}">
                                                        <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
                                                           echo $gpic[0]->pic;
                                                                        @endphp" class="img-1 img-responsive" alt="此搜索">
                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
                                                           echo $gpic[1]->pic;
                                                                        @endphp" class="img-2 img-responsive" alt="图像2">
                                                        
                                                    </a>
                                                </div>
                                                <!--quickview--> 
                                                <div class="so-quickview">
                                                  <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>{{$v->prod_name}}</span></a>
                                                </div>                                                     
                                                <!--end quickview-->

                                                
                                            </div>
                                            <div class="right-block">
                                                <div class="button-group so-quickview cartinfo--left">
                                                    <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                        <span>加入购物车 </span>   
                                                    </button>
                                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
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
                                                    <h4><a href="/home/quickview/{{$v->prod_id}}" title="Pastrami bacon" target="_self">{{$v->prod_name}}</a></h4>
                                                    
                                                </div>
                                                <p class="price">
                                                  <span class="price-new">¥{{$v->price}}</span>
                                                  <span class="price-old">¥{{($v->price)+ceil($v->price*0.1)}}</span>
                                                </p>
                                            </div>

                                            <div class="item-available">
                                                <div class="available">
                                                  <span class="color_width" data-title="77%" data-toggle='tooltip' style="width: {{$v->availability}}%"></span>
                                                </div>                          
                                                <p class="a2">Sold: <b>{{$v->availability}}</b>  </p>
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                                @endforeach
                                

                            </div>
                        </div>
                      </div>
                </div>
                <!-- End Deals -->
                @php $aadv= \DB::table('aadvert')->where('status','1')->get();  @endphp
                <!-- Banners -->
                <div class="banners3 banners">
                
                    <div class="item1">
                        <a href="{{$aadv[0]->aurl}}"><img src="{{$aadv[0]->apic}}" style="width:100%;height:257px;" alt="图片"></a>
                    </div>
                  
                    <div class="item2">
                        <a href="{{$aadv[1]->aurl}}"><img src="{{$aadv[1]->apic}}"  style="width:100%;height:257px;" alt="图片"></a>
                    </div>
                    <div class="item3">
                        <a href="www.baidu.com"><img src="{{$aadv[2]->apic}}" style="width:100%;height:257px;" alt="图片"></a>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Category Slider 1 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider1">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机</font></font></div>
                            
                        </div>

                     <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="/search?prod_name=手机" title="Technology" target="_self">
                                  <img class="categories-loadimage" alt="Technology" src="/homes/image/catalog/demo/category/tab1.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    @foreach($phone as  $k=>$v)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                                            <div class="product-item-container">
                                                <div class="left-block left-b">
                                                    
                                                    <div class="product-image-container second_img">
                                                        <a href="/home/product/{{$v->prod_id}}" target="_self" title="{{$v->prod_name}}">
                                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
                                                           echo $gpic[0]->pic;
                                                                        @endphp" class="img-1 img-responsive" alt="image1">
                                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
                                                           echo $gpic[1]->pic;
                                                                        @endphp" class="img-2 img-responsive" alt="image2">
                                                        </a>
                                                    </div>
                                                    <!--quickview--> 
                                                    <div class="so-quickview">
                                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>快速浏览</span></a>
                                                    </div>                                                     
                                                    <!--end quickview-->

                                                    
                                                </div>
                                                <div class="right-block">
                                                    <div class="button-group so-quickview cartinfo--left">
                                                        <button type="button" class="addToCart" title="加入购物车" onclick="cart.add('60 ');">
                                                            <span>加入购物车 </span>   
                                                        </button>
                                                        <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
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
                                                        <h4><a href="product.html" title="Pastrami bacon" target="_self">Lastrami bacon</a></h4>
                                                        
                                                    </div>
                                                    <p class="price">
                                                      <span class="price-new">¥{{$v->price}}</span>
                                                      
                                                    </p>
                                                </div>

                                            </div>
                                        </div>      
                                    </div>
                                    @endforeach 

                                    
                                   

                                    
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end Category Slider 1 -->

                <!-- Category Slider 2 -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider2">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">家纺</font></font></div>
                            
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="/search?prod_name=家纺" title="Funiture & Decor" target="_self">
                                  <img class="categories-loadimage" alt="Funiture & Decor" src="/homes/image/catalog/demo/category/tab2.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                    @foreach($sole as $k=>$v)

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                            
		                                <div class="product-item-container">
		                                    <div class="left-block left-b">
		                                        
		                                        <div class="product-image-container second_img">
		                                        <a href="/home/product/{{$v->prod_id}}" target="_self" title="">
		                                           <!-- 遍历商品cid对应的图片 --> 
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[0]->pic;
		                                                                        @endphp" class="img-1 img-responsive" alt="此搜索">
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[1]->pic;
		                                                                        @endphp" class="img-2 img-responsive" alt="图像2">
		                                        </a>
		                                    </div>
		                                        <!--quickview--> 
		                                        <div class="so-quickview">
		                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>快速浏览</span></a>
		                                        </div>                                                     
		                                        <!--end quickview-->

		                                        
		                                    </div>
		                                    <div class="right-block">
		                                        <div class="button-group so-quickview cartinfo--left">
		                                            <input type="text" name="pid" value="{{$v->prod_id}}" style="display: none">
		                                            <button type="button" class="addToCart" title="加入购物车">
		                                                <span>加入购物车 </span>   
		                                            </button>
		                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
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
		                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">{{$v->prod_name}}</a></h4>
		                                            
		                                        </div>
		                                        <p class="price">
		                                          <span class="price-new">¥{{$v->price}}</span>
		                                          
		                                        </p>
		                                    </div>

		                                </div>
                                 
                           			    </div>    
                                    </div>

                                    @endforeach

                                    

                                    
                               
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
                            
                        </div>

                        <div class="categoryslider-content">
                            <div class="item-cat-image" style="min-height: 351px;">
                                <a href="/search?prod_name=服饰" title="Fashion & Accessories" target="_self">
                                  <img class="categories-loadimage" alt="Fashion & Accessories" src="/homes/image/catalog/demo/category/tab3.jpg">
                                </a>
                            </div>
                            <div class="slider category-slider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="4" data-items_column0="4" data-items_column1="2" data-items_column2="1"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
                                    

                                    @foreach($dress as $k=>$v)
                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                            
		                                <div class="product-item-container">
		                                    <div class="left-block left-b">
		                                        
		                                        <div class="product-image-container second_img">
		                                        <a href="/home/product/{{$v->prod_id}}" target="_self" title="">
		                                           <!-- 遍历商品cid对应的图片 --> 
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[0]->pic;
		                                                                        @endphp" class="img-1 img-responsive" alt="此搜索">
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[1]->pic;
		                                                                        @endphp" class="img-2 img-responsive" alt="图像2">
		                                        </a>
		                                    </div>
		                                        <!--quickview--> 
		                                        <div class="so-quickview">
		                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>快速浏览</span></a>
		                                        </div>                                                     
		                                        <!--end quickview-->

		                                        
		                                    </div>
		                                    <div class="right-block">
		                                        <div class="button-group so-quickview cartinfo--left">
		                                            <input type="text" name="pid" value="{{$v->prod_id}}" style="display: none">
		                                            <button type="button" class="addToCart" title="加入购物车">
		                                                <span>加入购物车 </span>   
		                                            </button>
		                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
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
		                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">{{$v->prod_name}}</a></h4>
		                                            
		                                        </div>
		                                        <p class="price">
		                                          <span class="price-new">¥{{$v->price}}</span>
		                                          
		                                        </p>
		                                    </div>

		                                </div>
                                 
                           			    </div>        
                                    </div>
                                    @endforeach

                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Category Slider 3 -->

                <!-- Banners -->
                <div class="banners4 banners">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="{{$aadv[3]->aurl}}"><img src="{{$aadv[3]->apic}}" alt="图片"></a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="{{$aadv[4]->aurl}}"><img src="{{$aadv[4]->apic}}" alt="图片"></a>
                        </div>
                    </div>
                </div>
                <!-- end Banners -->

                <!-- Listing tabs -->
                <div id="so_category_slider_1" class="so-category-slider container-slider module cateslider2">
                    <div class="modcontent">                                                                
                        <div class="page-top">
                            <div class="page-title-categoryslider"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">畅销书</font></font></div>
                            
                        </div>

                        <div class="categoryslider-content">
                            
                            <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column00="6" data-items_column0="5" data-items_column1="3" data-items_column2="2"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">

                                    @foreach($books as $k=>$v)

                                    <div class="item">         
                                        <div class="item-inner product-layout transition product-grid">
                            
		                                <div class="product-item-container">
		                                    <div class="left-block left-b">
		                                        
		                                        <div class="product-image-container second_img">
		                                        <a href="/home/product/{{$v->prod_id}}" target="_self" title="">
		                                           <!-- 遍历商品cid对应的图片 --> 
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[0]->pic;
		                                                                        @endphp" class="img-1 img-responsive" alt="此搜索">
		                                            <img src="@php $gpic = \DB::table('prod_pic')->where('cid',$v->prod_id)->get();
		                                                           echo $gpic[1]->pic;
		                                                                        @endphp" class="img-2 img-responsive" alt="图像2">
		                                        </a>
		                                    </div>
		                                        <!--quickview--> 
		                                        <div class="so-quickview">
		                                          <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>快速浏览</span></a>
		                                        </div>                                                     
		                                        <!--end quickview-->

		                                        
		                                    </div>
		                                    <div class="right-block">
		                                        <div class="button-group so-quickview cartinfo--left">
		                                            <input type="text" name="pid" value="{{$v->prod_id}}" style="display: none">
		                                            <button type="button" class="addToCart" title="加入购物车">
		                                                <span>加入购物车 </span>   
		                                            </button>
		                                            <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>收藏</span>
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
		                                            <h4><a href="product.html" title="Pastrami bacon" target="_self">{{$v->prod_name}}</a></h4>
		                                            
		                                        </div>
		                                        <p class="price">
		                                          <span class="price-new">¥{{$v->price}}</span>
		                                          
		                                        </p>
		                                    </div>

		                                </div>
                                 
                           			    </div>    
                                    </div>

                                    @endforeach

                                    

                                    
                               
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