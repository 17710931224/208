@extends('layout.homes')

@section('content')
	<style>
		.cart-empty{
			height: 98px;
		    padding: 80px 0 120px;
		    color: #333;

		}

		.cart-empty .message{
			height: 98px;
		    padding-left: 341px;
		    /*background: url(/Home/image/no-login-icon.png) 250px 22px no-repeat;*/
		}

		.cart-empty .message .txt {
		    font-size: 12px;
		}
		.cart-empty .message li {
		    line-height: 38px;
		}

		ol, ul {
		    list-style: outside none none;
		}

		.ftx-05, .ftx05 {
			color: #005ea7;
		}
		
		a {
		    color: #666;
		    text-decoration: none;
		    margin:0px;
		    padding:0px;
		    font-size:12px;
		}
		
	</style>
	@if($count > 0)
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户</font></font></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的收藏</font></font></h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">品牌</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行动</font></font></td>
							</tr>
						</thead>
						<tbody>
							
								@foreach($goods as $v)
									@foreach($v as $vv)
									<tr>
										<td class="text-center">
											<a href="product.html">
												<img width="70px" src="{{$vv->pic->pic}}" alt="{{$vv->prod_name}}" title="{{$vv->prod_name}}">
												
											</a>
										</td>
										<td class="text-left" style="width: 40%"><a href="product.html"><font style="vertical-align: inherit; width: 200px;"><font style="vertical-align: inherit;"></font>{{$vv->prod_name}}</font></a>
										</td>
										<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$vv->brand}}</font></font></td>
										@if($vv->availability > 0)
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">有现货</font></font></td>
										@else
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货源不足</font></font></td>
										@endif
										<td class="text-right">
											<div class="price"> <span class="price-new"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$vv->price}}</font></font></span> <span class="price-old"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></span></div>
										
										</td>
										<td class="text-right">
											<input type="text" name="pid" value="{{$vv->prod_id}}" style="display: none;">
											<button class="btn btn-primary addCart" title="" data-toggle="tooltip" " type="button" data-original-title="加入购物车"><i class="fa fa-shopping-cart"></i>
											</button>
											<a class="btn btn-danger remove" title="" data-toggle="tooltip" href="javascript:void(0)" data-original-title="移除"><i class="fa fa-times"></i></a>
										</td>
									</tr>
									@endforeach
								@endforeach
							
						</tbody>
					</table>
				</div>
			</div>

			<!--Middle Part End-->
			<aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
				<h2 class="subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户</font></font></h2>
				<div class="list-group">
					<ul class="list-item">
						<li><a href="login.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录</font></font></a>
						</li>
						<li><a href="register.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">寄存器</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">忘记密码</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址簿</font></font></a>
						</li>
						<li><a href="wishlist.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">愿望清单</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下载</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">奖励分数</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">返回</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交易</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通讯</font></font></a>
						</li>
						<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">经常性付款</font></font></a>
						</li>
					</ul>
				</div>
			</aside>
		</div>
	</div>
	<!-- //Main Container -->
	@else
	<div class="cart-empty">
		    <div class="message">
		        <ul>
		            <li class="txt">
		                愿望清单空空的哦~，去看看心仪的商品吧~
		            </li>
		            <li class="mt10">
		                <a href="/" class="ftx-05">
		                    去购物&gt;
		                </a>
		            </li>
		            
		        </ul>
		    </div>
		</div>
		<div style="height: 150px;">
		</div>
	@endif
@stop

@section('js')
	<script type="text/javascript">
		$('body').removeClass('common-home res layout-1')
		$('body').addClass('res layout-1 loaded')

		$('.addCart').click(function(){
			var pid = $(this).siblings('input[name=pid]').val()
			// console.log(pid)
			$.get('/home/cart/create',{id:pid,quantity:1},function(data){
                if(data == '1'){
                    alert('已加入购物车');
                    
                }
			})
		})

		$('.remove').click(function(){
			var ss = $(this);
			var pid = $(this).siblings('input[name=pid]').val()
			$.get('/home/wishlists/delete',{pid:pid},function(data){
				// console.log(data)
				if(data.code == '1'){
					// alert('移除成功');
					ss.parents('tr').remove()
					if(data.count < 1){
						window.location.reload()
					}
				}
			})
		})
	</script>
@stop