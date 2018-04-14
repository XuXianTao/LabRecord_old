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
                        $data=array(
                            'a1_q1_Num' => $data_s[0]['a1_q1_num'],
                            'a2_q1_Num' => $data_s[0]['a2_q1_num'],
                            'a3_q1_Num' => $data_s[0]['a3_q1_num'],
                            'a4_q1_Num' => $data_s[0]['a4_q1_num'],
                            'a5_q1_Num' => $data_s[0]['a5_q1_num'],
                            'a_q1_Num' => $data_s[0]['a_q1_num'],
                            
                            'a1_q2_Num' => $data_s[0]['a1_q2_num'],
                            'a2_q2_Num' => $data_s[0]['a2_q2_num'],
                            'a3_q2_Num' => $data_s[0]['a3_q2_num'],
                            'a4_q2_Num' => $data_s[0]['a4_q2_num'],
                            'a5_q2_Num' => $data_s[0]['a5_q2_num'],
                            'a_q2_Num' => $data_s[0]['a_q2_num'],

                            'a1_q3_Num' => $data_s[0]['a1_q3_num'],
                            'a2_q3_Num' => $data_s[0]['a2_q3_num'],
                            'a3_q3_Num' => $data_s[0]['a3_q3_num'],
                            'a4_q3_Num' => $data_s[0]['a4_q3_num'],
                            'a5_q3_Num' => $data_s[0]['a5_q3_num'],
                            'a_q3_Num' => $data_s[0]['a_q3_num'],

                            'a1_q4_Num' => $data_s[0]['a1_q4_num'],
                            'a2_q4_Num' => $data_s[0]['a2_q4_num'],
                            'a3_q4_Num' => $data_s[0]['a3_q4_num'],
                            'a4_q4_Num' => $data_s[0]['a4_q4_num'],
                            'a5_q4_Num' => $data_s[0]['a5_q4_num'],
                            'a_q4_Num' => $data_s[0]['a_q4_num'],

                            'a1_q5_Num' => $data_s[0]['a1_q5_num'],
                            'a2_q5_Num' => $data_s[0]['a2_q5_num'],
                            'a3_q5_Num' => $data_s[0]['a3_q5_num'],
                            'a4_q5_Num' => $data_s[0]['a4_q5_num'],
                            'a5_q5_Num' => $data_s[0]['a5_q5_num'],
                            'a_q5_Num' => $data_s[0]['a_q5_num'],

                            'a1_q6_Num' => $data_s[0]['a1_q6_num'],
                            'a2_q6_Num' => $data_s[0]['a2_q6_num'],
                            'a3_q6_Num' => $data_s[0]['a3_q6_num'],
                            'a4_q6_Num' => $data_s[0]['a4_q6_num'],
                            'a5_q6_Num' => $data_s[0]['a5_q6_num'],
                            'a_q6_Num' => $data_s[0]['a_q6_num'],

                            'a1_q7_Num' => $data_s[0]['a1_q7_num'],
                            'a2_q7_Num' => $data_s[0]['a2_q7_num'],
                            'a3_q7_Num' => $data_s[0]['a3_q7_num'],
                            'a4_q7_Num' => $data_s[0]['a4_q7_num'],
                            'a5_q7_Num' => $data_s[0]['a5_q7_num'],
                            'a_q7_Num' => $data_s[0]['a_q7_num'],

                            'a1_q8_Num' => $data_s[0]['a1_q8_num'],
                            'a2_q8_Num' => $data_s[0]['a2_q8_num'],
                            'a3_q8_Num' => $data_s[0]['a3_q8_num'],
                            'a4_q8_Num' => $data_s[0]['a4_q8_num'],
                            'a5_q8_Num' => $data_s[0]['a5_q8_num'],
                            'a_q8_Num' => $data_s[0]['a_q8_num'],

                            'a1_q9_Num' => $data_s[0]['a1_q9_num'],
                            'a2_q9_Num' => $data_s[0]['a2_q9_num'],
                            'a3_q9_Num' => $data_s[0]['a3_q9_num'],
                            'a4_q9_Num' => $data_s[0]['a4_q9_num'],
                            'a5_q9_Num' => $data_s[0]['a5_q9_num'],
                            'a_q9_Num' => $data_s[0]['a_q9_num'],

                            'a1_q10_Num' => $data_s[0]['a1_q10_num'],
                            'a2_q10_Num' => $data_s[0]['a2_q10_num'],
                            'a3_q10_Num' => $data_s[0]['a3_q10_num'],
                            'a4_q10_Num' => $data_s[0]['a4_q10_num'],
                            'a5_q10_Num' => $data_s[0]['a5_q10_num'],
                            'a_q10_Num' => $data_s[0]['a_q10_num'],
                        );
                        
                        if($data_s[0]['q1']!=null){
                            //echo 'test';
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q1']==I('q1_num')){
                                    $data['a_q1_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q2']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q2']==I('q2_num')){
                                    $data['a_q2_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q3']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q3']==I('q3_num')){
                                    $data['a_q3_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q4']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q4']==I('q4_num')){
                                    $data['a_q4_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q5']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q5']==I('q5_num')){
                                    $data['a_q5_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q6']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q6']==I('q6_num')){
                                    $data['a_q6_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q7']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q7']==I('q7_num')){
                                    $data['a_q7_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q8']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q8']==I('q8_num')){
                                    $data['a_q8_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q9']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q9']==I('q9_num')){
                                    $data['a_q9_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        if($data_s[0]['q10']!=null){
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
                            if($type == 1){
                                $q_num++;
                                if($data_s[0]['a_q10']==I('q10_num')){
                                    $data['a_q10_Num']++;
                                }else{
                                    $wa_num++;
                                }
                            }
                        }
                        dump($data);
                        //$fbrls->where("id = $id")->save($data);
                        $state['stat'] = 1;
                        if($type == 1){
                            $state['scr'] = round(($q_num - $wa_num)*100/$q_num);
                        }
                        //$fill->where("fbId = $id and stuId = $user_id")->save($state);
                        dump($wa_num);
                        dump($state);
                        $answer = ($type)?'回答':'反馈';
                        //$this->redirect('main/main','',0.01,"<script>alert(\'感谢你的$answer！\');</script>");
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
                        $stu = M('stu');
                        $stus['wDay'] = $data['wDay'];
                        $stus['claTim'] = $data['claTim'];
                        $stus['teaId'] = $data['teaId'];
                        $stu_s = $stu->where($stus)->select();
                        $fill = M('fill');
                        if($stu_s != null){
                            $data = $fbrls->add($data);
                            for($i=0;$i<count($stu_s);$i++){
                                $data_f['stuId']=$stu_s[$i]['id'];
                                $data_f['fbId']=$data;
                                $fill->add($data_f);
                                $this->redirect('fbman','',0.01,'<script>alert(\'问卷发布成功！\');</script>');
                            }
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
            $fill_1 = $fill->where("stuId = $id and stat = 0")->select();
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