@extends ('admin.layouts.master')

@section ('main')
<div class="panel panel-default">
	<div class="panel-heading">
	  <h3 class="panel-title">
	    <i class="fa fa-pencil"></i>
	    新增群组
	  </h3>
	</div>
	<div class="panel-body">
	  <form action="/admin/usergroups/store" class="form-horizontal" enctype="multipart/form-data" id="form-user-group" method="post">
	    <div class="form-group required">
	      <label class="col-sm-2 control-label" for="input-name">群组名</label>
	      <div class="col-sm-10"><input class="form-control" id="input-name" name="name" placeholder="群组名" type="text" value=""/></div>
	    </div>
	    
	    <div class="form-group">
			<label class="col-sm-2 control-label">访问权限</label>
			<div class="col-sm-10">
			  <div class="well well-sm" style="height: 150px; overflow: auto;">
				@foreach ($permissions['access'] as $permission)
				<div class="checkbox">
				  <label>
					<input type="checkbox" name="permission[access][]" value="{{ $permission }}" checked="checked" />
					{{ $permission }}
				  </label>
				</div>
				@endforeach
			  </div>
			  <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">选择全部</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">全部取消选择</button></div>
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label">修改权限</label>
			<div class="col-sm-10">
			  <div class="well well-sm" style="height: 150px; overflow: auto;">
				@foreach ($permissions['modify'] as $permission)
				<div class="checkbox">
				  <label>
					<input type="checkbox" name="permission[modify][]" value="{{ $permission }}" checked="checked" />
					{{ $permission }}
				  </label>
				</div>
				@endforeach
			  </div>
			   <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', true);" class="btn btn-link">选择全部</button> / <button type="button" onclick="$(this).parent().find(':checkbox').prop('checked', false);" class="btn btn-link">取消选择全部</button></div>
			</div>
			{{csrf_field()}}
	        <button class="btn btn-primary"><i class="fa fa-save"></i> 保存</button>
	        <a href="/admin/user/index" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="取消"><i class="fa fa-reply"></i> 取消</a>
	  </form>
	</div>
</div>
@endsection