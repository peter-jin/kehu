<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
	//商品展示
    public function showlist(){
        $this->display();
    }

    //添加商品
    public function addgoods(){
    	$this->display();
    }

    //修改商品
    public function updgoods(){
        $this->display();
    }

     //删除商品
    public function delgoods(){
    	$this->display();
    }

     //商品分类
    public function classgoods(){
    	$this->display();
    }

}