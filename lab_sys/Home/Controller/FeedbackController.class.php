<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class FeedbackController extends Controller {
    use JUMP_HTML;
    public function fb(){
    	$user=session('user');
    	if ($user){
            if($user['flag']==false){
                $fbrls = M('fbrls');
                $data['teaid']=$user['teaid'];
                $data['wday']=$user['wday'];
                $data['clatim']=$user['clatim'];
                $rls = $fbrls->order('id desc')->where($data)->select();
                if($rls){
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $rls[0]['ddl'];
                    if(strtotime($date2)>=strtotime($date1)){
                        $this->assign('user',$user);
                        $this->assign('rls',$rls[0]);
    
                        $this->display();
                    }else{
                        $this->redirect('main/main','',0.01,'<script>alert(\'问卷已过期，不能再填\');</script>');
                    }
                }else{
                    $this->redirect('main/main','',0.01,'<script>alert(\'没有需要填写的问卷\');</script>');
                }
            }else{
                $this->redirect('main/main','',0.01,'<script>alert(\'你已填写问卷，无须再填\');</script>');
            }
            
    	}else{$this->redirect('login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');}
    }
	public function fb_(){
    	$user=session('user');
    	if ($user){
            if($user['flag']==0){
                if(I('btn_back')){
                    $this->redirect('main/main','',0.01);
                }else{
                    $fbrls = M('fbrls');
                    $id = I('id');
                    $rls = $fbrls->where("id = $id")->select();
                    //更新学生flag
                    $stu=M('stu');
                    $rls1=$rls[0];
                    $sdata=$stu->where("nam='{$user['nam']}' and wDay={$rls1['wday']} and claTim='{$rls1['clatim']}'")->setField('flag','1');
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $rls[0]['ddl'];
                    if(strtotime($date2)>=strtotime($date1)){
                        $data = $rls[0];
                        if($data['q1']!=null){
                            echo 'test';
                            switch(I('q1_num')){
                                case 1:
                                    $data['a1_q1_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q1_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q1_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q1_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q1_Num']++;
                                    break;
                            }
                        }
                        if($data['q2']!=null){
                            switch(I('q2_num')){
                                case 1:
                                    $data['a1_q2_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q2_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q2_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q2_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q2_Num']++;
                                    break;
                            }
                        }
                        if($data['q3']!=null){
                            switch(I('q3_num')){
                                case 1:
                                    $data['a1_q3_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q3_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q3_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q3_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q3_Num']++;
                                    break;
                            }
                        }
                        if($data['q4']!=null){
                            switch(I('q4_num')){
                                case 1:
                                    $data['a1_q4_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q4_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q4_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q4_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q4_Num']++;
                                    break;
                            }
                        }
                        if($data['q5']!=null){
                            switch(I('q5_num')){
                                case 1:
                                    $data['a1_q5_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q5_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q5_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q5_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q5_Num']++;
                                    break;
                            }
                        }
                        if($data['q6']!=null){
                            switch(I('q6_num')){
                                case 1:
                                    $data['a1_q6_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q6_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q6_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q6_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q6_Num']++;
                                    break;
                            }
                        }
                        if($data['q7']!=null){
                            switch(I('q7_num')){
                                case 1:
                                    $data['a1_q7_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q7_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q7_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q7_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q7_Num']++;
                                    break;
                            }
                        }
                        if($data['q8']!=null){
                            switch(I('q8_num')){
                                case 1:
                                    $data['a1_q8_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q8_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q8_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q8_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q8_Num']++;
                                    break;
                            }
                        }
                        if($data['q9']!=null){
                            switch(I('q9_num')){
                                case 1:
                                    $data['a1_q9_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q9_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q9_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q9_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q9_Num']++;
                                    break;
                            }
                        }
                        if($data['q10']!=null){
                            switch(I('q10_num')){
                                case 1:
                                    $data['a1_q10_Num']++;
                                    break;
                                case 2:
                                    $data['a2_q10_Num']++;
                                    break;
                                case 3:
                                    $data['a3_q10_Num']++;
                                    break;
                                case 4:
                                    $data['a4_q10_Num']++;
                                    break;
                                case 5:
                                    $data['a5_q10_Num']++;
                                    break;
                            }
                        }

                        $fbrls->save($data);
                        $user_fb = M('stu');
                        $user_['flag']=true;
                        $user_id = $user['id'];
                        $user_fb->where("id = $user_id")->save($user_);
                        $user = $user_fb->where("id = $user_id")->select();
                        session('user',$user[0]);
                        $this->redirect('main/main','',0.01,'<script>alert(\'感谢你的反馈！\');</script>');
                    }else{
                        $this->redirect('main/main','',0.01,'<script>alert(\'问卷已过期，不能再填\');</script>');
                    }
                }
            }else{
                $this->redirect('main/main','',0.01,'<script>alert(\'你已填写问卷，无须再填\');</script>');
            }
        }
        else{$this->redirect('login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');}
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
        if($admin){
            if($admin['typ']=='1'){
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
            }else
            $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbupdt() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin){
            if($admin['typ']=='1'){
                $fbori = M('fbori');
                $id = I('update');
                $old = $fbori->where(" id=$id ")->select();
                $this->assign('old',$old[0]);
                $this->display();
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbupdt_() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin){
            if($admin['typ']=='1'){
                if(I('btn_fbupdt')) {//修改
                    $fbori=D('fbori');
                    if($fbori->create()){
                        $data=$fbori->add();
                        $this->redirect('fbman','',0.01,'<script>alert(\'问卷修改成功！\');</script>');
                    }
                }else{
                    if(I('btn_back')){
                        $this->redirect('fbman','',0.01);
                    }
                }
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    //管理员问卷显示
    public function fbman() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin){
            if($admin['typ']=='1'){
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
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    //已发布问卷显示
    public function fbman2() {
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin){
            if($admin['typ']=='1'){
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
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbsts(){
        $admin=session('admin');
        $this->assign('admin',$admin);
        if($admin){
            if($admin['typ']=='1'){
                $fbrls = M('fbrls');
                $id = I('id');
                $rls = $fbrls->where("id = '$id'")->select();
                $this->assign('rls',$rls[0]);
                $this->assign('id',$id);
                $sql="select stu.id, stu.nam, stu.claTim, man.cla as cla, man.nam as tnam from man,stu where man.id=stu.teaId and stu.wDay={$rls[0]['wday']} and stu.claTim='{$rls[0]['clatim']}' and flag=0;";
                $slist=M()->query($sql);

                $this->assign('slist',$slist);
                $this->display();
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
}