@section('sidebar')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" style="width: 299px; height: 65px;">
        <div class="pull-left image">
          <img src="{{$avatar}}" style="width: 45px; height: 45px;" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{$firstname}} {{$lastname}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="https://www.google.com" method="get" class="sidebar-form">
        <div class="input-group" style="padding: 0px;">
          <span class="col-lg-1 col-md-1 col-sm-1" style="text-align: left; line-height: 35px">
              <i class="fa fa-google"></i>
          </span>
          <input type="text" name="q" style="width: 80%" class="form-control" placeholder="Google Search">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
    		<li class="active">
    			<a href="/admin">
    				<i class="fa fa-dashboard"></i>
    				<span>仪表板</span>
    			</a>
    		</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>使用者模组</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/user/index"> - 使用者管理</a></li>
            <li><a href="/admin/usergroups/index"> - 群组及权限管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-address-book"></i> <span>客户管理模组</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin/customer"> - 客户管理</a></li>
            <li><a href="/admin/customerGroup"> - 客户组管理</a></li>
          </ul>
        </li>
    		<li class="treeview">
          <a href="#"><i class="fa fa-tags"></i> <span>类别模组</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"> - 新增</a></li>
            <li><a href="#"> - 管理</a></li>
          </ul>
        </li>
  		  <li class="treeview">
          <a href="#"><i class="fa fa-shopping-bag"></i> <span>产品模组</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"> - 新增</a></li>
            <li><a href="#"> - 管理</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-ol"></i>
            <span>订单模组</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"> - 管理</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
      			<i class="fa fa-question-circle"></i>
      			<span>关于我们</span>
      		</a>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
@show