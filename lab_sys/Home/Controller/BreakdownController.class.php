<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class BreakdownController extends Controller {
    use JUMP_HTML;
    public function bd(){
    	$bd=M('bd');
        $list=$bd->select();
        $num_list = $bd->count();
        $this->assign('list',$list);
        $this->assign('num_list',$num_list);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
}