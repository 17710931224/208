@extends('layout.admins')



@section('title',$title)

@section('content')
   
    <div class="col-md-12">

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$title}}</font></font></h3>
            </div>

        <div class="mws-panel-body no-padding">

       
            

         @if (count($errors) > 0)
        <div class="callout callout-warning">
               
                @foreach ($errors->all() as $error)
                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$error}}</font></font></p>
                @endforeach
              </div>
        @endif

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action='/admin/goods/{{$rs->prod_id}}' method='post' enctype='multipart/form-data'>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">分类名</font></font></label>
                  <div class="col-sm-10">
                  <select class="col-sm-2 control-label" name='cate_id'>

                    <option ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">请选择</font></font></option>
                    		@foreach($info as $k => $v)
                            @if($v->cid  == $rs->cate_id)
    						<option value='{{$v->cid}}' selected>{{$v->cname}}</option>
                            @endif

							@endforeach
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品名</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="prod_name" value="{{$rs->prod_name}}">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商标</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="brand" 
                    value="{{$rs->brand}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">单价</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="price" value="{{$rs->price}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">颜色</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="color" value="{{$rs->color}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尺寸</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" name="size" value="{{$rs->size}}" >
                  </div>
                </div>

                
                
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">库存</font></font></label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="availability" value="{{$rs->availability}}">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">创建时间</font></font></label>

                  <div class="col-sm-2">
                    <input type="date" class="form-control" id="" name="created_at" value="{{$rs->created_at}}" >
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品图片</font></font></label>
                       @foreach($smgpics as $k => $v)

                            <img src="{{$v->pic}}" alt="" gid='{{$v->prod_id}}'  class='dimgs' width='150px'>
                        @endforeach

                  
                  <div class="mws-form-item">
                  <div class="col-sm-2"></div>

                        <div class="col-sm-8">

                            <div style="position: relative;" class="fileinput-holder">

                                <input type="file" name='pic[]' multiple value="" >
                            </div>
                        </div>
                    </div>
                  </div>
                
               

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">商品详情</font></font></label>
                  <div class="col-sm-10">
                  <script id="editor" name = "description"  type="text/plain" style="width:800px;height:300px;">{!!$rs->description!!}</script>
                  </div>
                </div> 

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">状态</font></font></label>
                    <div class="col-sm-10">
                        <div class="radio">
                          <label>
                            <input type="radio" name="status"  value="1" @if($rs->status =='1') checked='checked' @endif><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            上架
                          </font></font></label>
                          <label>
                            <input type="radio" name="status"  value="0" @if($rs->status =='0') checked='checked' @endif><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            下架
                          </font></font></label>
                        </div>
                      
                    </div>
                </div>
                     
                    
                
                    
          

                </div>
              <!-- /.box-body -->

                <div class="mws-button-row">

                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    
                    <input type="submit" class="btn btn-primary" value="确认修改">
                    <a class="btn btn-primary"  href="/admin/goods"  role="button">返回</a>
                </div>
            
              <!-- /.box-footer -->
            </form>
        </div>
    </form>
    </div>
   

    </div>
    </div>

@stop

@section('js')
<script>

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');

    $('.callout').delay(3000).fadeOut(2000);

                                
    

            $('.dimgs').click(function(){
                        //获取id
                        // alert($);
                        var gid = $(this).attr('gid');
                        
                        var igs = $(this);

                        $.get('/admin/goods/'+gid,{},function(data){
                        	
                           if(data == '1'){
                                
                                igs.remove();
                            }
                        })
                        

                    })

                  
</script> 

@stop