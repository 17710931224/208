@extends('layouts.Admin.gy')
@section('title',$title)

@section('content')

	@if(session('success'))
		<div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">{{session('success')}}</div>

	@endif


	<div class="col-xs-12">
          <div class="box">
            <form action="/admin/orders" method="get">
              <div class="box-header">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        每页
                        <select size="1" name="onum" aria-controls="DataTables_Table_1">
                            <option value="10" @if($request->onum==10) selected="selected" @endif>
                                10
                            </option>
                            <option value="20" @if($request->onum==20) selected="selected" @endif>
                                20
                            </option>
                            <option value="35" @if($request->onum==35) selected="selected" @endif>
                                35
                            </option>
                            <option value="50" @if($request->onum==50) selected="selected" @endif>
                                50
                            </option>
                        </select>
                        条
                    </label>
                </div>

                <div class="box-tools">

                  <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        订单号:
                        <input type="text" aria-controls="DataTables_Table_1" name="orders" value="">
                    </label>
                    <label>
                        用户名:
                        <input type="text" aria-controls="DataTables_Table_1" name="uname" value="">
                    </label>
                 <button class="btn btn-info">搜索</button>   
                </div>
                </div>
              </div>
            </form>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr style="color: #00c;font-size: 15px;">
                  <!-- <th></th> -->
                  <th style="display: none">ID</th>
                  <th>用户名</th>
                  <th>订单号</th>
                  <th>收货人</th>
                  <th>收货地址</th>
                  <th>联系电话</th>
                  <th>下单时间</th>
                  <th>总金额</th>
                  <th>收货时间</th>
                  <!-- <th>买家留言</th> -->
                  <th>操作</th>

                </tr>
                @foreach($res as $rs)
                <tr>
                  <!-- <input type="checkbox" name='ids[]'>
                  <td></td> -->
                  <td style="display: none" class="orderid">{{$rs->id}}</td>
                  <td>{{$rs->uname}}</td>
                  <td>{{$rs->order_number}}</td>
                  <td>{{$rs->oname}}</td>
                  <td>{{$rs->address}}</td>
                  <td>{{$rs->mobile}}</td>
                  <td>{{date("Y-m-d H:i",$rs->created_at)}}</td>
                  <td>{{$rs->total}}</td>
                  @if($rs->receipt_time == null)
                  <td>未收货</td>
                  @else
                  <td>{{date("Y-m-d H:i",$rs->receipt_time)}}</td>
                  @endif
                 <!--  <td>{{$rs->review}}</td> -->
                  <td>
                  	<a href="/admin/orders/{{$rs->id}}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                    <a href="/admin/details/{{$rs->id}}" class="btn btn-primary">详情</a>
                  	@if($rs->status==1)
                  	<a href="javascript:void(0)" value="1" class="btn btn-primary slip">发货</a>
                  	@elseif($rs->status==2)
                  	<a href="javascript:void(0)" value="2" class="btn btn-primary">已发货</a>
                  	@else
                  	<a href="javascript:void(0)" value="3" class="btn btn-danger">交易完成</a>
                  	@endif


                  </td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                {{ $res->links() }}
              </ul>
        </div>
@stop

@section('js')
	<script type="text/javascript">
		$('.ui-draggable-handle').delay(5000).hide(200)
    $('.slip').click(function(){
      var sip = $(this);
      var ss = $(this).parents('td').siblings('.orderid').text();
      // console.log(ss);
      $.get('/admin/order/slip',{id:ss},function(data){
        // console.log(data);
        if(data == 1){
            sip.text('已发货');
        }
      })

    })

	</script>
@stop
