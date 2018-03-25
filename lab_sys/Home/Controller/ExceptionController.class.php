<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class ExceptionController extends Controller {
    use JUMP_HTML;
    public function excp(){
        $user=session('user');
        $this->assign('user',$user);
        $this->display();
    }   
    public function excpsts_a(){
    	$Exc=M('excp');
    	$list=$Exc->limit(5)->select();
    	$this->assign('list',$list);
    	$this->display();
    }
    public function excpsts_c(){
        $this->display();
    }

}