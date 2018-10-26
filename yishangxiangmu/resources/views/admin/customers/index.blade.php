@extends ('admin.layouts.master')

@section ('main')
<style type="text/css">
	.table a.asc:after {
	    content: " \f106";
	    font-family: FontAwesome;
	}
	.table a.desc:after {
	    content: " \f107";
	    font-family: FontAwesome;
	}
	.pagination {
		margin: 0px;
		float: right !important;
	}
	.pagination > li > a, .pagination > li > span {
	  padding: 5px 10px;
	  font-size: 12px;
	  line-height: 1.5;
	}
	.pagination > li:first-child > a,
	.pagination > li:first-child > span {
	  border-top-left-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	.pagination > li:last-child > a,
	.pagination > li:last-child > span {
	  border-top-right-radius: 3px;
	  border-bottom-right-radius: 3px;
	}
</style>
<div class="col-md-3 col-md-push-9 col-sm-12  hidden-sm hidden-xs">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">
        <i class="fa fa-filter"></i>
        筛选
      </h3>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label class="control-label" for="input-name">客户名</label>
        <input autocomplete="off" class="form-control" id="input-name" name="filter_name" placeholder="客户名" type="text" value="<?= !empty($_GET['filter_name'])?$_GET['filter_name']:'' ?>"/>
        <ul class="dropdown-menu"></ul>
      </div>
      <div class="form-group">
        <label class="control-label" for="input-email">电子邮件</label>
        <input autocomplete="off" class="form-control" id="input-email" name="filter_email" placeholder="电子邮箱地址" type="text" value="<?= !empty($_GET['filter_email'])?$_GET['filter_email']:'' ?>"/>
        <ul class="dropdown-menu"></ul>
      </div>
      <div class="form-group">
        <label class="control-label" for="input-customer-group">客户组</label>
        <select class="form-control" id="input-customer-group" name="filter_customer_group_id">
          <option value="">请选择</option>
           @foreach($group_res as $k => $v)
			<option <?php if(!empty($_GET['filter_customer_group_id'])):?> selected="selected" <?php endif; ?> value="{{$v->CustomerGroupDescription->customer_group_id}}">{{$v->CustomerGroupDescription->name}}</option>
           @endforeach
        </select>
      </div>
      <!-- filter_customer_group_id -->
      <div class="form-group">
        <label class="control-label" for="input-status">状态</label>
        <select class="form-control" id="input-status" name="filter_status">
          <option value="">请选择</option>
          <option <?php if(!empty($_GET['filter_status']) && $_GET['filter_status'] == "1"):?>selected="selected"<?php endif; ?> value="1">启用</option>
          <option <?php if(!empty($_GET['filter_status']) && $_GET['filter_status'] == "2"):?>selected="selected"<?php endif; ?> value="2">禁用</option>
        </select>
      </div>
      <div class="form-group">
        <label class="control-label" for="input-ip">IP地址</label>
        <input class="form-control" id="input-ip" name="filter_ip" placeholder="IP地址" type="text" value="<?= !empty($_GET['filter_ip'])?$_GET['filter_ip']:'' ?>"/>
      </div>
      <div class="form-group">
        <label class="control-label" for="input-date-added">创建于</label>
        <div class="input-group date">	
          <input class="form-control" name="filter_date_added" data-date-format="YYYY-MM-DD" id="input-date-added" placeholder="{{@date('Y-m-d')}}" type="text" value="<?= !empty($_GET['filter_date_added'])?$_GET['filter_date_added']:'' ?>">

          <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button></span>
        </div>
      </div>
      <div class="form-group text-right">
        <button class="btn btn-default" id="button-filter" type="button">
          <i class="fa fa-filter"></i>
          筛选
        </button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-9 col-md-pull-3 col-sm-12">
    <div class="panel">
        <div class="box-header panel-header">
        	<h3 class="box-title"><i class="fa fa-list"></i> 账户基本资料 - 详情</h3>
            <div class="box-tools">
                <div class="input-group input-group-sm">
	                {{$results->appends($request->all())->links()}}
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body panel-body">
        	<div class="table-responsive">
        		<meta name="csrf-token" content="{{ csrf_token() }}">

      		<form action="/admin/customer?user_token=" method="post" enctype="multipart/form-data" id="form-customer">
	        	<table class="table table-bordered table-hover" style="margin-bottom: 260px;">
		        	<thead>
		        		<tr>
		        			<td colspan="9">
		        				<a href="/admin/customer/create?user_token=" class="btn btn-primary"><i class="fa fa-plus-square"></i> 新增账户</a> &emsp;
		        			</td>
		        		</tr>
		        		
		        		<tr>
		        			<th><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
		                    <th>
		                    	<a id="cus_name" class="<?php if (!isset($_GET['sort']) || !isset($_GET['name'] )) { echo 'asc';} else { echo ($_GET['name']!='cus_name')?'':strtolower($_GET['sort']);} ?>"  href="?user_token=&name=cus_name&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">客户名
		                    </th>
		                    <th>
		                    	<a id="email" class="<?php if(!empty($_GET['name']) ){ echo ($_GET['name']!="email")?'':strtolower($_GET['sort']);}?>" href="?user_token=&name=email&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">电子邮箱地址
		                    	</a>
		                    </th>
		                    <th>
		                    	<a id="cus_group" class="<?php if(!empty($_GET['name']) ){ echo ($_GET['name']!="cus_group")?'':strtolower($_GET['sort']);}?>" href="?user_token=&name=cus_group&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">客户组
			                    </a>
			                </th>
		                    <th>
		                    	<a id="status" class="<?php if(!empty($_GET['name']) ){ echo ($_GET['name']!="status")?'':strtolower($_GET['sort']);}?>" href="?user_token=&name=status&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">状态
		                    	</a>
		                    </th>
		                    <th>
		                    	<a id="ip" class="<?php if(!empty($_GET['name']) ){ echo ($_GET['name']!="ip")?'':strtolower($_GET['sort']);}?>" href="?user_token=&name=ip&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">IP地址
		                    	</a>
		                    </th>
		                    <th>
		                    	<a id="addTime" class="<?php if(!empty($_GET['name']) ){ echo ($_GET['name']!="addTime")?'':strtolower($_GET['sort']);}?>" href="?user_token=&name=addTime&sort=<?php if(!empty($_GET['sort']) && $_GET['sort']=='DESC'):?>ASC<?php else: ?>DESC<?php endif; ?>">创建于
		                    	</a>
		                    </th>
		                    <th>操作</th>
		                </tr>
		        	</thead>
	            <tbody>
              @if (count($results) != 0)
  	            @foreach ($results as $value)
  	            	<tr>
  							    <td class="text-center"><input name="selected[]" type="checkbox" value="{{$value->customer_id}}"/></td>
  							    <td class="text-left fullname">{{$value->firstname}} {{$value->lastname}}</td>
  							    <td class="text-left email">{{$value->email}}</td>
  							    <td class="text-left groupName">Default</td>
  							    <td class="text-left status">{{$value->status?'启用':'禁用'}}</td>
  							    <td class="text-left ip">{{$value->ip}}</td>
  							    <td class="text-left date">{{@date('m/d/Y', strtotime($value->created_at))}}</td>
  							    <td class="text-right">
  								    <div class="btn-group" style="min-width: 65px;">
  								        <a class="btn btn-primary" data-original-title="编辑" data-toggle="tooltip" href="/admin/customer/{{$value->customer_id}}/edit?user_token=" title=""><i class="fa fa-pencil"></i></a>
  								        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span></button>
  								        <ul class="dropdown-menu dropdown-menu-right">
  								            <li class="dropdown-header">帐户选项</li>
  								            <li class="disabled">
  								                <a>
  								                    <i class="fa fa-unlock"></i>
  								                    解锁
  								                </a>
  								            </li>
  								            <li>
  								                <a href="javascript:void(0)" class="remove"><i class="fa fa-trash"></i>删除</a>
  								            </li>
                              <script type="text/javascript">
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });
                              
                                $('.remove').click(function (){
                                  var checked = $(this).parents('tr').find('input[type="checkbox"]')[0].checked;
                                  if(!checked) return;
                                  var warn = confirm('你确认删除吗？');
                                  if (!warn) return;
                                  var trs = $(this);
                                  var id = $(this).parents('tr').find('input[type="checkbox"]').attr('value');
                                  $.post('/admin/customer/'+id, {"_token":"{{csrf_token()}}","_method":"DELETE",id:id}, function(data){
                                    if(data == '1'){
                                      trs.parents('tr').remove();
                                    }
                                  });
                                });
                              </script>
  								            <li class="divider" role="separator"></li>
  								            <li class="dropdown-header">登录帐户</li>
  								            <li>
  								                <a href="?user_token=&customer_id={{$value->customer_id}}&store_id={{$value->store_id}}" target="_blank">
  								                    <i class="fa fa-lock"></i>
  								                    帐户管理
  								                </a>
  								            </li>
  								        </ul>
  								    </div>
  								  </td>
  					    	</tr>
                  
  					    @endforeach
              @else
              <tr>
                  <td class="text-center" colspan="8">No results!</td>
              </tr>
              @endif
	            </tbody>
		    	  </table>
			    </form>
        	</div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer panel-footer">
	    	<div class="col-sm-6 text-left">
	    		<div class="input-group input-group-sm">
            <div class="input-group input-group-sm">
              {{$results->appends($request->all())->links()}}
            </div>
          </div>
	    	</div>
	    	<div class="col-sm-6 text-right">展示的页码：Page {{$currentPage}} of {{$lastPage}}&emsp;已找到{{$total}} 条记录</div>
	    </div>
	    <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</div>
