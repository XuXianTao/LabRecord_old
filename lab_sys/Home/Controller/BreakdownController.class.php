<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class ExceptionController extends Controller {
    use JUMP_HTML;
    public $page;
    public $list;
    public $num_list
    public function bd(){
        $page = 0;
    	$bd=M('bd');
        $list=$bd->select();
        $num_list = $bd->count();
    	$this->assign('list',$list);
        $admin=session('admin');
        if ($admin){
            $this->assign('page',$page*10);
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
    public function page_change() {//换页
        $pagechange = $_POST['page_change'];
        if(pagechange == '1'){
            if($page*10<$num_list){
                $page = $page + 1;
            }
        }else{
            if($page>0){
                $page = $page - 1;
            }
        }
        $admin=session('admin');
        $this->assign('list',$list);
        if ($admin){
            $this->assign('page',$page*10);
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
}