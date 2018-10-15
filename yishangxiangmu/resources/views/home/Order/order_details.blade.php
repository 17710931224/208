@extends('layout.homes')

@section('content')
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单信息</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单信息</font></font></h2>

				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单详细信息</font></font></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单编号：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$order->order_number}}
								 </font></font><br>
								<b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加日期：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('Y-m-d H:i',$order->created_at)}}</font></font></td>
							<td style="width: 50%;" class="text-left"> <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">付款方式：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货到付款
								 </font></font><br>
								<b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输方式：</font></font></b>
								@if($order->transport == 1)
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">中国邮政</font>
								@elseif($order->transport == 2)
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">顺丰</font>
								@elseif($order->transport == 3)
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">圆通</font>
								@elseif($order->transport == 4)
								<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">韵达</font>
								@endif

							</font></td>
						</tr>
					</tbody>
				</table>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2" class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货信息</font></font></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width: 50%;" class="text-left"> <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货人：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$order->oname}}
								 </font></font><br>
								<b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货地址：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> {{$order->address}}</font></font></td>
							<td style="width: 50%;" class="text-left"> <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货人电话：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$order->mobile}}
								 </font></font><br>
								<b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">收货人邮箱：</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$order->oemail}}</font></font></td>
						</tr>
					</tbody>
				</table>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品图片</font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">模型</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">数量</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></td>
								<td style="width: 20px;"></td>
							</tr>
						</thead>
						<tbody>
							@foreach($details as $k=>$v)
							<tr>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><img src="{{$v->pic}}"></font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->prod_name}}</font></font></td>
								<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->quantity}}</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="quan">{{$v->quantity}}</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="pri">¥ {{$v->price}}</font></font></td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="sum">¥ {{$v->sum}}</font></font></td>
								<td style="white-space: nowrap;" class="text-right"> <a class="btn btn-primary" title="" data-toggle="tooltip" href="#" data-original-title="Reorder"><i class="fa fa-shopping-cart"></i></a>
									<a class="btn btn-danger" title="" data-toggle="tooltip" href="return.html" data-original-title="Return"><i class="fa fa-reply"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小计:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="xiaoji">¥ 101.00</font></font></td>
								<!-- <td></td> -->
							</tr>
							<tr>
								@if($order->transport == 1)
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费用:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="yunfei">¥ 10.00</font></font></td>
								<!-- <td></td> -->
								@elseif($order->transport == 2)
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >运输费用:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="yunfei">¥ 30.00</font></font></td>
								<!-- <td></td> -->
								@elseif($order->transport == 3)
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费用:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="yunfei">¥ 20.00</font></font></td>
								<!-- <td></td> -->
								@elseif($order->transport == 3)
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输费用:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="yunfei">¥ 15.00</font></font></td>
								<!-- <td></td> -->
								@endif

							</tr>
							<tr>
								<td colspan="4"></td>
								<td class="text-right"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总:</font></font></b>
								</td>
								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="zongjia">¥ 133.20</font></font></td>
								<!-- <td></td> -->
							</tr>
						</tfoot>
					</table>
				</div>
				<h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单状态</font></font></h3>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加日期</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('Y-m-d H:i',$order->created_at)}}</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">处理</font></font></td>
						</tr>
						@if($order->delivery_time == "")
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未发货</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></td>
						</tr>
						@else
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('Y-m-d H:i',$order->delivery_time)}}</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">运输</font></font></td>
						</tr>
						@endif

						@if($order->receipt_time == "")
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">未收货</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></td>
						</tr>
						@else
						<tr>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date('Y-m-d H:i',$order->receipt_time)}}</font></font></td>
							<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font>收货</font></td>
						</tr>
						@endif
					</tbody>
				</table>
				<div class="buttons clearfix">
					<div class="pull-right"><a class="btn btn-primary" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">继续</font></font></a>
					</div>
				</div>



			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
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
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@stop

@section('js')
	<script type="text/javascript">
		$('body').removeClass('common-home res layout-1')
		$('body').addClass('res layout-1 loaded')
		var sum = 0
		$('.sum').each(function(){
			 sum += parseFloat($(this).text().replace(/¥/g,"").trim())
			 $('.xiaoji').text('¥ '+sum)
			 var yunfei = parseFloat($('.yunfei').text().replace(/¥/,"").trim())
			  var zongjia = sum+yunfei
			 $('.zongjia').text('¥ '+zongjia)
		})
	</script>
@stop