<?php
function show_bug($data){
  echo "<pre>";var_dump($data);echo "</pre>";
}
function check_verify($code, $id = ''){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

?>