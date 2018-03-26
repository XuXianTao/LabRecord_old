<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class FeedbackController extends Controller {
    use JUMP_HTML;
    public function fb(){
    	$user=session('user');
    	if ($user){
    		$this->assign('user',$user);
    		$this->display();
    	}else{$this->redirect('login/log');}
    }
	public function fb_(){
    	$knowc=I('knowledge');
    	if ($knowc){
    		$Fb=D('fb');
            $Fb->create();
            if ($Fb->where('id='.session('user')['id'])->select())$Fb->save();
            else $Fb->add();
            //$this->show("");
            $this->redirect('main/main','',0.01,'<script>alert(\'感谢反馈\');</script>');
    	}else{$this->error('不能为空');}
    }
    public function fbsts(){
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
            $this->display();
        }else $this->redirect('logm');
    }
}