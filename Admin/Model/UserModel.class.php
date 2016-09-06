<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model {
     public function check($data){
		return $this->getByUsername($data);

	 }
}