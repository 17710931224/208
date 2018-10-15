@extends('layouts.Admin.gy')
@section('title',$title)

@section('content')
<form action="/admin/orders/{{$res->id}}" method="post">
			@if (count($errors) > 0)
    		<div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 720px; right: auto; bottom: auto; left: 0px; top: 0px;">
    			<ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
        		</ul>
        	</div>
			@endif
              <div class="box-body">
              	<div class="form-group">
                  <label for="exampleInputEmail1">订单号</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="订单号" value="{{$res->order_number}}" disabled="disabled" name="id" style="width: 700px">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">收货人</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="收货人" value="{{$res->oname}}" name="oname" style="width: 700px">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">收货地址</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="收货地址" value="{{$res->address}}" name="address" style="width: 700px">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">联系电话</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="联系电话" value="{{$res->mobile}}" name="mobile" style="width: 700px">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	{{csrf_field()}}
              	{{ method_field('PUT') }}
                <button type="submit" class="btn btn-primary">修改</button>
              </div>
 </form>

@stop

@section('js')
	<script type="text/javascript">
		// alert($)
		$('.ui-draggable-handle').delay(5000).hide(200);
	</script>
@stop