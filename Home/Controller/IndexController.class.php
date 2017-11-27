<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

   //登录也显示
    public function index(){
    	$this->display(); 
    }

    //用户登录
    public function login(){ 
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $a = 'uname="'.$name.'"';
        $user = D('User');
        $obj = $user->where($a)->select();

        if ($obj[0]['uname'] !== $name) {
            echo "2";
            return false;
        }elseif($obj[0]['pword'] !== $pass){
            echo "2";
            return false;
        }else{
            echo "1";   
        }

        
        
       
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