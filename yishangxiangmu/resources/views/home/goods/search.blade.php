@extends('layout.goods')

@section('title',$title)

@section('content')



   
            <!--Left Part End -->
			
        	<!--Middle Part Start-->
        	<div id="content" class="col-md-9 col-sm-8">
        		<div class="products-category">
                    <h3 class="title-category "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">饰品</font></font></h3>
        			<div class="category-desc">
        				<div class="row">
        					<div class="col-sm-12">
        						<div class="banners">
        							<div>
        								<a href="#"><img src="/homes/image/catalog/demo/category/img-cate.jpg" alt="img cate"><br></a>
        							</div>
        						</div>
        					
        					</div>
        				</div>
        			</div>
        			<!-- Filters -->
                    <div class="product-filter product-filter-top filters-panel">
                        <div class="row">
                            <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                                
                                    <div class="list-view">
                                        <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i></button>
                                        <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
                                    </div>
                        
                            </div>
                            <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                                <div class="form-group short-by">
                                    <label class="control-label" for="input-sort"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">排序方式：</font></font></label>
                                    <select id="input-sort" class="form-control" onchange="location = this.value;">
                                        <option value="" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">默认</font></font></option>
                                        
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格（低&gt;高）</font></font></option>
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">价格（高&gt;低）</font></font></option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-limit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示：</font></font></label>
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option value="" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">75</font></font></option>
                                        <option value=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                    <li><a href="">&gt;|</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- //end Filters -->

        			<!--changed listings-->
                    <div class="products-list row nopadding-xs so-filter-gird grid">
            	    @foreach($res as $k=>$v)
        				<div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
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
                                      <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="/home/quickview/{{$v->prod_id}}" title="快速浏览" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                    </div>                                                     
                                    <!--end quickview-->

                                    
                                </div>
                                <div class="right-block">
                                    <div class="button-group so-quickview cartinfo--left">
                                        <input type="text" name="pid" value="{{$v->prod_id}}" style="display: none">
                                        <button type="button" class="addToCart" title="添加到购物车" >
                                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加到购物车 </font></font></span>   
                                        </button>
                                        <button type="button" class="wishlist btn-button" title="加入愿望清单" onclick="wishlist.add('60');"><i class="fa fa-heart-o"></i><span>Add to Wish List</span>
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
                                            <span class="rating-num"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">（2）</font></font></span>
                                        </div>
                                        <h4><a class='goodss' href="product.html" title="熏牛肉培根" target="_self"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->prod_name}}</font></font></a></h4>
                                        
                                    </div>
                                    <p class="price">
                                      <span class="price-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥{{$v->price}}</font></font></span>
                                      
                                    </p>
                                    <div class="description item-desc hidden">
                                        <p>服务承诺&nbsp;赠保价险&nbsp;正品保证&nbsp;极速退款&nbsp;七天无理由退换<br>
                                           18:00前下单当天发货,18:00后次日发货<br>
                                           收货当面验货,确认货物完好再签收</p>
                                    </div>
                                    <div class="list-block hidden">
                                        <input type="text" name="pid" value="{{$v->prod_id}}" style="display: none">
                                        <button class="addToCart btn-button" type="button" title="加入购物车"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                        </button>
                                       
                                        <!--quickview-->                                                      
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>                                                        
                                        <!--end quickview-->
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                        

                        

                    </div>
        			<!--// End Changed listings-->
        			<!-- Filters -->
        			<div class="product-filter product-filter-bottom filters-panel">
                        <div class="row">
                            <div class="col-sm-6 text-left"></div>
                            <div class="col-sm-6 text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">显示第1至15个结果（共1页）</font></font></div>
                        </div>
                    </div>
        			<!-- //end Filters -->
        			
        		</div>
        		
        	</div>
        	

        	<!--Middle Part End-->
        </div>
    </div>
	<!-- //Main Container --> 



@stop


@section('js')
  <script type="text/javascript">
      $('.addToCart').click(function(){
        var pid = $(this).prev().val()
        // console.log(pid);
        $.get('/home/cart/create',{id:pid,quantity:1},function(data){
            if(data == "1"){
                alert('已加入购物车')
            }
        })
      })
  </script>
    

@stop