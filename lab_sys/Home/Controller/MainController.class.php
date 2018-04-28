<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class MainController extends Controller {
	use JUMP_HTML;
	// 显示main.html
	public function main() {
		$user = session('user');
		if ($user) {
            $this->assign('user',$user);
			$this->display();
		} else
			$this->redirect('Login/log');
	}
	public function main_m() {
		$admin = session('admin');
        if ($admin) {
            $this->assign('admin',$admin);
    	    $this->display();
		} else
			$this->redirect('Login/logm');
	}
}