@extends ('admin.layouts.master')

@section ('main')
@if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissible">
    <i class="fa fa-exclamation-circle"></i> 
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      {{$errors->first()}}
    </div>
@endif
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        <i class="fa fa-pencil"></i>
        新增使用者
      </h3>
    </div>
    <div class="panel-body">
      <form action="/admin/user" class="form-horizontal" enctype="multipart/form-data" id="form-user" method="post">
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-username">使用者</label>
          <div class="col-sm-10"><input class="form-control" id="input-username" name="username" placeholder="使用者" type="text" value=""/></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-user-group">群组</label>
          <div class="col-sm-10">
            <select class="form-control" id="input-user-group" name="user_group_id">
              <option value="1">管理员</option>
              <option value="10">Demonstration</option>
            </select>
          </div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-firstname">名字</label>
          <div class="col-sm-10"><input class="form-control" id="input-firstname" name="firstname" placeholder="名字" type="text" value=""/></div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-lastname">姓氏</label>
          <div class="col-sm-10"><input class="form-control" id="input-lastname" name="lastname" placeholder="姓氏" type="text" value=""/></div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-email">电子邮件</label>
          <div class="col-sm-10"><input class="form-control" id="input-email" name="email" placeholder="电子邮件" type="text" value=""/></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-image">头像</label>
          <div class="col-sm-10">
            <img alt="" data-placeholder="/image/photo.jpg" id="avatar" src="/image/photo.jpg" width="100" title=""/>
            <br />图片正常大小: 100 * 100
            <div style="margin: 15px 0 0 0">
              <input type="file" name="avatar" id="fileInput" style="cursor: pointer;" width="100px" /><br />
            </div>
          </div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-password">密码</label>
          <div class="col-sm-10"><input autocomplete="off" class="form-control" id="input-password" name="password" placeholder="密码" type="password" value=""/></div>
        </div>
        <div class="form-group required">
          <label class="col-sm-2 control-label" for="input-confirm">确认密码</label>
          <div class="col-sm-10"><input class="form-control" id="input-confirm" name="confirm" placeholder="确认密码" type="password" value=""/></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-status">状态</label>
          <div class="col-sm-10">
            <select class="form-control" id="input-status" name="status">
              <option selected="selected" value="0">禁用</option>
              <option value="1">启用</option>
            </select>
          </div>
        </div>
        {{csrf_field()}}
        <button class="btn btn-primary"><i class="fa fa-save"></i> 保存</button>
        <a href="/admin/customer" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="取消"><i class="fa fa-reply"></i> 取消</a>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function getObjectURL(file){
      var url = null;
      if(window.createObjectURL != undefined){  // basic
        url = window.createObjectURL(file);     
      } else if(window.URL != undefined) {      // Firefox
        url = window.URL.createObjectURL(file);
      } else if(window.webkitURL != undefined) { // Apple webkit or Google Chrome
        url = window.webkitURL.createObjectURL(file);
      }else {
        return false;
      }
      return url;
    }
    
  $('#fileInput').change(function (){
    var objUrl = getObjectURL(this.files[0]);
    if(objUrl){
      $('#avatar').attr('src', objUrl);
    }
  });
</script>
@endsection