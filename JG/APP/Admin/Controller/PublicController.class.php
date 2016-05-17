<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController {

	public function yzm(){
		$Verify = new \Think\Verify();
		$Verify->entry();
	}
}