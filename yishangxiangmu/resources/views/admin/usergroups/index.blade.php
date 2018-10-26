@extends ('admin.layouts.master')

@section ('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <i class="fa fa-list"></i>
      群组及权限管理
    </h3>
  </div>
  <div class="panel-body">
    <form action="" enctype="multipart/form-data" id="form-user-group" method="post">
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
             <tr>
              <td colspan="9">
                <a href="/admin/usergroups/add" class="btn btn-primary"><i class="fa fa-plus-square"></i>  新增群组</a> &emsp;
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 1px;"><input onclick="$(&apos;input[name*=\&apos;selected\&apos;]&apos;).prop(&apos;checked&apos;, this.checked);" type="checkbox"/></td>
              <td class="text-left"><a class="asc" href="#">群组</a></td>
              <td class="text-right">操作</td>
            </tr>
          </thead>
          <tbody>
            @foreach ($groups as $group)
            <tr>
              <td class="text-center"><input name="selected[]" type="checkbox" value="{{$group->user_group_id}}"/></td>
              <td class="text-left">{{$group->name}}</td>
              <td class="text-right">
                <a class="btn btn-primary" data-original-title="Edit" data-toggle="tooltip" href="/admin/usergroups/{{$group->user_group_id}}/edit" title=""><i class="fa fa-pencil"></i></a>
                <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-user-group').submit() : false;" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </form>
    <div class="row">
      <div class="col-sm-6 text-left"></div>
      <div class="col-sm-6 text-right">Showing 1 to 2 of 2 (1 Pages)</div>
    </div>
  </div>
</div>
@endsection