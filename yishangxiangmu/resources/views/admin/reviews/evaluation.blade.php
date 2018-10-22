@extends('layout.admins')

@section('title',$title)

@section('content')
	<div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr style="color: #00c;font-size: 15px;">
                  <!-- <th></th> -->
                  <th style="display: none">ID</th>
                  <!-- <th>评论ID</th> -->
                  <!-- <th>用户ID</th> -->
                  <!-- <th>商品ID</th> -->
                  <th>评论内容</th>
                  <th>评论图片</th>
                  <th>评论时间</th>
                 
                  <!-- <th>买家留言</th> -->
                  <th>操作</th>

                </tr>
                @foreach($res as $rs)
                <tr>
                  <!-- <input type="checkbox" name='ids[]'>
                  <td></td> -->
                  <td class="orderid rid" style="display: none;">{{$rs->id}}</td>
                  <td class="orderid uid" style="display: none;">{{$rs->user_id}}</td>
                  <td class="orderid pid" style="display: none;">{{$rs->prod_id}}</td>
                  <td class="orderid" style="width: 30%">{{$rs->content}}</td>
                  <td class="orderid" style="width: 40%">
                  	@foreach($rs->pic as $vv)
                  	<!-- <img src="{{$vv->pic}}" style="width: 50px;" class="xiaotu J-thumb-img"> -->
                  	<a class="J-thumb-img" data-ind="0" href="#none"><img alt="" height="48" src="{{$vv->pic}}" width="48"/ class="xiaotu"></a>
                  	@endforeach
                  	<br>
                  	<!-- <img src="" class="datu" style="width: 300px;margin: 5px;"> -->
                  	<a class="J-thumb-img" data-ind="0" href="#none"><img alt="" style="width: 300px" src="" width="48"/ class="datu"></a>
                  	<!-- <td><img src=""></td> -->
                  </td>
                  <td class="orderid">{{date('Y-m-d H:i',$rs->create_at)}}</td>

                  
                 <!--  <td>{{$rs->review}}</td> -->
                  <td>
                  	<a href="javascript:void(0)" class="btn btn-primary tg">通过</a>
                    <a href="javascript:void(0)" class="btn btn-danger wtg">通不过</a>
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
		$('.xiaotu').each(function(){
			$(this).click(function(){
				var src = $(this).attr('src')
				// console.log(src)
				$(this).parents('td').find('.datu').attr('src',src)
			})
		})
		$('.datu').each(function(){
			$(this).click(function(){
				$(this).attr('src',"")
			})
		})
		$('.tg').click(function(){
			var rid = $(this).parents('tr').find('.rid').text()
			// console.log(rid)
			var ss = $(this)
			$.get('/admin/evaluation/tg',{rid:rid},function(data){
				// console.log(data)
				if(data == "1"){
					alert('审核通过')
					ss.parents('tr').remove()
				}
			})
		})
		$('.wtg').click(function(){
			var rid = $(this).parents('tr').find('.rid').text()
			var ss = $(this)
			$.get('/admin/evaluation/wtg',{rid:rid},function(data){
				if(data == "1"){
					alert('审核未通过,已删除该数据')
					ss.parents('tr').remove()
				}
			})
		})
	</script>


@stop