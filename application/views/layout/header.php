<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content=""/>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css'); ?>" type="text/css" media="screen,print" />
		<link rel="stylesheet" href="<?php echo base_url('/css/common.css'); ?>" type="text/css" media="screen,print" />
		<script src="<?php echo base_url('/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>
	</head>
	<body>

		<div>
			<nav class="navbar navbar-default navbar-static-top" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">阅西山の良民们</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav  navbar-left">
						<li<?php if('index' == $this->router->method): ?> class="active"<?php endif; ?>><a href="<?php echo base_url(); ?>">首页</a></li>
						<li<?php if('launch' == $this->router->method): ?> class="active"<?php endif; ?>><a href="<?php echo base_url('/user/launch'); ?>">近期扯证</a></li>
						<li<?php if('newlaunch' == $this->router->method): ?> class="active"<?php endif; ?>><a href="<?php echo base_url('/user/newlaunch'); ?>">发起扯证</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">罗亮<b class="caret"></b></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?php echo base_url('/user/profiled'); ?>">个人资料</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url('/logout'); ?>">退出</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>