@extends('layout.homes')

@section('content')
	<form action="/home/order/create" method="post" >
		{{ csrf_field() }}
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="#"><i class="fa fa-home"></i></a></li>
				<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看</font></font></a></li>
				
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
				  <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看</font></font></h2>
				  <div class="so-onepagecheckout row">
					<div class="col-left col-sm-3">
					  <div class="panel panel-default">
						
						  
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 你个人详细资料</font></font></h4>
						</div>
						  <div class="panel-body">
								<fieldset id="account">
								  <div class="form-group required">
									<label for="input-payment-firstname" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="name">姓名</font></font></label>
									<input type="text" name="uid" value="1" style="display: none" value="2">
									<input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="uname" style="width: 95%">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-email" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="email">电子邮件</font></font></label>
									<input type="text" class="form-control" id="input-payment-email" placeholder="E-Mail" value="" name="uemail">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-telephone" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="phone">电话</font></font></label>
									<input type="text" class="form-control" id="input-payment-telephone" placeholder="Telephone" value="" name="uphone">
								  </div>
								  
								</fieldset>
							  </div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title"><i class="fa fa-book"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 收货信息</font></font></h4>
						</div>
						  <div class="panel-body">
								<fieldset id="address" class="required">
								  
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="receiver">姓名</font></font></label>
									<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="oname">
								  </div>
								  <div class="form-group required">
									<label for="input-payment-address-1" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="consignee_call">电话</font></font></label>
									<input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="mobile">
								  </div>
								  
								  <div class="form-group required">
									<label for="input-payment-country" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">省/市</font></font></label>
									<select id="s_province" name="s_province" class="form-control"></select>
								  </div>
								  <div class="form-group required">
									<label for="input-payment-zone" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">市</font></font></label>
									<select id="s_city" name="s_city"  class="form-control"></select>
								  </div>
								  <div class="form-group required">
									<label for="input-payment-zone" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">县/区</font></font></label>
									<select id="s_county" name="s_county" class="form-control"></select>
								  </div>
								  <div class="form-group required">
									<label for="input-payment-zone" class="control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="specific_address">详细地址</font></font></label>
										<input type="text" name="address" class="form-control">
								  </div>

								  <div class="checkbox">
									<label>
									  <input type="checkbox" checked="checked" value="1" name="shipping_address"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
									  我的递送和帐单地址是相同的。</font></font></label>
								  </div>
								</fieldset>
							  </div>
					  </div>
					</div>
					<div class="col-right col-sm-9">
					  <div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default no-padding">
								<div class="col-sm-6 checkout-shipping-methods">
									<div class="panel-heading">
									  <h4 class="panel-title"><i class="fa fa-truck"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="yunshu"> 运输方式</font></font></h4>
									</div>
									<div class="panel-body ">
										<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请选择要在此订单上使用的首选送货方式。</font></font></p>
										
										@foreach($tran as $tr)
										<div class="radio">
										  <label>
											<input type="radio" class="tran" name="transport" value="{{$tr->id}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
											{{$tr->transport}}</font></font></label>
										</div>
										@endforeach
									</div>
								</div>
								<div class="col-sm-6  checkout-payment-methods" style="display: none">
									<div class="panel-heading">
									  <h4 class="panel-title"><i class="fa fa-credit-card"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 付款方法</font></font></h4>
									</div>
									<div class="panel-body">
										<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请选择要在此订单上使用的首选付款方式。</font></font></p>
										
										<div class="radio">
										  <label>
											<input type="radio" name="Paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">货到付款</font></font></label>
										</div>
										<div class="radio">
										  <label>
											<input type="radio" name="Paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">微信</font></font></label>
										</div>
										<div class="radio">
										  <label>
											<input type="radio" name="Paypal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">支付宝</font></font></label>
										</div>
									</div>
								</div>
							</div>
							</div>
						
						
						
						
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-shopping-cart"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 我的商品</font></font></h4>
							</div>
							  <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered">
									<thead>
									  <tr>
										<td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></td>
										<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></td>
										<td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">数量</font></font></td>
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></td>
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总</font></font></td>
									  </tr>
									</thead>
									<tbody>
									@foreach($res as $rs)	
									  <tr>
										<td class="text-center"><a href="/home/product/{{$rs->pid}}"><img width="80px" src="{{$rs->pic}}" alt="{{$rs->prod_name}}" title="{{$rs->prod_name}}" class="img-thumbnail"></a></td>
										<td class="text-left"><a href="/home/product/{{$rs->pid}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$rs->prod_name}}</font></font></a></td>
										<td class="text-left" style="text-align: center;">{{$rs->quantity}}</td>
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$rs->price}}</font></font></td>
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$rs->sum}}</font></font></td>
									  </tr>
									  @endforeach
									</tbody>
									<tfoot>
									  <tr class="price">
										<td class="text-right" colspan="4"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小计：</font></font></strong></td>
										<td class="text-right sub"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="subtotal">¥ {{$summ}}</font></font></td>
									  </tr>
									  <tr class="price">
										<td class="text-right" colspan="4"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" >单位运费：</font></font></strong></td>
										<td class="text-right"><font style="vertical-align: inherit;"><font  class="freight" style="vertical-align: inherit;" class="sport">¥ 0.00</font></font></td>
									  </tr>
									  <tr>
										
									  <tr class="price">
									  	<input type="text" id="total_price" name="total" value="{{$summ}}" style="display: none">
										<td class="text-right" colspan="4"><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">总：</font></font></strong></td>
										<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="total">¥ {{$summ}}</font></font></td>
									  </tr>
									</tfoot>
								  </table>
								</div>
							  </div>
						  </div>
						</div>
						<div class="col-sm-12">
						  <div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title"><i class="fa fa-pencil"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 添加关于您的订单的评论</font></font></h4>
							</div>
							  <div class="panel-body">
								<textarea rows="4" class="form-control" id="confirm_comment" name="review"></textarea>
								<br>
								<label class="control-label" for="confirm_agree">
								  <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
								  <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我已阅读并同意</font></font><a class="agree" href="#"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">条款和条件</font></font></b></a></span> </label>
								<div class="buttons">
								  <div class="">
									<font style="vertical-align: inherit; float: right;"><font style="vertical-align: inherit;"><input type="submit" class="btn btn-primary mit" id="button-confirm" value="确认订单"></font></font>
									
								  </div>

								</div>

							  </div>

						  </div>
						  <font style="vertical-align: inherit; float: right;"><font style="vertical-align: inherit;"><a href="/home/cart/index" class="btn btn-primary">返回购物车</a></font></font>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<!--Middle Part End -->
				
			</div>
		</div>
	</form>
	<!-- //Main Container -->
