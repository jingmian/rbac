<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

	public function _initialize() {

		header("Content-Type:text/html; charset=utf-8");

        $czmcsy = CONTROLLER_NAME . ACTION_NAME;
		$czmc = ACTION_NAME;

		if (! isset ( $_SESSION ['adminuser'] )) {

			$this->success('请先登陆','/index.php/Admin/Login/login');
			die;

		}
    }
	
	public function checkAdminSession() {

		//设置超时为10分

		$nowtime = time();

		$s_time = $_SESSION['logintime'];

		if (($nowtime - $s_time) > 6000000) {

		session_unset();

    	session_destroy();

			$this->error('当前用户登录超时，请重新登录', U('/index.php/Admin/Login/login'));

		} else {

			$_SESSION['logintime'] = $nowtime;

		}

	}
	
}

?>