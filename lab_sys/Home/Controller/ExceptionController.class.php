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
        $Exc=D('excp');
        if ($Exc->create()){
            $user = session('user');
            $data['cla'] = cookie('cla');
            $data['num'] = cookie('num');
            $data['id'] = $user['id'];
            $data['nam'] = $user['nam'];
            $data['sts'] = '未处理';
            $data['dat'] = 'now()';
            $data['pc'] = ($_POST['pc']=='pc')?"1":"0";
            $data['wire'] = ($_POST['wire']=='wire')?"1":"0";
            $data['box'] = ($_POST['box']=='box')?"1":"0";
            $data['oscp'] = ($_POST['oscp']=='oscp')?"1":"0";
            $data['gen'] = ($_POST['gen']=='gen')?"1":"0";
            $data['oth'] = ($_POST['oth']=='oth')?"1":"0";
            $data['pc'] = $_POST['pc'];
            $Exc->add($data);
        }else $this->error($Exc->getError());
        //$this->show("<script>alert('感谢反馈');</script>");
        $this->redirect('main/main','',0.01,'<script>alert(\'感谢反馈\');</script>');
    }
    public function excpsts(){
    	$Exc=M('excp');
    	$list=$Exc->select();
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
            $data['delTim'] = 'now()';
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
            $data['delTim'] = 'now()';
            $excp->where("dat = \"$vo_dat\" and id = $vo_id")->save($data);
            $this->redirect('exception/excpsts','',0.01,'<script>alert(\'确认已经进行处理，并处理成功\');</script>');
        }else{
            $this->redirect('logm');
        }
    }
}