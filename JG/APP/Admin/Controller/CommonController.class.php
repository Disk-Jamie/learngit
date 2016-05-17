<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	//功能类似构造方法,率先执行的方法
	public function _initialize(){
		//用户的登录检测
		$userid = session('userid');
		//检测
		if(empty($userid)){
			//没有登录
			$this->error('请先登录',U('Admin/Login/index'),3);
		}
	}
}
?>