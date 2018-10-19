@extends('layout.homes')

@section('content')
	<style>
		.cart-empty{
			height: 98px;
		    padding: 80px 0 120px;
		    color: #333;

		}

		.cart-empty .message{
			height: 98px;
		    padding-left: 341px;
		    /*background: url(./no-login-icon.png) 250px 22px no-repeat;*/
		}

		.cart-empty .message .txt {
		    font-size: 14px;
		}
		.cart-empty .message li {
		    line-height: 38px;
		}

		ol, ul {
		    list-style: outside none none;
		}

		.ftx-05, .ftx05 {
			color: #005ea7;
		}
		
		a {
		    color: #666;
		    text-decoration: none;
		    margin:0px;
		    padding:0px;
		    font-size:14px;
		}
		
	</style>

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></a></li>
		</ul>
		
		<div class="row">
			<!--Middle Part Start-->
			<div id="content" class="col-sm-9">
				<div class="cart-empty">
				    <div class="message">
				        <ul>
				            <li class="txt">
				                订单空空的哦~，赶快去去看看心仪的商品吧~
				            </li>
				            <li class="mt10">
				                <a href="/" class="ftx-05">
				                    去购物&gt;
				                </a>
				            </li>
				            
				        </ul>
				    </div>
				</div>
			</div>
			<!--Middle Part End-->
			<!--Right Part Start -->
			<aside class="col-sm-3 hidden-xs content-aside col-md-3" id="column-right">
				<h2 class="subtitle"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">帐户</font></font></h2>
<div class="list-group">
	<ul class="list-item">
		<li><a href="login.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">登录</font></font></a>
		</li>
		<li><a href="register.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">寄存器</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">忘记密码</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我的帐户</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">地址簿</font></font></a>
		</li>
		<li><a href="wishlist.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">愿望清单</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">订单历史</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下载</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">奖励分数</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">返回</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">交易</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">通讯</font></font></a>
		</li>
		<li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">经常性付款</font></font></a>
		</li>
	</ul>
</div>			</aside>
			<!--Right Part End -->
		</div>
	</div>
	<!-- //Main Container -->
@stop

@section('js')
	<script type="text/javascript">
		$('body').removeClass('common-home res layout-1')
		$('body').addClass('res layout-1 loaded')
	</script>
@stop