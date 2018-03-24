<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Data=M('data');
    	$result=$Data->find(3);
    	$this->assign('result',$result);
        $this->display();
    }
    public function test($s1){
    	echo 'test'.$s1;
    }
}