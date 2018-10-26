@section('top')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{isset($title)?$title:'易商后台管理'}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
   <!-- Favicon
  ============================================ -->
  <link rel="shortcut icon" type="image/png" href="/ico/favicon-16x16.png"/>

  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-red-light for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script type="text/javascript" src="/js/jquery/jquery-2.1.1.min.js"></script>
  <script src="/js/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>
  <script src="/js/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>
  <script src="/js/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <link href="/js/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />

  <script type="text/javascript" src="/js/common.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
        href="/css/Source Sans Pro.css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-red-light                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red-light                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red-light sidebar-mini">
  
<div class="wrapper">
@show
@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 style="font-family: Microsoft YaHei">
    {{ $action }}
    <small>{{$description}}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i>主页</a></li>
    <?= isset($module)?'<li>'.$module.'</li>':''; ?>
    <li class="active">{{$action}}</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
      @yield ('main')
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include ('admin.layouts.footer')
@include ('admin.layouts.bottom')