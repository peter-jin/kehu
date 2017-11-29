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

    //添加用户执行页
    public function useraction(){

        
        
        //提取变量数据
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];
        $sex = $_POST['sex'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $uright = $_POST['uright'];
        $summary = $_POST['summary'];
        $add_people = $_POST['add_people'];
        $utime = $_POST['utime'];

        // echo $sj;
        // exit;
        $user = D('User');
        

        $tiaojian = 'telephone="'.$telephone.'"';

        $phone = $user->where($tiaojian)->select();



        // echo $tiaojian;

        // echo $phone[0]['telephone'] ;

        // $aa = json_encode($_POST);
        // dump($aa);
        //exit;

        if ($telephone === $phone[0]['telephone'] or $telephone === NULL) {  
            echo '2';
        }else{
            $z = $user->add($_POST);
            echo '1';

        }
        
        
        
       

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