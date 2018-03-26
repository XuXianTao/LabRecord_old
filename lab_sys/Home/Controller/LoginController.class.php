<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class LoginController extends Controller {
    use JUMP_HTML;
    public function log() {
        $this->display();
    }
    public function log_(){
    	$account=$_POST['num'];
    	if ($account){
			$Exc=M('stu');
			$user=$Exc->where(" id=$account ")->select();
			if ($user){
				session('user',$user[0]);
				$this->assign('user',$user[0]);
	      		$this->redirect('main/main');
			}else{
				$this->error('学号不存在');
			}
    	}else $this->error('学号不能为空');
    }
    public function logm(){
        $this->display();
    }
    public function logm_(){
        $account=$_POST['num'];
        if ($account){
            $Exc=M('ass');
            $admin=$Exc->where("id=$account")->select();
            if ($admin){
                session('admin',$admin[0]);
                $this->assign('admin',$admin[0]);
                $this->redirect('main/main_m');
            }else $this->error('职工号/学号不存在');
        }else $this->error("职工号/学号不能为空");
    }
}
