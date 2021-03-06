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
		    background: url(/Home/image/no-login-icon.png) 250px 22px no-repeat;
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
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
		@if($count >0)	
        <div id="content" class="col-sm-12">
          <h2 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车</font></font></h2>
            <div class="table-responsive form-group">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">图片</font></font></td>
                    <td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品名称</font></font></td>
                    <td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">产品描述</font></font></td>
                    <td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">数量</font></font></td>
                    <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></td>
                    <td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">小计</font></font></td>
                  </tr>
                </thead>
                <tbody>
					@foreach($res as $rs)
					<tr class="trr">
					  <td class="text-center"><a href="/home/product/{{$rs->pid}}"><img alt="{{$rs->prod_name}}" class="img-thumbnail" src="{{$rs->pic}}" title="{{$rs->prod_name}}" width="80px"/></a></td>
					  <td class="text-left" style="width: 400px;">
					    <a href="/home/product/{{$rs->pid}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$rs->prod_name}}</font></font></a>
					    <br/>
					  </td>
					  <td class="text-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$rs->description}}</font></font></td>
					  <td class="text-left" width="200px">
					    <div class="input-group btn-block quantity">
					      <input type="text" name="cart_id" value="{{$rs->id}}" style="display: none">
					      <input class="form-control" name="quantity" size="1" type="text" value="{{$rs->quantity}}"/>
					      <span class="input-group-btn">
					        <button class="btn btn-primary update" data-original-title="Update" data-toggle="tooltip" title="" type="submit"><i class="fa fa-clone"></i></button>
					        <button class="btn btn-danger remove" data-original-title="Remove" data-toggle="tooltip" onclick="" title="" type="button"><i class="fa fa-times-circle"></i></button>
					      </span>
					    </div>
					  </td>
					  <td class="text-right price dj"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¥ {{$rs->price}}</font></font></td>
					  <td class="text-right">
					  	<font style="vertical-align: inherit;">
					  		<font style="vertical-align: inherit;" class="sum  price">¥ {{$rs->sum}}
					  		</font>
					  	</font>
					  </td>
					</tr>
					@endforeach

                  
                </tbody>
              </table>
            </div>
          <h3 class="subtitle no-margin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">你接下来想做什么？</font></font></h3>
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">选择您是否有想要使用的折扣代码或奖励积分，或者想要估算您的运送成本。</font></font></p>

		<div class="row">
			<div class="col-sm-4 col-sm-offset-8">
				<table class="table table-bordered">
					<tbody>
						
						<tr>
							<td class="text-right">
								<strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="price">总金额：</font></font></strong>
							</td>
							<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="summ price">¥ 00.00</font></font></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">继续购物</font></font></a></div>
            <div class="pull-right"><a href="/home/order/checkout" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">结账</font></font></a></div>
          </div>
        </div>
        <!--Middle Part End -->
		@else
		<div class="cart-empty">
		    <div class="message">
		        <ul>
		            <li class="txt">
		                购物车空空的哦~，去看看心仪的商品吧~
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
		</div>
	</div>
	
	<!-- //Main Container -->
@stop

@section('js')
<script type="text/javascript">
	$('body').removeClass('common-home res layout-1')
	$('body').addClass('res layout-1 loaded')
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});


	//商品总价
	var ss = 0;
	$('.sum').each(function(){
		ss += parseFloat($(this).text().replace(/¥/g,''))
		$('.summ').text('¥ '+ss.toFixed(2));
	})

	//每样商品的小计
	$('.trr').each(function(){
		var quantity = $(this).find('input[name=quantity]').val();
		var price = $(this).find('.dj').text().replace(/¥/g,"");
		$(this).find('.sum').text('¥ '+(price*quantity).toFixed(2));

	})


	//判断商品数量 
	var value;
	$('input[name=quantity]').each(function(){
		var foc = $(this)
		$(this).focus(function(){
			value = foc.val()
		})
	})

	$('input[name=quantity]').each(function(){
		var ss = $(this)
		$(this).blur(function(){
			var hh = ss.val();
			// console.log(hh);
			if(hh == ""){
				ss.val(value)
			}
		})
	})

	//修改商品数量
	$('.update').each(function(){
		var up = $(this)
		$(this).click(function(){
			var cquantity =up.parent('span').siblings('input[name=quantity]').val()
			var cid = up.parents('span').siblings('input[name=cart_id]').val()
			var sum = $(this).parents('tr').find('.sum').text().replace(/¥/g,"").trim()
			var summ = $('.summ').text().replace(/¥/g,"").trim()
			var summm = summ-sum
			$.get('/home/cart/update',{id:cid,quantity:cquantity},function(data){
				if(data.code == '1'){
					up.parents('tr').remove();
					$('.summ').text('¥ '+summm.toFixed(2));
					if(data.ucount < 1){
							window.location.reload()
						}
				}else if(data.code == '2'){
						up.parents('tr').find('input[name=quantity]').val(data.count);
						var quantity = up.parents('tr').find('input[name=quantity]').val();
						var price = up.parents('tr').find('.dj').text().replace(/¥/g,"");
						up.parents('tr').find('.sum').text('¥ '+(price*quantity).toFixed(2));
						var ss = 0;
						$('.sum').each(function(){
							ss += parseFloat($(this).text().replace(/¥/g,''))

							$('.summ').text('¥ '+ss.toFixed(2));
						})
						console.log(data)
				}else{
					// console.log(parseFloat(data.price*data.quantity,2));
					// up.parents('td').siblings().find('.sum').text('¥ '+data.sum)
					//修改后的商品的小计
					var quantity = up.parents('tr').find('input[name=quantity]').val();
					var price = up.parents('tr').find('.dj').text().replace(/¥/g,"");
					up.parents('tr').find('.sum').text('¥ '+(price*quantity).toFixed(2));

					//修改后的所有商品的总价
					var ss = 0;
					$('.sum').each(function(){
						ss += parseFloat($(this).text().replace(/¥/g,''))

						$('.summ').text('¥ '+ss.toFixed(2));
					})
				}
			})
		})
	})

	//移除商品
	$('.remove').each(function(){
		var re = $(this)
		$(this).click(function(){
			var  ss = confirm('确认移除此商品吗?')
			var  sum = $(this).parents('tr').find('.sum').text().replace(/¥/g,"").trim()
			var summ = $('.summ').text().replace(/¥/g,"").trim()
			var summm = summ-sum
			var cid = re.parents('span').siblings('input[name=cart_id]').val()
			if(ss == true){
				$.get('/home/cart/delete',{id:cid},function(data){
					if(data.code == '1'){
						re.parents('tr').remove()
						$('.summ').text('¥ '+summm.toFixed(2));
						if(data.count < 1){
							window.location.reload()
						}
					}
				})
			}
		})
	})

</script>
@stop