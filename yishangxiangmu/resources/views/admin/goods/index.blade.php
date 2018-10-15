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
            <form action="/admin/goods" method='get'>
            <div class="row">
                <div class="col-sm-6">
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
                <div class="col-sm-6">
                    <div id="example1_filter" class="dataTables_filter">
                    <label>
                    商品名:
                    <input type="text" name='prod_name' value='' aria-controls="DataTables_Table_1">
                    价格:
                    <input type="text" name='price' value="" aria-controls="DataTables_Table_1">
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
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 266.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            商品名
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 106.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            分类名
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 106.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            商标
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 76.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            单价
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 166.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            颜色
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 76.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            尺寸
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 116.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            库存
                                        </font>
                                    </font>
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 126.6px;">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            创建时间
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
                                colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 234.8px;">
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
                            <tr role="row" class="odd" "@if($k % 2 == 0)odd @else even @endif" >
                                <td class="sorting_1">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->prod_id}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                           {{$v->prod_name}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{catename($v->cate_id)}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->brand}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->price}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->color}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->size}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->availability}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{$v->created_at}}
                                        </font>
                                    </font>
                                </td>
                                <td>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            {{--$v->status ? '启用' : '禁用'--}}
                           
					                            @if($v->status == 1)
					                                上架
					                            @else
					                                下架
					                            @endif
                                        </font>
                                    </font>
                                </td>


                                <td class=" ">
                            <a class='btn btn-primary' href="/admin/goods/{{$v->prod_id}}/edit">修改</a>

                            <form action="/admin/goods/{{$v->prod_id}}" method='post' style='display:inline'>
                                
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


@stop