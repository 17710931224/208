@section('header')
<header class="main-header">
  <a class="logo" href="/admin" style="font-family: Microsoft YaHei">
    <span class="logo-mini"><b>后台</b></span>
    <span class="logo-lg"><b>易商控制面板</b></span>
  </a>
  <span></span>
  <a></a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a class="sidebar-toggle" data-toggle="push-menu" href="#" role="button"><span class="sr-only">Toggle navigation</span></a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <div class="pull-left"><img alt="User Image" class="img-circle" src="/dist/img/user2-160x160.jpg"/></div>
                    <h4>
                      Support Team
                      <small>
                        <i class="fa fa-clock-o"></i>
                        5 mins
                      </small>
                    </h4>
                    <p>Why not buy a new awesome theme?</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <li class="dropdown notifications-menu">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i>
                    5 new members joined today
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <li class="dropdown tasks-menu">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li>
              <ul class="menu">
                <li>
                  <a href="#">
                    <h3>
                      Design some buttons
                      <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs"><div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-aqua" role="progressbar" style="width: 20%"><span class="sr-only">20% Complete</span></div></div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all tasks</a></li>
          </ul>
        </li>
        <li class="dropdown user user-menu">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <img alt="User Image" class="user-image" src="{{$avatar}}"/>
            <span class="hidden-xs">{{$firstname}} {{$lastname}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img alt="User Image" class="img-circle" src="{{$avatar}}"/>
              <p>
                {{$firstname}} {{$lastname}}
                <small>Member since {{@date('M',@strtotime($created_at))}}. {{@date('Y',@strtotime($created_at))}}</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left"><a class="btn btn-default btn-flat" href="#">个人资料</a></div>
              <div class="pull-right"><a class="btn btn-default btn-flat" href="#">退出登录</a></div>
              <div class="pull-right"><a class="btn btn-default btn-flat" href="/admin/lockscreen/{{$user_id}}">锁屏</a></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
@show