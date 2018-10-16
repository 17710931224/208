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
            <form class="form-horizontal" action='/admin/goods' method='post' enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类名</font></font></label>
                  <div class="col-sm-10">
                  <select class="col-sm-2 control-label" name='cate_id'>

                    <option value='0'>请选择</option>

                            @foreach($rs as $k => $v)
                            <option value='{{$v->cid}}'>{{$v->cname}}</option>
                            @endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品名</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="prod_name">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商标</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="brand" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="price" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">颜色分类</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="color" placeholder="蓝色,红色,绿色" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尺寸</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="size" >
                  </div>
                </div>

                
                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="availability" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">创建时间</font></font></label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="" name="created_at" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品图片</font></font></label>
                  
                  <div class="col-sm-8">
                  <div class="mws-form-item">
                        <div style="position: relative;" class="fileinput-holder">

                            <input id="file" name="pic[]" type="file" multiple style="width:900px;">
                        </div>
                    </div>
                    </div>
                  </div>
               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品详情</font></font></label>
                  <div class="col-sm-10">
                  <script id="editor" name = "description" type="text/plain" style="width:800px;height:300px;"></script>
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></label>
                    <div class="col-sm-10">
                        <div class="radio">
                          <label>
                            <input type="radio" name="status"  value="1" checked><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            上架
                          </font></font></label>
                          <label>
                            <input type="radio" name="status"  value="0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            下架
                          </font></font></label>
                        </div>
                      
                    </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="mws-button-row">
                <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="btn btn-primary" lay-filter="add" lay-submit="">
                        {{csrf_field()}}
                        新增商品
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

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    setTimeout(function(){

        $('.mws-form-message').fadeOut(2000);

    },5000)

    
</script>

@stop