@extends('layout.admins')

@section('title',$title)

@section('content')


<div class="col-md-12">

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/admin/lunbo" method='post' enctype='multipart/form-data'>
              <div class="box-body">
               
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">URL</font></font></label>

                  <div class="col-sm-8">
                     <input type="text" id="username" name="url" required="" 
                  autocomplete="off" class="layui-input">
                  </div>
                </div>
                
                

                
                
                
           

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">轮播图片</font></font></label>
                  
                  <div class="col-sm-8">
                  <div class="mws-form-item">
                        <div style="position: relative;" class="fileinput-holder">

                            <input type="file" id="file" name="pic"  required="" autocomplete="off">
                        </div>
                        <div style="position: relative;" class="fileinput-holder">

                            <input type="button" value="查看图像" onclick="readAsDataURL()" />
                        </div>
                    </div>
                    <div id="result" name="result" style="display:inline"></div>
                    </div>
                  </div>

               

                


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></label>
                    <div class="col-sm-10">
                       
                          <input type="radio" name="status" lay-skin="primary" value="1" title="启用" checked="">启用
                		  <input type="radio" name="status" lay-skin="primary" value="2" title="禁用">禁用
                        
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="mws-button-row">
                <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="btn btn-primary" lay-filter="add" lay-submit="">

                        {{csrf_field()}}
                        新增图片
                </button>
            </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </form>
    </div>
    </div>




@stop

@section('js')

<script>
    
      
      function readAsDataURL(){ 
        //检验是否为图像文件 
        var file = document.getElementById("file").files[0]; 
       
        if(!/image\/\w+/.test(file.type)){ 
            alert("看清楚，这个需要图片！"); 
            return false; 
        } 
        var reader = new FileReader(); 
        //将文件以Data URL形式读入页面 
        reader.readAsDataURL(file); 
        reader.onload=function(e){ 
            var result=document.getElementById("result"); 
            //显示文件 
            result.innerHTML='<img src="' + this.result +'" width="400px"/>'; 
        } 

      } 

    </script>

@stop