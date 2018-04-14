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
                $id=I('id');
                $rls = $fbrls->where("id = $id")->select();
                if($rls){
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $rls[0]['ddl'];
                    if(strtotime($date2)>=strtotime($date1)){
                        $this->assign('user',$user);
                        $this->assign('rls',$rls[0]);

                        $this->display();
                    }else{
                        $this->redirect('feedback/fbstu','',0.01,'<script>alert(\'问卷已过期，不能再填\');</script>');
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
                    $fill = M('fill');
                    $user_id = $user['id'];
                    $id = I('id');
                    $data_s = $fill
                        ->join('stu ON stu.id = fill.stuId')
                        ->join('fbrls ON fbrls.id = fill.fbId')
                        ->where("fbrls.id = $id and stu.id = $user_id")
                        ->select();
                    //dump($data_s);
                    //更新学生flag
                    $type = 0;
                    if($data_s[0]['typ']==1){
                        $type = 1;
                    }
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $data_s[0]['ddl'];
                    $q_num=0;
                    $wa_num=0;
                    if(strtotime($date2)>=strtotime($date1)){
                        for ($q=1;$q<=10;$q++) {
                            for ($a=1;$a<=5;$a++) {
                                $data["a{$a}_q{$q}_Num"] = $data_s[0]["a{$a}_q{$q}_num"];
                            }
                            $data["a_q{$q}_Num"] = $data_s[0]["a_q{$q}_num"];
                        }

                        for ($q=1;$q<=10;$q++) {
                            if($data_s[0]["q$q"]!=null){
                                //echo 'test';
                                switch(I("q{$q}_num")){
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
                                if($type == 1){
                                    $q_num++;
                                    if($data_s[0]["a_q{$q}"]==I("q{$q}_num")){
                                        $data["a_q${q}_Num"]++;
                                    }else{
                                        $wa_num++;
                                    }
                                }
                            }
                        }


                        $fbrls->where("id = $id")->save($data);
                        $state['stat'] = 1;
                        if($type == 1){
                            $state['scr'] = round(($q_num - $wa_num)*100/$q_num);
                        }
                        $fill->where("fbId = $id and stuId = $user_id")->save($state);
                        $answer = ($type)?'回答':'反馈';
                        $this->redirect('main/main','',0.01,"<script>alert(\'感谢你的$answer！\');</script>");
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
                    if ($temp=$fbrls->create()){
                        $data = array_merge($data,$temp);
                        $stu = M('stu');
                        $stus['wDay'] = $data['wDay'];
                        $stus['claTim'] = $data['claTim'];
                        $stus['teaId'] = $data['teaId'];
                        $stu_s = $stu->where($stus)->select();
                        $fill = M('fill');
                        if($stu_s != null){
                            $data2 = $fbrls->add($data);
                            for($i=0;$i<count($stu_s);$i++){
                                $data_f['stuId']=$stu_s[$i]['id'];
                                $data_f['fbId']=$data2;
                                $data_f['ddl']=$data['ddl'];
                                $fill->add($data_f);
                            }
                            $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布成功！\');</script>');
                        }else
                            $this->redirect('fbrls',array('que'=>$quetit),0.01,'<script>alert(\'无此时段的学生！\');</script>');
                    }else $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布失败！\');</script>');
                }
            }else
            $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    public function fbstu(){
        $user=session('user');
        $this->assign('user',$user);
    	if ($user){
            $id = $user['id'];
            $fill = M('fill');
            $ptime = date('Y-m-d H:i:s',time());
            $fill_1 = $fill->where("stuId = $id and stat = 0 and '$ptime'<= ddl")->select();
            $fbrls = M('fbrls');
            for($i=0;$i<count($fill_1);$i++){
                $fbid = (int)$fill_1[$i]['fbid'];
                $rls = $fbrls->where("id = $fbid")->select();
                $fill_1[$i] += $rls[0];
            }
            $this->assign('fill',$fill_1);
            $this->display();

    	}else{$this->redirect('login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');}
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
                $this->redirect('Login/logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
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
                $tea_id = $admin['id'];
                $new = $fbrls->where("teaId = $tea_id")->order('id desc')->select();

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
                $f = M('fill');
                $fbrls = M('fbrls');
                $id = I('id');
                $fill_stat = $f->join("stu ON stu.id = fill.stuId")->where("fbId = '$id' and stat = 0")->select();
                $fill_sc = $f->join("stu ON stu.id = fill.stuId")->where("fbId = '$id' and scr < 60")->select();

                $rls = $fbrls->where("id = '$id'")->select();
                $this->assign('rls',$rls[0]);
                $this->assign('id',$id);

                $this->assign('fill_stat',$fill_stat);
                $this->assign('fill_sc',$fill_sc);
                $this->display();
            }else
                $this->redirect('logm','',0.01,'<script>alert(\'身份验证失败，请重新输入学号/职工号\');</script>');
        }else $this->redirect('logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
}