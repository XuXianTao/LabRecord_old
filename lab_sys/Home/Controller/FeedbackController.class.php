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
    public function fbsts_a(){
    	$this->display();
    }
	public function fb_(){
    	$knowc=I('knowledge');
    	if ($knowc){
    		
    	}else{$this->error('不能为空');}
    }
}