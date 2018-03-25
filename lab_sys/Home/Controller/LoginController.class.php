<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class LoginController extends Controller {
    use JUMP_HTML;
    public function login() {
        if (session(MERCHANT)) {
            $this->redirect(U('Home/main/main'));
        } else {
            $this->display();
        }
    }
    public function main(){
    	echo asdsa;
    	
    }
    public function log_(){
    	$account=$_POST['num'];
    	if ($account){
			$Exc=M('stu');
			$user=$Exc->where(" id=$account ")->select();
			//dump($user);
			$this->assign('user',$user);
      		$this->display('main/main');
    	}else $this->error('账号不能为空');
    }
}
