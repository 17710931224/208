@extends('layout.admins')

@section('title',$title)
@section('content')
			@if (count($errors) > 0)
    		<div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 720px; right: auto; bottom: auto; left: 0px; top: 0px;">
    			<ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
        		</ul>
        	</div>
			@endif	

 <div class="col-md-12">

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action='/admin/link/{{$res->id}}' method='post' enctype='multipart/form-data'>
            	{{method_field('PUT')}}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">站点</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="site" value="{{$res->site}}">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">站点链接</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="link" value="{{$res->link}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">站点图片 :</font></font></label>
                  
                  <div class="col-sm-8">
                  <div class="mws-form-item">
                  		<div><img alt="User profile picture"  id="avatar" class="profile-user-img img-responsive" src="{{$res->imgsrc}}" style="float: left;"></div>
                        <div style="position: relative;" class="fileinput-holder">

                            <input id="fileInput" name="imgsrc[]" type="file" style="width:900px;">
                        </div>
                    </div>
                    </div>
                  </div>
               		<div class="mws-button-row">
                <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="btn btn-primary" lay-filter="add" lay-submit="" style="float: right;">
                        {{csrf_field()}}
                        修改链接
                </button>
              </div>
              </div>
              <!-- /.box-body -->
              <!-- /.box-footer -->
            </form>
          </div>
    </form>
    </div>
    </div>	
@stop

@section('js')
	
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
      $('#avatar').attr('src', objUrl).css('display','block');
    }
  });
</script>
@stop