<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class MainController extends Controller {
    use JUMP_HTML;
	public function main(){
		$user=session('user');
		$this->assign('user',$user);
		$this->display();
	}
	public function main_m(){
		$this->display();
	}
}