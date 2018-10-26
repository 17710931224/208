@extends ('admin.layouts.master')

@section ('main')
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">
	      <i class="fa fa-list"></i>
	      客户组清单
	    </h3>
	  </div>
	  <div class="panel-body">
	    <form action="@if (count($results) !== 0) /admin/customerGroup/{{$results[0]->customer_group_id}} @endif" enctype="multipart/form-data" id="form-customer-group" method="post">
	      <div class="table-responsive">
	      	
	        <table class="table table-bordered table-hover">
	          <thead>
	          	<tr>
        			<td colspan="9">
        				<a href="/admin/customerGroup/create?user_token=" class="btn btn-primary"><i class="fa fa-plus-square"></i> 新增客户组</a> &emsp;
        			</td>
        		</tr>
	            <tr>
	              <td class="text-center" style="width: 1px;"><input onclick="$(&apos;input[name*=\&apos;selected\&apos;]&apos;).prop(&apos;checked&apos;, this.checked);" type="checkbox"/></td>
	              <td class="text-left">客户组名称</td>
	              <td class="text-right">排序</td>
	              <td class="text-right">操作</td>
	            </tr>
	          </thead>
	          @if (count($results) !== 0) 
	          <tbody>
		          	@foreach($results as $k => $v)
		            <tr>
		              <td class="text-center"><input name="selected[]" type="checkbox" value="1"/></td>
		              <td class="text-left">
		                {{$v->CustomerGroupDescription['name']}}
		              </td>
		              <td class="text-right">{{$v->sort_order}}</td>
		              <td class="text-right">
		                <a class="btn btn-primary" data-original-title="Edit" data-toggle="tooltip" href="/admin/customerGroup/{{$v->customer_group_id}}/edit" title=""><i class="fa fa-pencil"></i></a>
					  	{{csrf_field()}}
				        {{ method_field('DELETE') }}
				        <form action="/admin/customerGroup/{{$results[0]->customer_group_id}}" method='post' style='display:inline'>
				        	<button data-toggle="tooltip" data-original-title="Edit" title="" class="btn btn-danger" onclick="confirm('Are you sure?') ? $('#form-customer-group').submit() : false;" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
				        </form>
		              </td>
		            </tr>
		            @endforeach
	          </tbody>
	          @else
	          <tbody>
		      	<tr>
		      		<td colspan="4" align="center"><p>Empty set. </p></td>
		      	</tr>
		      </tbody>
		      @endif
	        </table>
	       
	      </div>
	    </form>
	    <div class="row">
	      <div class="col-sm-6 text-left"></div>
	      <div class="col-sm-6 text-right">Showing 1 to 1 of 1 (1 Pages)</div>
	    </div>
	  </div>
	</div>
@endsection