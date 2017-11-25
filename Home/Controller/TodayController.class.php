<?php
namespace Home\Controller;
use Think\Controller;
class TodayController extends Controller {

	//用户登录
    public function index(){
    	$this->display();
    }

    //详情显示
    public function details(){
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