<script type="text/javascript">
  $('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = $(this),
      m = $(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    $(this).css({'padding-bottom': '', 'overflow': ''});
  });
  </script>
  <script type="text/javascript">
  $('#button-filter').on('click', function() {
    url = '/admin/customer?user_token=VtAnMxbpj4hQaQwLvFNHPf1vsYKkeNfQ';
    var filter_name = $('input[name="filter_name"]').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_email = $('input[name="filter_email"]').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }
    var filter_customer_group_id = $('select[name="filter_customer_group_id"]').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = $('select[name="filter_status"]').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = $('input[name="filter_ip"]').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = $('input[name="filter_date_added"]').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  </script>
  <script type="text/javascript">
  $('input[name="filter_name"]').autocomplete({
    'source': function(request, response) {
      $.ajax({
        url: '/admin/autocomplete?filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response($.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      $('input[name="filter_name"]').val(item['label']);
    }
  });
  $('input[name="filter_email"]').autocomplete({
    'source': function(request, response) {
      $.ajax({
        url: '/admin/autocomplete?filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response($.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      $('input[name="filter_email"]').val(item['label']);
    }
  });
  </script>
  <script type="text/javascript">
  $('div.date').datetimepicker({
    language: 'en-gb',
    pickTime: false
  });
  </script>
@endsection