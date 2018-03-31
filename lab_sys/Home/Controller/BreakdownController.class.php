<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class BreakdownController extends Controller {
    use JUMP_HTML;
    public $page;
    public function bd(){
        global $page;
        $page = 0;
        $this->assign('page',$page+1);
        $bd=M('bd');
        $num_list = $bd->count();
        $num = ceil($num_list / 2);
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
        global $page;
        $bd=M('bd');
        $this->assign('page',$page+1);
        $num_list = $bd->count();
        $num = ceil($num_list / 2);
        $this->assign('num',$num);
        if($_POST['btn']=='1'){
            if($page+2 < $num_list){
                $page = $page + 2;
            }
        }else{
            if($page > 0){
                $page = $page - 2;
            }
        }
        $list=$bd->limit($page,2)->select();
        $this->assign('list',$list);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
            $this->display('bd');
        }else $this->redirect('logm');
    }
}