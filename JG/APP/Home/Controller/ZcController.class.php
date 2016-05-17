<?php
namespace Home\Controller;
use Think\Controller;
class ZcController extends Controller {
    public function index(){

    	//分配变量
    	$this->assign('title','极果-全球酷玩试用导购平台');

    	//解析模版
    	$this->display();
    }
}
?>