@stop

@section('js')


	<!-- <script class="resources library" src="/Home/js/area.js" type="text/javascript"></script>
    <script type="text/javascript">_init_area();</script> -->
	<script type="text/javascript">

	

		$('body').removeClass('common-home res layout-1')
			
		//商品价格
			$('.tran').each(function(){
				var sport = $(this)
				$(this).click(function(){
					$('.yunshu').text('运输方式').css('color',"")
					var tid = sport.val()
					$.get('/home/tran',{id:tid},function(data){
						$('.freight').text('¥ '+ data)
						 var sub = parseFloat($('.subtotal').text().replace(/¥/g, ""))
						 var tran = $('.sport').text().replace(/¥/g, "");
						 var total = sub + parseFloat(data)
						 $('.total').text('¥ '+total)
						 $('#total_price').val(total)

					})
				})
			})

			// console.log($('#total_price').val())
			var UN;
			var UE;
			var UP;
			var ON;
			var MO;
			var AD;
			var TR;

			$('form').submit(function(){

				//用户名验证
				var uname = $.trim($('input[name=uname]').val())
				var reg = /^[\u4E00-\u9FA5A-Za-z]+$/
				if(!reg.test(uname)){
					$('input[name=uname]').siblings('label').find('.name').text('姓名不符合要求').css('color','red')
					UN = false;
				}else if(!uname.length){
					$('input[name=uname]').siblings('label').find('.name').text('姓名不能为空').css('color','red')
					UN = false;
				}else{
					UN = true;
				}
				

				//用户邮箱验证
				var uemail = $.trim($('input[name=uemail]').val())
				var reg = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*\.[a-zA-Z0-9]{2,6}$/
				if(!reg.test(uemail)){
					$('input[name=uemail]').siblings('label').find('.email').text('邮箱不符合要求').css('color','red')
					UE = false;
				}else if(!uemail.length){
					$('input[name=uemail]').siblings('label').find('.email').text('邮箱不能为空').css('color','red')
					UE = false;
				}else{
					UE = true;
				}
				

				//用户电话验证
				var uphone = $.trim($('input[name=uphone]').val())
				var reg = /^1[3,5,7,8,9]\d{9}/
				if(!reg.test(uphone)){
					$('input[name=uphone]').siblings('label').find('.phone').text('电话不符合要求').css('color','red')
					UP = false;
				}else if(!uphone.length){
					$('input[name=uphone]').siblings('label').find('.phone').text('电话能为空').css('color','red')
					UP = false;
				}else{
					UP = true;
				}
					

				//收货人验证
				var oname = $.trim($('input[name=oname]').val())
				var reg = /^[\u4E00-\u9FA5A-Za-z]+$/
				if(!reg.test(oname)){
					$('input[name=oname]').siblings('label').find('.receiver').text('姓名不符合要求').css('color','red')
					ON = false;
				}else if(!oname.length){
					$('input[name=oname]').siblings('label').find('.receiver').text('姓名不能为空').css('color','red')
					ON = false;
				}else{
					ON = true;
				}
				

				//收货人电话验证
				var mobile = $.trim($('input[name=mobile]').val())
				var reg = /^1[3,5,7,8,9]\d{9}/
				if(!reg.test(mobile)){
					$('input[name=mobile]').siblings('label').find('.consignee_call').text('电话不符合要求').css('color','red')
					MO = false;
				}else if(!mobile.length){
					$('input[name=mobile]').siblings('label').find('.consignee_call').text('电话不能为空').css('color','red')
					MO = false;
				}else{
					MO = true;
				}
				

				//收货人地址验证
				var address = $.trim($('input[name=address]').val())
				if(!address.length){
					$('input[name=address]').siblings('label').find('.specific_address').text('地址不能为空').css('color','red')
					AD = false;
					}else{
					AD = true;
					}

				$('input[name=transport]').each(function(){
					var list= $('input:radio[name="transport"]:checked').val();
			            if(list==null){
			                $('.yunshu').text('请选择运输方式').css('color','red')
			                TR = false;
			                return false;
			            }else{
			               	TR = true; 
			            }
				})	
				
				console.log(UN,UE,UP,ON,MO,AD,TR)
				if(UN && UE && UP && ON && MO && AD && TR){
					return true;
				}else{
					return false;
				} 
				
			
			})

			$('input[name=uname]').focus(function(){
				$(this).siblings('label').find('.name').text('姓名').css('color','')
			})

			$('input[name=uemail]').focus(function(){
				$(this).siblings('label').find('.email').text('邮箱').css('color','')
			})

			$('input[name=uphone]').focus(function(){
				$(this).siblings('label').find('.phone').text('电话').css('color','')
			})

			$('input[name=oname]').focus(function(){
				$(this).siblings('label').find('.receiver').text('姓名').css('color','')
			})

			$('input[name=mobile]').focus(function(){
				$(this).siblings('label').find('.consignee_call').text('电话').css('color','')
			})

			$('input[name=address]').focus(function(){
				$(this).siblings('label').find('.specific_address').text('详细地址').css('color','')
			})

	</script>
@stop