@extends('layout.admins')

@section('title',$title)

@section('content')
   
   
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">横向表格</font></font></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if (count($errors) > 0)
            <div class="callout callout-warning">
               
                @foreach ($errors->all() as $error)
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$error}}</font></font></p>
                @endforeach
              </div>
            @endif
            <form class="form-horizontal" action="/admin/category/{{$rs->cid}}" method="post">
            <div class="box-body">
                <div class="mws-form-row">
                    <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></label>

                  <div class="col-sm-10">
                    <input type="text" class="small" name="cname" value='{{$rs->cname}}'>
                  </div>
                </div>
            </div>  
            <div class="box-body">
                <div class="mws-form-row">
                    <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类</font></font></label>

                  <div class="col-sm-2">
                  <select class="small" name='pid'>
                    <option value='0'>请选择</option>
                    @foreach($info as $k => $v)
                            @if($v->cid  == $rs->pid)
                            <option value='{{$v->cid}}' selected>{{$v->cname}}</option>
                            @endif

                    @endforeach
                    
                  </select>
                  </div>
                </div>
            </div> 

              <!-- /.box-body -->
              <div class="mws-button-row">

    			{{method_field('PUT')}}
                {{csrf_field()}}
    			<input type="submit" class="btn btn-info" value="修改">
    			
    		
              <!-- /.box-footer -->
            </form>
          </div>
   
@stop
@section('js')
<script>

   
    $('.callout').delay(3000).fadeOut(2000);

                         
    

          

                  
</script> 

@stop