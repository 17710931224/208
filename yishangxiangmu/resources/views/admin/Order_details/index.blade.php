@extends('layout.admins')
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
                            <option value="10">
                                10
                            </option>
                            <option value="20">
                                20
                            </option>
                            <option value="35">
                                35
                            </option>
                            <option value="50">
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
                <tbody><tr style="color:#00c;font-size: 15px;">
                  <!-- <th></th> -->
                  <th style="display: none">ID</th>
                  <th>商品图片</th>
                  <th>商品名称</th>
                  <!-- <th>商品描述</th> -->
                  <th>商品价格</th>
                  <th>商品数量</th>
                  <th>商品总价</th>
                </tr>
                @foreach($res as $rs)
                <tr>
                  <!-- <input type="checkbox" name='ids[]'>
                  <td></td> -->
                  <td style="display: none">{{$rs->id}}</td>
                  <td><img style="width: 80px" src="{{$rs->pic}}"></td>
                  <td>{{$rs->prod_name}}</td>
                  <!-- <td>{{$rs->description}}</td> -->
                  <td>{{$rs->price}}</td>
                  <td>{{$rs->quantity}}</td>
                  <td>{{$rs->total}}</td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- <div class="container">
          @foreach ($res as $user)
              {{ $user->name }}
          @endforeach
        </div> -->

        
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
              </ul>
        </div>
@stop

@section('js')
	<script type="text/javascript">
		$('.ui-draggable-handle').delay(5000).hide(200)
	</script>
@stop
