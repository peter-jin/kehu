<?php
namespace Home\Controller;
use Think\Controller;
class CustomerController extends Controller {

	//显示客户列表
    public function index(){
    	$this->display();
    }

    //详情显示
    public function details(){
        $this->display();
    }

    //客户搜索
    public function search(){
        $this->display();
    }

    //添加客户与客户信息
    public function add_user(){
    	$this->display();
    }

    //删除客户
    public function del_user(){
    	$this->display();
    }

    //修改客户信息
    public function upb_user(){
        $this->display();
    }


}