<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class BreakdownController extends Controller {
    use JUMP_HTML;
    public function bd($btn = 1){
        if($btn<1){
            $btn=1;
        }
        $page = ($btn-1) * 10;
        $bd=M('bd');
        $num_list = $bd->count();
        $num = ceil($num_list / 10);
        if($page>=$num_list)$page-=10;
        $this->assign('page',$page/10+1);
        $list=$bd->limit($page,10)->select();
        $this->assign('list',$list);
        $this->assign('num',$num);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
    
}