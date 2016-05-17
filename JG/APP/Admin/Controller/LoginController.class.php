<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	//登入首页
	public function index(){

		//分配变量
		$this->assign('title','极果-后台登入');
		
		//解析模板
		$this->display();
	}

	//登入验证
	public function login(){
		// var_dump($_POST);

		$user = M('user');

		//接收数据
		$email = I('post.email');
		$pwd = md5(I('post.pwd'));

		//查询
		$info = $user->where('email = "'.$email.'" and pwd = "'.$pwd.'" and isadmin > 0')->find();
		// echo $user->_sql();die; //查看SQL语句
		// var_dump($info);
		//检测用户是否存在
		if(!empty($info)){
			session_start();
			$_SESSION['userid'] = $info['id'];	//SESSION两种存方法
			$_SESSION['tx'] = $info['tx'];
			session('username',$info['username']);	//SESSION两种存方法
			if ($info['isadmin']==99) {
				$info['isadmin']='超级管理员';
			}else{
				$info['isadmin']='管理员';
			}
			session('isadmin',$info['isadmin']);
			$this->success('登录成功',U('Admin/Index/index'),3);
		}else{
			$this->error('登录失败','',3);
		}
	}

	//退出处理
	public function logout(){
		session_destroy();
		$this->success('退出成功',U('Admin/Login/index'),3);
		// redirect(U('Admin/Login/index'), 3, '页面跳转中...');
	}
}
?>