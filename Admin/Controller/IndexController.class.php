<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display();
    }
	public function right(){
        $this->display();
    }
    
    public function heade(){
        $this->display();
    }
    
	public function left(){
	    $name=$_SESSION['adminuser'];
	    $manager= M('manager')->field('mg_role_id')->where(array('mg_name'=>$name))->find();
	    
	    $role=M('role')->where(array('role_id'=>$manager['mg_role_id']))->find();
	   
	    $map['auth_id']=array ('in',$role['role_auth_ids']);
	    $auth=M('auth')->where($map)->select();
	    
	    $this->assign('auth',$auth);
        $this->display();
    }
	

	public function logout(){
	  session(null);
	  $this->success('正在返回登陆页面','/index.php/Admin/Login/login');
	}
}