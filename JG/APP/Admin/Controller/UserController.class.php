<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
	//显示用户列表
    public function index(){
        //创建对象
        $user = M('user');
   
        //查看sql语句
        // echo $user->_sql();
        // echo $user->getLastSql();

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 3;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }


        // 查询满足要求的总记录数
        $count = $user->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        //执行查询
        $users = $user->where($where)->limit($limit)->select();
        // 分页显示输出
        $pages = $Page->show();

    	//分配变量
        $this->assign('num',$num);
    	$this->assign('title','极果-用户列表');
    	$this->assign('users',$users);
    	$this->assign('pages',$pages);
        $this->assign('count',$count);

    	//解析模版
    	$this->display();
    }

    //删除用户
    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $user = M('user');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $user->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

    //显示用户的添加页面
	public function add(){

		//分配变量
		$this->assign('title','极果-用户添加');
		//解析模板
		$this->display();
	}

    //处理用户的数据添加
    public function insert(){

        //创建表对象
        $user = M('user');
        //var_dump($user);
        
        //加密密码
		$_POST['pwd'] = md5($_POST['pwd']);

        //调用函数处理图片上传
        Uploads('tx');

        //创建数据
        $user->create();
        //执行添加
       if($user->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('添加成功', U('Admin/User/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('添加失败');
       }

    }

    //用户的修改页面
    public function save(){
        // var_dump($_GET);
        //I表示获取GET或POST中的值
        $id = I('get.id');
        //创建表对象
        $user = M('user');
        //查询当前用户的数据
        $info = $user->find($id);
        // var_dump($info);die;

        //分配变量
        $this->assign('title','极果-用户修改');
        $this->assign('info',$info);

        //解析模板
        $this->display();
    }

    //执行修改
    public function update(){
        //var_dump($_POST);
		//创建数据表对象
        $user = M('user');

        if($_FILES['tx']['error'] == 0){
	        //调用函数处理图片上传
	        Uploads('tx');

	        //获取原来图片的路径
	        $res = $user->find($_POST['id']);
	        $tx = $res['tx'];
	        // var_dump($tx);
	        //删除图片
	        unlink('.'.$tx);
        }

    	//创建数据
        $res = $user->create();
    	//var_dump($res);
    	//执行修改
    	$res = $user->save();

    	//执行添加
    	if($res){
			//设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
			$this->success('更新成功', U('Admin/User/index'),3);
		}else{
			//错误页面的默认跳转页面是返回前一页，通常不需要设置
			$this->error('更新失败');
		}
    }

    public function yzm(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
}
?>