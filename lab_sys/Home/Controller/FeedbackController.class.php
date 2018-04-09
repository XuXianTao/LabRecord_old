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
            $this->redirect('main/main','', 0.01, '<script>alert(\'感谢反馈\');</script>');
    	} else {
            $this->error('不能为空');
        }
    }
    public function fbcre() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $this->display();
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
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
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbrls() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $this->display();
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbrls_() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            if(I('btn_reback')) $this->redirect(fbman);//返回
            else if(I('btn_fbrls')) {//发布
                $fbrls=D('fbrls');
                $fbori=M('fbori');
                $quetit=I('que');
                $data=$fbori->where("tit='$quetit'")->find();
                unset($data['bId']);
                unset($data['bNam']);
                unset($data['id']);
                if ($data+=$fbrls->create()){
                    $fbrls->add($data);
                    $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布成功！\');</script>');
                }else $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布失败！\');</script>');
            }
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbupdt() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbori = M('fbori');
            $id = I('update');
            $old = $fbori->where(" id=$id ")->select();
            $this->assign('old',$old[0]);
            $this->display();
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbupdt_() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            if(I('btn_fbupdt')) {//修改
                $fbori=D('fbori');
                if($fbori->create()){
                    $data=$fbori->add();
                    $this->redirect('fbman','',0.01,'<script>alert(\'问卷修改成功！\');</script>');
                }
            }else $this->redirect('fbman','',0.01,'<script>alert(\'问卷修改失败！\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    //管理员问卷显示
    public function fbman() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbori = M('fbori');
            $id = $_POST['id'];
            $old = $fbori->order('id desc')->select();
            $this->assign('old',$old);
            //按钮判断
            if(I('btn_fbcre')) $this->redirect(fbcre);
            if(I('btn_fbrls')) $this->redirect(fbman2);
            //操作判断
            $update=I('update');
            $publish=I('publish');
            $delete=I('delete');
            if($update){//更新
                $this->redirect("fbupdt?update=$update",'',0.01,'');
            }else if ($publish){//发布
                $que=$fbori->where("id=$publish")->find();
                $this->redirect('fbrls',array('que'=>$que['tit']));
            }else if ($delete){//删除
                $fbori->where("id=$delete")->delete();
                $this->redirect($this);
            }

            else{
                $this->display();
            }
        }else $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    //已发布问卷显示
    public function fbman2() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbrls = M('fbrls');
            $id = $_POST['id'];
            $new = $fbrls->order('id desc')->select();

            for($i = 0 ;$i < count($new);$i++ ){

                switch($new[$i]['wday'])
                {
                    case 1:
                        $new[$i]['wday']="一";
                        break;
                    case 2:
                        $new[$i]['wday']="二";
                        break;
                    case 3:
                        $new[$i]['wday']="三";
                        break;
                    case 4:
                        $new[$i]['wday']="四";
                        break;
                    case 5:
                        $new[$i]['wday']="五";
                        break;
                    case 6:
                        $new[$i]['wday']="六";
                        break;
                    case 7:
                        $new[$i]['wday']="日";
                        break;
                    default:
                        break;
                }
            }
            $this->assign('new',$new);
            //按钮判断
            if(I('btn_fbcre')) $this->redirect(fbcre);
            if(I('btn_fbori')) $this->redirect(fbman);
            if(I('btn_fbsts')) $this->redirect(fbsts,array('id'=>I('btn_fbsts')),0.01,'');
            
            else{
                $this->display();
            }
        }else $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbsts(){
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin && $admin['typ']=='1' ){
            $fbrls = M('fbrls');
            $id = I('id');
            $rls = $fbrls->where("id = '$id'")->select();
            $this->assign('rls',$rls[0]);
            $this->assign('id',$id);
            $this->display();
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
}