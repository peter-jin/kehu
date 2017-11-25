<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {

	//用户登录
    public function index(){
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