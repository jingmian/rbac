<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function login(){
        if(!empty($_POST)){			
		   $check=new  \Admin\Model\UserModel();
		   $arr=$check->check($_POST['admin_user']);
           $adminnuser=trim(I('post.admin_user'));
		   $password=trim(I('post.admin_psd'));
           $verCode = trim(I('post.captcha'));
		    if(!empty($arr)){
                   $User=D('Manager');
				   $use=$User->where(array('mg_name'=>$adminnuser))->find();

				   if($use['mg_pwd']!==$password){
				       $this->error('密码错误');
				   }else{
				   
					   if(check_verify($verCode)){
						 session('adminuser',$adminnuser);						
						 $this->success('操作完成','/index.php/Admin/Index/index',1);
					   }else{
						  $this->error('验证码错误');
					   }
                   }
				
			}else{
			   $this->error('账号密码错误');
			}
		}else{			
		    $this->display();
		}
    }
   
   //产生验证码
	public function verify(){				
			$config =	array(
			'fontSize'  =>  12,              // 验证码字体大小(px)
			'imageH'    =>  25,               // 验证码图片高度
			'imageW'    =>  110,               // 验证码图片宽度
			'fontttf'   =>  '4.ttf',
			'length'    =>  4,
			'reset'     =>  true,           // 验证成功后是否重置
            'expire'    =>  1800,            // 验证码过期时间（s）
			);
	   $verify=new \Think\Verify($config);
	   $verify->entry();
	}

}