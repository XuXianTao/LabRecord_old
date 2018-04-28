<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class FeedbackController extends Controller {
    use JUMP_HTML;
    // 显示fbstu.html
    public function fbstu() {
        $user = session('user');
    	if ($user) {
            $this->assign('user',$user);
            // 获取学生id
            $fbori_id = $user['id'];
            $fill = M('fill');
            // 获取当前时间
            $date1 = date('Y-m-d H:i:s',time());
            // 检索该学生未填且未过期的问卷信息
            $data_fill = $fill->where("stuId=$fbori_id and stat=0 and ddl>='$date1'")->select();
            $fbrls = M('fbrls');
            // 遍历问卷数据
            for ($i=0; $i<count($data_fill); $i++) {
                // 获取问卷id
                $fbid = (int)$data_fill[$i]['fbid'];
                // 筛选问卷
                $data_fbrls = $fbrls->where("id=$fbid")->find();
                // 添加字段
                $data_fill[$i] += $data_fbrls;
            }
            // 赋值给html中name为fill的volist
            $this->assign('data_fill',$data_fill);
            $this->display();
        } else
            $this->redirect('Login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');
    }
    // 显示fb.html  fbstu.html中使用，跳转到对应id的fb.html
    public function fb() {
        $user = session('user');
    	if ($user) {
            $fbrls = M('fbrls');
            // 获取对应id的问卷
            $fbori_id = I('id');
            $data_fbrls = $fbrls->where("id=$fbori_id")->find();
            if ($data_fbrls) {
                // 获取fill表中对应学生id、对应问卷id的数据
                $fill = M('fill');
                $user_id = $user['id'];
                $fbrls_id = $data_fbrls['id'];
                $data_fill = $fill->where("stuId=$user_id and fbId=$fbrls_id")->find();
                // 若尚未填写问卷
                if ($data_fill['stat']==0) {
                    // 比较当前时间与截止时间
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $data_fill['ddl'];
                    if (strtotime($date2)>=strtotime($date1)) {
                        $this->assign('user',$user);
                        $this->assign('data_fbrls',$data_fbrls);
                        $this->display();
                    } else
                        $this->redirect('Feedback/fbstu','',0.01,'<script>alert(\'问卷已过期\');</script>');
                } else
                    $this->redirect('Main/main','',0.01,'<script>alert(\'你已填写问卷，无须再填\');</script>');
            } else
                $this->redirect('Feedback/fbstu','',0.01,'<script>alert(\'问卷访问出错\');</script>');
        } else
            $this->redirect('Login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');
    }
    // fb.html中使用，提交处理
	public function fb_() {
        $user = session('user');
    	if ($user) {
            // 若点击 返回 按钮
            if (I('btn_back'))
                $this->redirect('Main/main','',0.01);
            // 若点击 提交 按钮
            else {
                $fbrls = M('fbrls');
                $fill = M('fill');
                $user_id = $user['id'];
                $fbori_id = I('id');
                // 多表查询，得到对应学生id、对应已发布问卷id的一组数据，连接了stu表、fbrls表与fill表
                $data_join = $fill
                    ->join('stu ON stu.id=fill.stuId')
                    ->join('fbrls ON fbrls.id=fill.fbId')
                    ->where("fbrls.id=$fbori_id and stu.id=$user_id")
                    ->find();
                if ($data_join['stat']==0) {
                    $type = $data_join['typ'];
                    $date1 = date('Y-m-d H:i:s',time());
                    $date2 = $data_join['ddl'];
                    // 问题数
                    $q_num = 0;
                    // 错选数
                    $wa_num = 0;
                    if (strtotime($date2)>=strtotime($date1)) {
                        // 循环获取当前该问卷各选项与正确答案选中人数
                        for ($q=1; $q<=10; $q++) {
                            for ($a=1; $a<=5; $a++)
                                $data["a{$a}_q{$q}_Num"] = $data_join["a{$a}_q{$q}_num"];
                            $data["a_q{$q}_Num"] = $data_join["a_q{$q}_num"];
                        }
                        // 问题非空则更新数据
                        for ($q=1; $q<=10; $q++) {
                            // 若问题非空
                            if ($data_join["q{$q}"] != null) {
                                // 读取fb.html对应问题的选中项
                                switch (I("q{$q}_Radio")) {
                                    // 对应选项选中人数增加
                                    case 1: $data["a1_q{$q}_Num"]++; break;
                                    case 2: $data["a2_q{$q}_Num"]++; break;
                                    case 3: $data["a3_q{$q}_Num"]++; break;
                                    case 4: $data["a4_q{$q}_Num"]++; break;
                                    case 5: $data["a5_q{$q}_Num"]++; break;
                                }
                                // 若问卷类型为课堂小测
                                if ($type==1) {
                                    // 计算问题数量
                                    $q_num++;
                                    // 选择进行计数
                                    if (I("q{$q}_Radio")==$data_join["a_q{$q}"])
                                        $data["a_q${q}_Num"]++;
                                    else
                                        $wa_num++;
                                }
                            }
                        }
                        // 更新fbrls表对应问卷id的数据
                        $fbrls->where("id=$fbori_id")->save($data);
                        // 设定问卷填写状态为已填写
                        $state['stat'] = 1;
                        // 获取cookie中保存的位置，课室号+机号
                        $state['cla'] = cookie('cla');
                        $state['num'] = cookie('num');
                        // 若问卷类型为课堂小测，计算得分
                        if ($type==1)
                            $state['scr'] = round(($q_num - $wa_num)*100/$q_num);
                        // 更新fill表对应问卷id、对应学生id的数据
                        $fill->where("fbId=$fbori_id and stuId=$user_id")->save($state);
                        // 设定提示
                        $answer = ($type)? '回答':'反馈';
                        $this->redirect('Main/main','',0.01,"<script>alert(\"感谢你的".$answer."！\");</script>");
                    } else
                        $this->redirect('Main/main','',0.01,'<script>alert(\'问卷已过期，不能再填\');</script>');
                } else
                    $this->redirect('Main/main','',0.01,'<script>alert(\'你已填写问卷，无须再填\');</script>');
            }
        } else
            $this->redirect('Login/log','',0.01,'<script>alert(\'登陆失效，请重新输入学号\');</script>');
    }
    // 显示fbman.html
    public function fbman() {
        $admin = session('admin');
        if ($admin) {
            // 检测权限
            if ($admin['typ']=='1') {
                $this->assign('admin',$admin);
                $fbori = M('fbori');
                // 获取原始问卷数据
                $old = $fbori->order('id desc')->select();
                $this->assign('old',$old);
                // 操作判断，创建、更新、发布、删除
                $update = I('update');
                $publish = I('publish');
                $delete = I('delete');
                if (I('btn_fbcre'))
                    $this->redirect(fbcre);
                else if (I('update')) {
                    $this->redirect("fbupdt?update=$update",'',0.01,'页面跳转中');
                } else if (I('publish')) {
                    $que = $fbori->where("id=$publish")->find();
                    $this->redirect('fbrls',array('id'=>$que['id']),0.01,'页面跳转中');
                } else if (I('delete')) {
                    $fbori->where("id=$delete")->delete();
                    $this->redirect($this);
                } else
                    $this->display();
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // 显示fbcre.html
    public function fbcre() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $this->assign('admin',$admin);
                $this->display();
            } else
                $this->redirect('Main/main_m','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // fbcre.html中使用，提交处理
    public function fbcre_() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $fbori = D('fbori');
                // 根据post数据创建数据对象
                if ($fbori->create()) {
                    // 写入数据库
                    $fbori->add();
                    $this->redirect('fbman','',0.01,'<script>alert(\'问卷创建成功！\');</script>');
                } else
                    echo "<script>alert('创建问卷出现错误，请联系维护处理')</script>";
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // 显示fbrls.html
    public function fbrls() {
        $admin=session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $fbori = M('fbori');
                // 获取将要发布的问卷的标题
                $data = $fbori->where("id = ".I('id'))->find();
                $que = $data['tit'];
                // 把$que赋值给 html变量que
                $this->assign('que',$que);
                $this->assign('admin',$admin);
                $this->display();
            } else 
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // fbrls.html中使用，提交处理
    public function fbrls_() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                if (I('btn_back'))
                    $this->redirect('Feedback/fbman','',0.01,'页面跳转中');
                else {
                    $fbrls = D('fbrls');
                    $fbori = M('fbori');
                    $title = I('que');
                    // 获取原始问卷数据
                    $fbori_id = I('id');
                    $data_fbori = $fbori->where("id='$fbori_id'")->find();
                    // 根据post数据创建数据对象$temp
                    if ($temp=$fbrls->create()) {
                        // 合并
                        $data = array_merge($data_fbori,$temp);
                        $data['schYear'] = $admin['schYear'];
                        $data['schTerm'] = $admin['schTerm'];
                        $stu = M('stu');
                        dump($data);
                        // 获取对应学生的相关信息
                        $cond['schYear'] = $data['schYear'];
                        $cond['schTerm'] = $data['schTerm'];
                        $cond['schDay'] = $data['schDay'];
                        $cond['schTim'] = $data['schTim'];
                        $cond['teaId'] = $data['teaId'];
                        // 选出所有对应学生
                        $data_stu = $stu->where($cond)->select();
                        dump($data_stu);
                        if ($data_stu) {
                            $fill = M('fill');
                            // 销毁多余变量
                            unset($data['teaid']);
                            unset($data['teanam']);
                            unset($data['id']);
                            unset($data['cretim']);
                            dump($data);
                            $fbrls_id = $fbrls->add($data);
                            dump($fbrls_id);
                            for ($i=0; $i<count($data_stu); $i++){
                                $data_fill['stuId'] = $data_stu[$i]['id'];
                                $data_fill['fbId'] = $fbrls_id;
                                $data_fill['ddl'] = $data['ddl'];
                                $fill->add($data_fill);
                            }
                            $this->redirect('Feedback/fbman2','',0.01,'<script>alert(\'问卷发布成功！\');</script>');
                        } else
                            $this->redirect('Feedback/fbrls',array('id'=>$fbori_id),0.01,'<script>alert(\'无此时段的学生！\');</script>');
                    } else
                        echo "<script>alert('发布问卷出现错误，请联系维护处理')</script>";
                }
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // 显示fbupdt.html
    public function fbupdt() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $this->assign('admin',$admin);
                $fbori = M('fbori');
                // 获取原始问卷数据
                $fbori_id = I('update');
                $old = $fbori->where("id=$fbori_id")->find();
                $this->assign('old',$old);
                $this->display();
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // fbupdt.html中使用，提交处理
    public function fbupdt_() {
        $admin = session('admin');
        if ($admin) {
            if($admin['typ']=='1') {
                $this->assign('admin',$admin);
                if (I('btn_fbupdt')) {
                    $fbori = D('fbori');
                    if ($fbori->create()) {
                        $data = $fbori->add();
                        $this->redirect('Feedback/fbman','',0.01,'<script>alert(\'问卷修改成功！\');</script>');
                    } else
                        echo "<script>alert('修改问卷出现错误，请联系维护处理')</script>";
                } else if (I('btn_back'))
                    $this->redirect('Feedback/fbman','',0.01,'页面跳转中');
            } else 
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // 显示fbman2.html
    public function fbman2() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $this->assign('admin',$admin);
                $fbrls = M('fbrls');
                $teaId = $admin['id'];
                // 选出对应老师发布的问卷
                $data_fbrls = $fbrls->where("teaId=$teaId")->order('id desc')->select();
                for ($i=0; $i<count($data_fbrls); $i++) {
                    switch ($data_fbrls[$i]['schday']) {
                        case 1: $data_fbrls[$i]['schday']="一"; break;
                        case 2: $data_fbrls[$i]['schday']="二"; break;
                        case 3: $data_fbrls[$i]['schday']="三"; break;
                        case 4: $data_fbrls[$i]['schday']="四"; break;
                        case 5: $data_fbrls[$i]['schday']="五"; break;
                        case 6: $data_fbrls[$i]['schday']="六"; break;
                        case 7: $data_fbrls[$i]['schday']="日"; break;
                        default: break;
                    }
                }
                $this->assign('data_fbrls',$data_fbrls);
                // 操作判断
                if (I('btn_fbsts'))
                    $this->redirect(fbsts,array('id'=>I('btn_fbsts')),0.01,'页面跳转中');
                else
                    $this->display();
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
    // 显示fbsts.html
    public function fbsts() {
        $admin = session('admin');
        if ($admin) {
            if ($admin['typ']=='1') {
                $this->assign('admin',$admin);
                $fill = M('fill');
                $fbrls = M('fbrls');
                $fbori_id = I('id');
                // 联合查询
                $data_fill_state = $fill->join("stu ON stu.id = fill.stuId")->where("fbId='$fbori_id' and stat=0")->select();
                $data_fill_notpass = $fill->join("stu ON stu.id = fill.stuId")->where("fbId='$fbori_id' and scr<60")->order("scr desc")->select();
                $data_fill_score = $fill->join("stu ON stu.id = fill.stuId")->where("fbId='$fbori_id' and stat=1")->order("scr desc")->select();
                // dump($data_fill_state);
                // dump($data_fill_notpass);
                dump($data_fill_score);
                $rls = $fbrls->where("id='$fbori_id'")->find();
                // dump($rls);
                // 问卷不需要计算正确率
                if ($rls['typ']==1) {
                    for ($q=1; $q<=10; $q++) {
                        $sum = 0;
                        for ($a=1; $a<=5; $a++) {
                            if ($rls["a{$a}_q{$q}"]==="")
                                $rls["a{$a}_q{$q}_num"] = NULL;
                            else {
                                $sum += $rls["a{$a}_q{$q}_num"];
                                if ($a==$rls["a_q{$q}"])
                                    $cnt_ans = $rls["a{$a}_q{$q}_num"];
                            }
                        }
                        $tem = round($cnt_ans/$sum,4)*100;
                        if (!is_nan($tem))
                            $tem = $tem."%";
                        $rls["q{$q}_accuracy"] = $tem;
                    }
                } else {
                    for ($q=1; $q<=10; $q++) {
                        $rls["q{$q}_accuracy"] = "/";
                        for ($a=1; $a<=5; $a++)
                            if ($rls["a{$a}_q{$q}"]==="")
                                $rls["a{$a}_q{$q}_num"] = NULL;
                    }
                    for ($i=0; $i<count($data_fill_score); $i++)
                        $data_fill_score[$i]['scr'] = "/";
                    dump($data_fill_score);
                }
                // dump($rls);
                $this->assign('rls',$rls);
                $this->assign('data_fill_state',$data_fill_state);
                $this->assign('data_fill_notpass',$data_fill_notpass);
                $this->assign('data_fill_score',$data_fill_score);
                $this->display();
            } else
                $this->redirect('Login/logm','',0.01,'<script>alert(\'权限不足\');</script>');
        } else
            $this->redirect('Login/logm','',0.01,'<script>alert(\'登陆失效，请重新输入学号/职工号\');</script>');
    }
}