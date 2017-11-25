<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

	//用户登录
    public function index(){
        // $user = new \Model\UserModel();

        $obj = D('User');
       // print_r($obj);

        $info = $obj -> select();
        //dump($info);

        $this->assign('info',$info);


        // echo phpinfo();
        //对user的model进行操作
    	$this->display();
    } 

    //详情显示
    public function userdetails(){
        $this->display();
    }

    //用户搜索
    public function search(){
        $this->display();
    }

    //增加用户
    public function add_user(){
    	$this->display();
    }

    //删除用户
    public function del_user(){
    	$this->display();
    }

    //修改用户
    public function upb_user(){
        $this->display();
    }


}