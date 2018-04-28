<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class ExceptionController extends Controller {
    use JUMP_HTML;
    public function excp(){
        $user=session('user');
        if ($user){
            $this->assign('user',$user);
            $this->display();
        }else{$this->redirect('login/log');}
    }
    public function excp_(){
        $Exc=D('excp');//在model中自动处理post的数值
        if ($Exc->create()){
            $Exc->add();
        }else $this->error($Exc->getError());
        //$this->show("<script>alert('感谢反馈');</script>");
        $this->redirect('main/main','',0.01,'<script>alert(\'感谢反馈\');</script>');
    }
    public function excpsts(){
    	$Exc=M('excp');
    	$list=$Exc->order('dat desc')->select();
    	$this->assign('list',$list);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
    public function deal_inc() {//处理不成功

        $excp = M('excp');
        $admin=session('admin');
        if($admin){
            $vo_id = $_POST['vo_id1'];
            $vo_dat = $_POST['vo_dat1'];
            $data['delId'] = $admin['id'];
            $data['delNam'] = $admin['nam'];
            $data['sts'] = '处理不成功';
            $data['delWay'] = $_POST['delWay1'];
            $data['delTim'] = date('Y-m-d H:i:s',time());
            $excp->where("dat = \"$vo_dat\" and id = $vo_id")->save($data);
            $this->redirect('exception/excpsts','',0.01,'<script>alert(\'确认已经进行处理，但处理不成功\');</script>');
        }else{
            $this->redirect('logm');
        }

    }
    public function deal_com() {//处理成功
        $excp = M('excp');
        $admin=session('admin');
        if($admin){
            $vo_id = $_POST['vo_id2'];
            $vo_dat = $_POST['vo_dat2'];
            $data['delId'] = $admin['id'];
            $data['delNam'] = $admin['nam'];
            $data['sts'] = '处理成功';
            $data['delWay'] = $_POST['delWay2'];
            $data['delTim'] = date('Y-m-d H:i:s',time());
            $excp->where("dat = \"$vo_dat\" and id = $vo_id")->save($data);
            $this->redirect('exception/excpsts','',0.01,'<script>alert(\'确认已经进行处理，并处理成功\');</script>');
        }else{
            $this->redirect('logm');
        }
    }
    public function excpsta($btn = 1){
        if($btn<1){
            $btn=1;
        }
        $page = ($btn-1) * 10;
        $excpsta=M('excpsta');
        $num_list = $excpsta->count();
        $num = ceil($num_list / 10);
        if($page>=$num_list)$page-=10;
        $this->assign('page',$page/10+1);
        $list=$excpsta->limit($page,10)->select();
        $this->assign('list',$list);
        $this->assign('num',$num);
        $admin=session('admin');
        if ($admin){
            $this->assign('admin',$admin);
    	    $this->display();
        }else $this->redirect('logm');
    }
}