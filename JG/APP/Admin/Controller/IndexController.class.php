<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){

    	//分配变量
    	$this->assign('title','极果-后台管理');
    	$this->assign('id',$_SESSION['userid']);

    	//解析模版
    	$this->display();
    }
}
?>