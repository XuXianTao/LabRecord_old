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
        $page = ($btn-1) * 2;
        $bd=M('bd');
        $num_list = $bd->count();
        $num = ceil($num_list / 2);
        if($page>=$num_list)$page-=2;
        $this->assign('page',$page/2+1);
        $list=$bd->limit($page,2)->select();
        $this->assign('list',$list);
        $this->assign('num',$num);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
    public function pagechange(){
        $bd=M('bd');
        $num_list = $bd->count();
        $num = ceil($num_list/2 );
        $this->assign('num',$num);
        $this->assign('page',$this->page/2+1);
        if($_POST['btn']=='1'){
            if($this->page+2 <= $num_list){
                $this->page = $this->page + 2;
            }
        }else{
            if($this->page > 0){
                $this->page = $this->page - 2;
            }
        }
        
        $list=$bd->limit($this->page,2)->select();
        $this->assign('list',$list);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
            $this->display('bd');
        }else $this->redirect('logm');
    }
}