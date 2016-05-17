<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($title); ?></title>
	<link rel="shortcut icon" href="/Public/Images/biao.png">
	<link href="/Public/Admin/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="login">
		<div class="box png">
			<div class="logo png"></div>
			<div class="input">
				<form role="form" method="post" action="<?php echo U('Admin/Login/login');?>">
				<div class="log">
					<div class="name">
						<label>邮箱帐号</label><input type="text" class="text" id="value_1" placeholder="邮箱帐号" name="email" tabindex="1">
					</div>
					<div class="pwd">
						<label>密　码</label><input type="password" class="text" id="value_2" placeholder="密码" name="pwd" tabindex="2">
						<input type="submit" class="submit" tabindex="3" value="登录">
						<div class="check"></div>
					</div>
					<div class="tip"></div>
				</div>
				</form>
			</div>
		</div>
		<div class="air-balloon ab-1 png"></div>
		<div class="air-balloon ab-2 png"></div>
		<div class="footer"></div>
	</div>

	<script type="text/javascript" src="/Public/Admin/js/jQuery.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/fun.base.js"></script>
	<script type="text/javascript" src="/Public/Admin/js/script.js"></script>
</body>
</html>