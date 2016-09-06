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
	public function left(){
        $this->display();
    }
	public function heade(){
        $this->display();
    }

	public function logout(){
	  session(null);
	  $this->success('正在返回登陆页面','/index.php/Admin/Login/login');
	}
}