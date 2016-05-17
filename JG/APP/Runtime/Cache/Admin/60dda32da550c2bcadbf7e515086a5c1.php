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

			

    	<!-- main-page -->
		<div class="main-page">
    		<!-- forms -->
			<div class="forms">

				<h3 class="title1">用户列表:</h3>

			    <div class="row">
			      <div class="col-lg-12">
			        <div class="panel panel-default">
			          <div class="panel-heading">
			        	欢迎来到极果后台管理
			          </div>
			          <!-- /.panel-heading -->
			          <div class="panel-body">
			            <div class="dataTable_wrapper">
			              <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			                <div class="row">

							  <form action="<?php echo U('Admin/User/index');?>" method="get">
								<div class="col-sm-6">
								  <div class="dataTables_length" id="dataTables-example_length">
								    <label>每页显示 
								      <select name="num" aria-controls="dataTables-example" class="form-control input-sm">
								        <option <?php echo $_GET['num'] == 3 ? 'selected' : '' ?> value="3">3</option>
								        <option <?php echo $_GET['num'] == 5 ? 'selected' : '' ?> value="5">5</option>
								        <option <?php echo $_GET['num'] == 10 ? 'selected' : '' ?> value="10">10</option>
								        <option <?php echo $_GET['num'] == 20 ? 'selected' : '' ?> value="20">20</option>
								      </select>
								      条
								    </label>
								  </div>
								</div>
								<div class="col-sm-6">
								  <div id="dataTables-example_filter" class="dataTables_filter">
									<label>用户名: <input value="<?php echo ($_GET['keyword']); ?>" name="keyword" type="search" class="form-control input-sm" aria-controls="dataTables-example"></label>
									<button type="submit" class="btn btn-info">查询</button>
								  </div>
								</div>
							  </form>

			                </div>
			                <div class="row">
			                  <div class="col-sm-12">
			                  <!-- 用户列表遍历 -->
			                    <table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
			                      <thead>
			                        <tr role="row">
			                          <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 30px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
			                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 129px;" aria-label="Browser: activate to sort column ascending">头像</th>
			                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 129px;" aria-label="Browser: activate to sort column ascending">用户名</th>
			                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">email</th>
			                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 98px;" aria-label="Engine version: activate to sort column ascending">是否管理员</th>
			                          <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 70px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
			                        </tr>
			                      </thead>
			                      <tbody>
			                        <?php if(is_array($users)): foreach($users as $k=>$vo): ?><tr class="gradeA odd" role="row">
			                            <td class="sorting_1 sid"><?php echo ($vo["id"]); ?></td>
			                            <td class="sorting_1"><img src="<?php echo ($vo["tx"]); ?>" width="50px"></td>
			                            <td><?php echo ($vo["username"]); ?></td>
			                            <td><?php echo ($vo["email"]); ?></td>
			                            <td class="center">
			                            	<?php if($vo['isadmin'] == 0): ?>否
			                                <?php elseif($vo['isadmin'] == 1): ?>
			                                	是
			                                <?php else: ?> 
			                                	超级管理员<?php endif; ?>
			                            </td>
			                            <td class="center">
			                              <button class="btn btn-danger btn-del  btn-circle" type="button"><span class="glyphicon glyphicon-trash"></span></button>
			                              <a href="<?php echo U('Admin/User/save',array('id'=>$vo['id']));?>" class="btn btn-success btn-circle" type="button"><span class="glyphicon glyphicon-pencil"></span></a>
			                            </td>
			                          </tr><?php endforeach; endif; ?>
			                      </tbody>
			                    </table>
			                  
			                  </div>
			                </div>
								
							<!-- row -->
							<div class="row">
								<div class="col-sm-6">
							    	<div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">显示 1 到 <?php echo ($num); ?> 条 共 <font color="red" size="5"><?php echo ($count); ?></font> 条信息</div>
								</div>

							  <style type="text/css">
			                      #pages a,#pages span{ background-color: #fff;
			                              border: 1px solid #ddd;
			                              color: #337ab7;
			                              float: left;
			                              line-height: 1.42857;
			                              margin-left: -1px;
			                              padding: 6px 12px;
			                              position: relative;
			                              text-decoration: none;}
			                      #pages span {
			                            background-color: #337ab7;
			                            border-color: #337ab7;
			                            color: #fff;
			                            cursor: default;
			                            z-index: 2;
			                            }
							  </style>
							 
								<div class="col-sm-6">
									<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
										<div id="pages"><?php echo ($pages); ?></div>
									</div>
								</div>
							</div>
							<!-- row -->

			              </div>
			            </div>
			            <!-- /.table-responsive -->

			          </div>
			          <!-- /.panel-body -->
			        </div>
			        <!-- /.panel -->
			      </div>
			      <!-- /.col-lg-12 -->
			    </div>

			</div>
			<!-- forms -->
		</div>
		<!-- main-page -->

		<script type="text/javascript">
			//绑定单击事件
			$('.btn-del').click(function(){
			  // alert('222');
			  var r=confirm("确认删除?")
			  if (r==true){
			  	//获取id
			  	var id = $(this).parents('tr').find('.sid').html();
			  	var url = "<?php echo U('Admin/User/ajaxdel');?>";
			  	// alert(url);
			  	var btn = $(this);
  
			  	//ajax
			  	$.get(url,{id:id},function(data){
			  	  // console.log(data);
			  	  if(data == 1){
			  	  	btn.parents('tr').remove();
			  	  }else{
			  	  	alert('失败');
			  	  }
			  	})
			  }else{
			    return false;
			  }
			})
		</script>

    
					
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