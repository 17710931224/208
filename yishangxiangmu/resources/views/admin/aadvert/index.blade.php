@extends('layout.admins')

@section('title',$title)

@section('content')

   
<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    {{$title}}
                </font>
            </font>
        </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <form action="/admin/aadvert" method='get'>
            <div class="row">
                <div class="col-sm-8">
                    <div class="dataTables_length" id="example1_length">
                        <label>
                    显示
                    <select name="num" size="1" aria-controls="DataTables_Table_1">
                        
                      <option value="10" @if($request->num == 10)  selected="selected"  @endif >
                            10
                        </option>
                        <option value="20" @if($request->num == 20)  selected="selected" @endif>
                            20
                        </option>
                        <option value="30" @if($request->num == 30)  selected="selected"  @endif>
                            30
                        </option>
                    </select>
                    条数据
                </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="example1_filter" class="dataTables_filter">
                    <label>
                    图片名:
                    <input type="text" name='aname' value='' aria-controls="DataTables_Table_2">
                   
                	</label>

                    <button class='btn btn-info'>搜索</button>
                    </div>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable"
                    role="grid" aria-describedby="example1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                                style="width: 60.8px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            ID
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            广告名
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 120.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            地址
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 126.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            图片
                                        </font>
                                    </font>
                                </th>

                                

                                
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 116.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            状态
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 116.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            操作
                                        </font>
                                    </font>
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($data as $k => $v)
                        <tr role="row" class="odd" "@if($k % 2 == 0)odd @else even @endif" >
                                <td class="sorting_1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->aid}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                           {{$v->aname}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                           {{$v->aurl}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <img src="{{$v->apic}}" style ="width:200px;height:100px">
                                        </font>
                                    </font>
                                </td>

                                
                                
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{--$v->status ? '启用' : '禁用'--}}
                           
                                                @if($v->status == 1)
                                                    启用  
                                                @else
                                                    禁用
                                                @endif
                                        </font>
                                    </font>
                                </td>


                                <td class=" ">
                            <a class='btn btn-primary' href="/admin/aadvert/{{$v->aid}}/edit">修改</a>

                            <form action="/admin/aadvert/{{$v->aid}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class='btn btn-danger' onclick="member_del(this)"  style="text-decoration:none"><span class="layui-icon">删除</span></button>

                            </form>

                        </td>
                            </tr>
                        @endforeach



                    </tbody>
                    <tfoot>
                    </tfoot>
                    </table>

                    
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                页码
                            </font>
                        </font>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      {{$data->appends($request->all())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>



@stop

@section('js')


@stop 