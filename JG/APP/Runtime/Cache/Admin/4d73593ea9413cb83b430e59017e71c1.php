<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($title); ?></title>
	<link rel="shortcut icon" href="/Public/Images/biao.png">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="/Public/Admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="/Public/Admin/css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="/Public/Admin/css/fontAwesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons -->
	 <!-- js-->
	<script src="/Public/Admin/js/jquery-1.11.1.min.js"></script>
	<script src="/Public/Admin/js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='/Public/Admin/fontAwesome.css' type='text/css'>
	<!--//webfonts--> 
	<!--animate-->
	<link href="/Public/Admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="/Public/Admin/js/wow.min.js"></script>
		<script>
			 new WOW().init();
		</script>
	<!--//end-animate-->
	<!-- chart -->
	<script src="/Public/Admin/js/Chart.js"></script>
	<!-- //chart -->
	<!--Calender-->
	<link rel="/Public/Admin/stylesheet" href="css/clndr.css" type="text/css" />
	<script src="/Public/Admin/js/underscore-min.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="/Public/Admin/js/clndr.js" type="text/javascript"></script>
	<!--End Calender-->
	<!-- Metis Menu -->
	<script src="/Public/Admin/js/metisMenu.min.js"></script>
	<script src="/Public/Admin/js/custom.js"></script>
	<link href="/Public/Admin/css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<!-- main-content -->
	<div class="main-content">


		<!--left-fixed -navigation-->
		<div role="navigation" class=" sidebar">
            <div class="navbar-collapse">
				<nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
					<ul id="side-menu" class="nav in">
						<li>
							<a class="active" href=""><i class="fa fa-home nav_icon"></i>极果后台管理</a>
						</li>
						<li>
							<a href="#"><i class="fa nav_icon"><span class="glyphicon glyphicon-user"></span></i>用户管理 </span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo U('Admin/User/index');?>">用户列表</a>
								</li>
								<li>
									<a href="<?php echo U('Admin/User/add');?>">添加用户</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>

						<li class="">
							<a href="#"><i class="fa fa-book nav_icon"></i>UI Elements <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="general.html">General<span class="nav-badge-btm">08</span></a>
								</li>
								<li>
									<a href="typography.html">Typography</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->


		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="">
						<h1>极 果</h1>
						<span>JG-AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input type="search" id="input-31" placeholder="搜索" class="sb-search-input input__field--madoka">
						<label for="input-31" class="input__label">
							<svg preserveAspectRatio="none" viewBox="0 0 404 77" height="100%" width="100%" class="graphic">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>

			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new messages</h3>
									</div>
								</li>
								<li><a href="#">
								   <div class="user_img"><img alt="" src="/Public/Admin/images/1.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li class="odd"><a href="#">
									<div class="user_img"><img alt="" src="/Public/Admin/images/2.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								</a></li>
								<li><a href="#">
								   <div class="user_img"><img alt="" src="/Public/Admin/images/3.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div> 
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 3 new notification</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="user_img"><img alt="" src="/Public/Admin/images/2.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet</p>
									<p><span>1 hour ago</span></p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>
								 <li class="odd"><a href="#">
									<div class="user_img"><img alt="" src="/Public/Admin/images/1.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li><a href="#">
									<div class="user_img"><img alt="" src="/Public/Admin/images/3.png"></div>
								   <div class="notification_desc">
									<p>Lorem ipsum dolor amet </p>
									<p><span>1 hour ago</span></p>
									</div>
								   <div class="clearfix"></div>	
								 </a></li>
								 <li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
						<li class="dropdown head-dpdn">
							<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have 8 pending task</h3>
									</div>
								</li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Database update</span><span class="percentage">40%</span>
										<div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										<div style="width:40%;" class="bar yellow"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div style="width:90%;" class="bar green"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
										<div class="clearfix"></div>	
									</div>
								   <div class="progress progress-striped active">
										 <div style="width: 33%;" class="bar red"></div>
									</div>
								</a></li>
								<li><a href="#">
									<div class="task-info">
										<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
									   <div class="clearfix"></div>	
									</div>
									<div class="progress progress-striped active">
										 <div style="width: 80%;" class="bar  blue"></div>
									</div>
								</a></li>
								<li>
									<div class="notification_bottom">
										<a href="#">See all pending tasks</a>
									</div> 
								</li>
							</ul>
						</li>	
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle" href="#">
								<div class="profile_img">	
									<span class="prfil-img"><img src="<?php echo I('session.tx');?>" width="50px"> </span> 
									<div class="user-name">
										<p><?php echo I('session.username');?></p>
										<span><?php echo I('session.isadmin');?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="<?php echo U('Admin/User/save');?>"><i class="fa fa-user"></i> 个人中心</a> </li>
								<li> <a href="<?php echo U('Admin/Login/logout');?>"><i class="fa fa-sign-out"></i> 退出</a> </li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="clearfix"> </div>	
			</div>

			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->

		<div class="cal1"></div>

		<!-- main-page -->
		<div id="page-wrapper" style="min-height: 287px;">

			
        <div class="jumbotron">
            <h1>极果-后台首页</h1>
            <p>...</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    
					
		</div>
		<!-- //main-page -->

	</div>
	<!-- //main-content -->

	<!-- Classie -->
	<script src="/Public/Admin/js/classie.js"></script>
	<script>
		var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
			showLeftPush = document.getElementById( 'showLeftPush' ),
			body = document.body;
			
		showLeftPush.onclick = function() {
			classie.toggle( this, 'active' );
			classie.toggle( body, 'cbp-spmenu-push-toright' );
			classie.toggle( menuLeft, 'cbp-spmenu-open' );
			disableOther( 'showLeftPush' );
		};
		

		function disableOther( button ) {
			if( button !== 'showLeftPush' ) {
				classie.toggle( showLeftPush, 'disabled' );
			}
		}
	</script>
	<!-- //Classie -->
	<!--scrolling js-->
	<script src="/Public/Admin/js/jquery.nicescroll.js"></script>
	<script src="/Public/Admin/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="/Public/Admin/js/bootstrap.js"> </script>
</body>
</html>