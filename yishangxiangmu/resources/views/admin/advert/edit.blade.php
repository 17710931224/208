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
            <form class="form-horizontal" action="/admin/advert/{{$data->adid}}" method='post' enctype='multipart/form-data'>
              <div class="box-body">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广告名 </font></font></label>

                  <div class="col-sm-8">
                     <input type="text" id="adname" name="adname" required="{{$data->adname}}" 
                  autocomplete="off" class="layui-input">
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">URL地址 </font></font></label>

                  <div class="col-sm-8">
                     <input type="text" id="adurl" name="adurl" required="{{$data->adurl}}" 
                  autocomplete="off" class="layui-input">
                  </div>
                </div>
                
                

                
                
                
           

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">广告图片</font></font></label>
                  <img src="{{$data->adpic}}" width="300px">
                  <div class="col-sm-8">
                  <div class="mws-form-item">
                        <div style="position: relative;" class="fileinput-holder">

                            <input type="file" id="zx_img" name="adpic"  required="" autocomplete="off">
                        </div>
                        
                    </div>
                    <div id="result" name="result" style="display:inline"></div>
                    </div>
                  </div>

               

                


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></label>
                    <div class="col-sm-10">
                       
                          <input type="radio" name="status" lay-skin="primary" value="1" title="启用" checked="" @if($data->status =='1') checked='checked' @endif>启用
                      <input type="radio" name="status" lay-skin="primary" value="2" title="禁用" @if($data->status =='2') checked='checked' @endif >禁用
                        
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="mws-button-row">
                <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="btn btn-primary" lay-filter="add" lay-submit="">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        修改广告
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
    
      //上传图片选择文件 判断是否为图片  并且刷新预览图
                $("#zx_img").change(function (e) {

                  //判断是否为图片格式
                  var img_id=document.getElementById('zx_img').value; //根据id得到值
                  var index= img_id.indexOf("."); //得到"."在第几位
                  img_id=img_id.substring(index); //截断"."之前的，得到后缀
                  if(img_id!=".bmp"&&img_id!=".png"&&img_id!=".gif"&&img_id!=".jpg"&&img_id!=".jpeg"){  //根据后缀，判断是否符合图片格式
                        alert("不是指定图片格式,重新选择"); 
                       document.getElementById('zx_img').value="";  // 不符合，就清除，重新选择
                  }

                  //获取目标文件
                  var file = e.target.files || e.dataTransfer.files;
                  //如果目标文件存在
                  if (file) {
                    //定义一个文件阅读器
                    var reader = new FileReader();
                    //文件装载后将其显示在图片预览里
                    reader.onload = function () {
                      $("#img_preview").attr("src", this.result);
                    }
                    //装载文件
                    reader.readAsDataURL(file[0]);
                  }
                });
      

    </script>

@stop