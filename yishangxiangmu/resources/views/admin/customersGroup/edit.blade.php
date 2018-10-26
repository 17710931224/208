@extends ('admin.layouts.master')

@section ('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
      <i class="fa fa-pencil"></i>
      添加客户组
    </h3>
  </div>
  <div class="panel-body">
    <form action="/admin/customerGroup/{{$res[0]->customer_group_id}}" class="form-horizontal" enctype="multipart/form-data" id="form-customer-group" method="post">
      <div class="form-group required">
        <label class="col-sm-2 control-label">客户组名称</label>
        <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-addon"><img src="/image/language/en-gb/en-gb.png" title="English"/></span>
            <input class="form-control" name="customer_group_description[name]" placeholder="客户组名称" value="{{$res[0]->CustomerGroupDescription['name']}}" type="text"/>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="input-description1">描述</label>
        <div class="col-sm-10">
          <div class="input-group">
            <span class="input-group-addon"><img src="/image/language/en-gb/en-gb.png" title="English"/></span>
            <textarea class="form-control" id="input-description1" name="customer_group_description[description]" placeholder="描述" rows="5">{{$res[0]->CustomerGroupDescription['description']}}</textarea>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label"><span data-original-title="" data-toggle="tooltip" title="">批准新客户</span></label>
        <div class="col-sm-4">
          <label class="radio-inline">
            <input name="approval" type="radio" <?= ($res[0]->approval== '1')?'checked':'' ?> value="1"/>
            是
          </label>
          <label class="radio-inline">
            <input name="approval" type="radio" <?= ($res[0]->approval== '0')?'checked':'' ?> value="0"/>
            否
          </label>
		  <div class="col-sm-6" style="float: right;"> * 客户必须获得管理员的批准才能登录。</div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label" for="input-sort-order">排序</label>
        <div class="col-sm-10"><input class="form-control" id="input-sort-order" value="{{$res[0]->sort_order}}" name="sort_order" placeholder="排序" type="text"/></div>
      </div>
      <div class="form-group">
      	{{csrf_field()}}
        {{ method_field('PUT') }}
      	<button class="btn btn-primary">保存</button>
        <a href="/admin/customerGroup" class="btn btn-default">取消</a>
      </div>
      
    </form>
  </div>
</div>
@endsection