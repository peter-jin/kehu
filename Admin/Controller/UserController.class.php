<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

	//用户登录
    public function login(){
    	$this->display();
    }

    //用户退出
    public function logout(){
    	$this->display();
    }

    //用户注册
    public function register(){
    	$this->display();
    }


}