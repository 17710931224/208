
<!DOCTYPE html>
 <html lang="en">
<head>
    
    <!-- Basic page needs
    ============================================ -->
    <title>SuperMarket - Multipurpose Responsive HTML5 Template</title>
    <meta charset="utf-8">
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
    <link href="/homes/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-categories.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-category-slider.css" rel="stylesheet">
    <link href="/homes/css/themecss/so-newletter-popup.css" rel="stylesheet">

    <link href="/homes/css/footer/footer1.css" rel="stylesheet">
    <link href="/homes/css/header/header1.css" rel="stylesheet">
    <link id="color_scheme" href="/homes/css/theme.css" rel="stylesheet"> 
    <link href="/homes/css/responsive.css" rel="stylesheet">

     <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>     
    <style type="text/css">
         body{font-family:'Poppins', sans-serif;}
    </style>

</head>

 <body class="res layout-subpage">

<div id="wrapper" class="wrapper-full ">
	<!-- Main Container  -->
	 <div class="main-container container">
		
		 <div class="row">
			 <!--Middle Part Start-->
			 <div id="content" class="col-md-12 col-sm-12">
				
				<div class="product-view row quickview-w">
					<div class="left-content-product">
                        
                        <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">

                            <div class="large-image  ">
                                <img itemprop="image"  class="product-image-zoom" src="{{$gpics[0]->pic}}"  title="Chicken swinesha" alt="Chicken swinesha">
                            </div>
                           
                            
                            <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column00="4" data-items_column0="4" data-items_column1="3" data-items_column2="4"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            @foreach($gpics as $k => $v)
                                <a data-index="0" class="img thumbnail " id="picpic" data-image="{{$v->pic}}" width="350"  title="Chicken swinesha">
                                    <img src="{{$v->pic}}" title="Chicken swinesha"  alt="Chicken swinesha">
                                </a>


                            @endforeach    
                                
                            </div>
                            
                        </div>

                        <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                            <div class="title-product">
                                <h1>{{$goodsinfos->prod_name}}</h1>
                            </div>
                            <!-- Review ---->
                            <div class="box-review form-group">
                                <div class="ratings">
                                    <div class="rating-box">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i></span>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="product-label form-group">
                                <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                    <span class="price-new" itemprop="price">¥{{$goodsinfos->price}}</span>
                                    
                                </div>
                                <div class="stock"><span>可用:</span> <span class="status-stock">库存</span></div>
                            </div>

                            <div class="product-box-desc">
                                <div class="inner-box-desc">
                                    <div class="price-tax"><span>原价:</span>¥{{($goodsinfos->price)+ceil($goodsinfos->price*0.1)}}</div>
                                    <div class="reward"><span>Price in reward points:</span> 400</div>
                                    <div class="brand"><span>品牌:</span><a href="#">{{$goodsinfos->brand}}</a>     </div>
                                    <div class="model"><span>库存:</span> {{$goodsinfos->availability}}</div>
                                    <div class="created_at"><span>上架时间:</span>{{$goodsinfos->created_at}}</div>
                                </div>
                            </div>




                            <div id="product">
                                <h4>可用选项</h4>
                                
                                
                                
                                
                                <div class="image_option_type form-group required">
                                <label class="control-label">颜色分类</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                @php
                                    $goodscolor = explode(",",$goodsinfos->color);
                                       
                                @endphp

                                @foreach($goodscolor as $k=>$v)
                                 
                                 <label class="btn btn-default @if($k == 0) active @endif">
                                    <input type="radio" name="options" id="option1" autocomplete="off"
                                    > {{$v}}
                                  </label>
                                @endforeach 
                                </div>
                                </div>

                                <div class="image_option_type form-group required">
                                <label class="control-label">尺寸样式</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                @php
                                    $goodssize = explode(",",$goodsinfos->size);
                                       
                                @endphp
                                @foreach($goodssize as $k=>$v)
                                 
                                  <label class="btn btn-default @if($k == 0) active @endif">
                                    <input type="radio" name="options" id="option1" autocomplete="off"
                                   > {{$v}}
                                  </label>
                                @endforeach 
                                </div>
                               

                                






                        </div><br> 

                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                            <label>数量</label>
                                            <input class="form-control" type="text" name="quantity"
                                            value="1">
                                            <input type="hidden" name="product_id" value="50">
                                            <span class="input-group-addon product_quantity_down">−</span>
                                            <span class="input-group-addon product_quantity_up">+</span>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <input type="text" name="" class="pid" value="{{$goodsinfos->prod_id}}" style="display: none">
                                        <input type="button" id="aaa" data-toggle="tooltip" title="" value="加入购物车" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="加入购物车">
                                    </div>
                                    <div class="add-to-links wish_comp">
                                        <ul class="blank list-inline">
                                            <li class="wishlist">
                                                <a class="icon" data-toggle="tooltip" title=""
                                                onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- end box info product -->



                            
                        </div>
                
                    </div>
				</div>
				
				 <script type="text/javascript">
					// Cart add remove functions
					var cart = {
						'add': function(product_id, quantity) {
							parent.addProductNotice('Product added to Cart', '<img src="/homes/image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
						}
					}

					var wishlist = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to Wishlist', '<img src="/homes/image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
						}
					}
					var compare = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to compare', '<img src="/homes/image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
						}
					}

					
				</script>

				
			 </div>
			
			
		 </div>
		 <!--Middle Part End-->
	 </div>
	 <!-- //Main Container -->
	
 <style type="text/css">
	#wrapper{box-shadow:none;}
	#wrapper > *:not(.main-container){display: none;}
	#content{margin:0}
	.container{width:100%;}
	
	.product-info .product-view,.left-content-product,.box-info-product{margin:0;}
	.left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

	.left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
	.add-to-links ul li{margin:0;}
	
</style></div>

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
<script type="text/javascript" src="/homes/js/themejs/homepage.js"></script>
 
 <script type="text/javascript" src="/homes/js/themejs/so_megamenu.js"></script>
 <script type="text/javascript" src="/homes/js/themejs/addtocart.js"></script>
 <script type="text/javascript" src="/homes/js/themejs/application.js"></script>
<script type="text/javascript">
    $('#aaa').click(function(){
            var pid = $('input[name=pid]').val()
            var quantity = $('input[name=quantity]').val()
            console.log(pid,quantity)
            $.get('/home/cart/create',{id:pid,quantity:quantity},function(data){
                if(data == '1'){
                    alert('已加入购物车');
                }
            })

        })
</script>

</body>

</html>
