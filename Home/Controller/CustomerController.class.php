<?php
namespace Home\Controller;
use Think\Controller;
class CustomerController extends Controller {

	//显示客户列表
    public function index(){
    	$this->display();
    }

    //添加客户与客户信息
    public function add_user(){
        $this->display();
    }

    //添加客户执行页
    public function useraction(){

        
        //$kuser = json_encode($_POST);
        //提取变量数据
        $name = $_POST['name'];
        $age = $_POST['age'];
        $school = $_POST['school'];
        $education = $_POST['education'];
        $comqany = $_POST['comqany'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];
        $hobby = $_POST['hobby'];
        $cycle = $_POST['cycle'];
        $assessment = $_POST['assessment'];
        $kuser = D('Kuser');


        $tiaojian = 'telephone="'.$telephone.'"';



        $phone = $kuser->where($tiaojian)->select();
        if ($telephone === $phone[0]['telephone'] or $telephone === NULL) {  
           
            echo '2';

        }else{
            $z = $kuser->add( $_POST);
            echo '1';

        }
        
        
        
       

    }
    //详情显示
    public function details(){
        $this->display();
    }

    //客户搜索
    public function search(){
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