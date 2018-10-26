@extends ('admin.layouts.master')

@section ('main')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        <i class="fa fa-list"></i>
        使用者清单
      </h3>
    </div>
    <div class="panel-body">
      <form action="" enctype="multipart/form-data" id="form-user" method="post">
        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <td colspan="9">
                  <a href="/admin/user/add" class="btn btn-primary"><i class="fa fa-plus-square"></i> 新增使用者</a> &emsp;
                </td>
              </tr>
              <tr>
                <td class="text-center" style="width: 1px;"><input onclick="$(&apos;input[name*=\&apos;selected\&apos;]&apos;).prop(&apos;checked&apos;, this.checked);" type="checkbox"/></td>
                <td class="text-left"><a class="asc" href="">使用者</a></td>
                <td class="text-left"><a href="">状态</a></td>
                <td class="text-left"><a href="">创建于</a></td>
                <td class="text-right">操作</td>
              </tr>
            </thead>
            <tbody>
              @foreach($results as $key => $value)
              <tr>
                <td class="text-center"><input name="selected[]" type="checkbox" value="{{$value->user_id}}"/></td>
                <td class="text-left">{{$value->username}}</td>
                <td class="text-left">@if($value->status == '1')启用 @else 禁用 @endif</td>
                <td class="text-left">{{@date('m/d/Y', strtotime($value->created_at))}}</td>
                <td class="text-right">
                  <a class="btn btn-primary" data-original-title="Edit" data-toggle="tooltip" href="/admin/user/{{$value->user_id}}/edit" title=""><i class="fa fa-pencil"></i></a>

                  <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </form>
      <div class="row">
        <div class="col-sm-6 text-left">
          <div class="input-group input-group-sm">
            <div class="input-group input-group-sm">
              {{$results->appends($request->all())->links()}}
            </div>
          </div>
        </div>
        <div class="col-sm-6 text-right">展示的页码：Page {{$currentPage}} of {{$lastPage}}&emsp;已找到{{$total}} 条记录</div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('.remove').click(function (){
  var checked = $(this).parents('tr').find('input[type="checkbox"]')[0].checked;
  if(!checked) return;
  var warn = confirm('你确认删除吗？');
  if (!warn) return;
  var trs = $(this);
 var id = $(this).parents('tr').find('input[type="checkbox"]').attr('value');
  $.post('/admin/user/'+id, {"_token":"{{csrf_token()}}","_method":"DELETE",id:id}, function(data){
    if(data == '1'){
      trs.parents('tr').remove();
      location.href = '{{$_SERVER["REQUEST_URI"]}}';
    }
  });
});
</script>
@endsection