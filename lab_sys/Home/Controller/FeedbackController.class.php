<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class FeedbackController extends Controller {
    use JUMP_HTML;
    public function fb(){
    	$user=session('user');
    	if ($user){
    		$this->assign('user',$user);
    		$this->display();
    	}else{$this->redirect('login/log');}
    }
	public function fb_(){
    	$knowc=I('knowledge');
    	if ($knowc) {
    		$Fb=D('fb');
            $Fb->create();
            if ($Fb->where('id='.session('user')['id'])->select()) $Fb->save();
            else $Fb->add();
            //$this->show("");
            $this->redirect('main/main', '', 0.01, '<script>alert(\'感谢反馈\');</script>');
    	} else {
            $this->error('不能为空');
        }
    }
    public function fbcre() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $this->display();
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbcre_() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbori = D('fbori');
            if($fbori->create()){
                $fbori->add();
                $this->redirect('fbman','',0.01,'<script>alert(\'问卷创建成功！\');</script>');
            }
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbrls() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $this->display();
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbcls_() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbrls = D('fbrls');
            if($fbrls->create()){
                $fbrls->add();
                $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布成功成功！\');</script>');
            }
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbupdt() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbori = M('fbori');
            $id = $_POST['id'];
            $old = $fbori->where(" id='$id' ")->select();
            $this->assign('old',$old[0]);
            $this->display();
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    //管理员问卷显示
    public function fbman() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbori = M('fbori');
            $id = $_POST['id'];
            $old = $fbori->select();
            $this->assign('old',$old);
            $this->display();

        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbsts(){
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbrls = M('fbrls');
            $id = $admin['id']
            $situation = $fbrls->where("id = '$id'")->select();
            $this->assign('situation',$situation);
            $this->display();
        }else $this->redirect('logm',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
}