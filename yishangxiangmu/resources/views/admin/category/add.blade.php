@extends('layout.admins')

@section('title',$title)

@section('content')
   
   
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/category" method="post">
            <div class="box-body">
                <div class="mws-form-row">
    				<label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></label>

                  <div class="col-sm-10">
                    <input type="text" class="small" name="cname" >
                  </div>
                </div>
    		</div>	
    		<div class="box-body">
                <div class="mws-form-row">
                    <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></label>

                  <div class="col-sm-2">
                  <select class="small" name='pid'>
                    <option value='0'>请选择</option>
                    @foreach($rs as $k => $v)
                    <option value='{{$v->cid}}'>{{$v->cname}}</option>
                    @endforeach
                    
                  </select>
                  </div>
                </div>
            </div>  

              <!-- /.box-body -->
              <div class="mws-button-row">

    			{{csrf_field()}}
    			<input type="submit" class="btn btn-info" value="添加">
    			
    		</div>
              <!-- /.box-footer -->
            </form>
          </div>
   


@stop