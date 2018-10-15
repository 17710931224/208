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
            <form action="/admin/category" method='get'>
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_length" id="example1_length">
                        <label>
                    显示
                    <select name="num" size="1" aria-controls="DataTables_Table_1">
                        <option value="10" @if($request->num == 10)  selected="selected"  @endif >
                            10
                        </option>
                        <option value="25" @if($request->num == 25)  selected="selected" @endif>
                            25
                        </option>
                        <option value="30" @if($request->num == 30)  selected="selected"  @endif>
                            30
                        </option>
                       
                    </select>
                    条数据
                </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                        <label>
                    分类名:
                    <input type="text" name='cname' value='{{$request->cname}}' aria-controls="DataTables_Table_1">
                    
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
                                style="width: 217.8px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            ID
                                        </font>
                                    </font>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            分类名
                                        </font>
                                    </font>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                style="width: 237px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            父级名
                                        </font>
                                    </font>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Engine version: activate to sort column ascending"
                                style="width: 187.4px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            路径
                                        </font>
                                    </font>
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 134.8px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            操作
                                        </font>
                                    </font>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rs as $k => $v)
                            <tr role="row" class="odd" "@if($k % 2 == 0)odd @else even @endif">
                                <td class="sorting_1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->cid}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->cname}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{cname($v->pid)}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->path}}
                                        </font>
                                    </font>
                                </td>
                                <td class=" ">
                            <a class='btn btn-primary' href="/admin/category/{{$v->cid}}/edit">修改</a>

                            <form action="/admin/category/{{$v->cid}}" method='post' style='display:inline'>
                                
                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class='btn btn-danger' onclick="return confirm('是否确定删除');">删除</button>

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
                                显示57个参赛作品中的1到10个
                            </font>
                        </font>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        {{$rs->appends($request->all())->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>




@stop

@section('js')
<script>
  
</script>

@stop