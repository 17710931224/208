@extends('layout.homes')

@section('content')
		<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover">
						<thead>

							<tr>

								<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单号</font></font></td>


								<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下单日期</font></font></td>

								<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></td>

								<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></td>

								<td></td>
							</tr>

						</thead>
						@foreach($order as $v)
						<tbody>
							<tr>	
									<td style="display: none;" class="first">{{$v->id}}</td>
									<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v->order_number}}</font></font></td>
									
									<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{date("Y-m-d H:i",$v->created_at)}}</font></font></td>

									<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$v->total}}</font></font></td>

									@if($v->status == 1)
									<td class="text-center"><a href="javascript:void(0)" style="font-size: 13px;">处理中...</a></td>
									@elseif($v->status == 2)
									<td class="text-center"><a href="javascript:void(0)" class="receipt" style="font-size: 13px;">收货</a></td>
									@elseif($v->status == 3)
									<td class="text-center"><a href="javascript:void(0)" style="font-size: 13px;">已收货</a></td>
									@endif

									<td class="text-center"><a class="btn btn-info" title="" data-toggle="tooltip" href="/home/order/details/{{$v->id}}" data-original-title="View"><i class="fa fa-eye"></i></a>
									</td>
							</tr>
						</tbody>
						@endforeach
					</table>
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

		$('.receipt').click(function(){
			var eipt = $(this)
			var oid = eipt.parents('td').siblings('.first').text();
			// console.log(oid)
			$.get('/home/order/receipt',{id:oid},function(data){
				// console.log(data);
				if(data == 1){
					eipt.text('已收货');
				}
			})
		})
	</script>
@stop