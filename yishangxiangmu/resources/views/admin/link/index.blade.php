@extends('layout.admins')
@section('title',$title)
@section('content')
<div class="col-xs-12">
          <div class="box">
            <form action="/admin/link" method="get">
              <div class="box-header">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        每页
                        <select size="1" name="snum" aria-controls="DataTables_Table_1">
                            <option value="10">
                                10
                            </option>
                            <option value="20">
                                20
                            </option>
                            <option value="35">
                                35
                            </option>
                            <option value="50">
                                50
                            </option>
                        </select>
                        条
                    </label>
                </div>

                <div class="box-tools">

                  <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        站点名称:
                        <input type="text" aria-controls="DataTables_Table_1" name="site" value="">
                    </label>
                 <button class="btn btn-info">搜索</button>   
                </div>
                </div>
              </div>
            </form>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr style="color: #00c;font-size: 15px;">
                  <!-- <th></th> -->
                  <th style="display: none">ID</th>
                  <th>站点LoGo</th>
                  <th>站点名称</th>
                  <th>站点链接</th>
                  <th>操作</th>
                </tr>
               @foreach($res as $v)
                <tr>
                	<td style="width: 25%"><img src="{{$v->imgsrc}}" style="width: 25%"></td>
                	<td>{{$v->site}}</td>
                	<td>{{$v->link}}</td>
                  <td>
                  	<a href="/admin/link/{{$v->id}}" class="btn btn-primary" title="编辑">编辑</a>
                    <form action="/admin/link/{{$v->id}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class='btn btn-danger'  style="text-decoration:none"><span class="layui-icon">删除</span></button>

                    </form>
                  </td>
                </tr>
               @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
             
              </ul>
        </div>
@stop

@section('js')

@stop
