@extends('layout.homes')

@section('content')
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">购物车</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
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
  <td class="text-center"><a href="product.html"><img alt="Aspire超极本笔记本电脑" class="img-thumbnail" src="/home/image/catalog/demo/product/fashion/8.jpg" title="Aspire超极本笔记本电脑" width="70px"/></a></td>
  <td class="text-left">
    <a href="product.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$rs->prod_name}}</font></font></a>
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
							<td class="text-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="summ price">¥ 213.70</font></font></td>
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
			$.get('/home/cart/update',{id:cid,quantity:cquantity},function(data){
				if(data == '1'){
					up.parents('tr').remove();
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
			var cid = re.parents('span').siblings('input[name=cart_id]').val()
			if(ss == true){
				$.get('/home/cart/delete',{id:cid},function(data){
					if(data == '1'){
						re.parents('tr').remove()
					}
				})
			}
		})
	})

</script>
@stop