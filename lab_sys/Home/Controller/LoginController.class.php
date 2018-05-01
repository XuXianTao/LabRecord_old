<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class LoginController extends Controller {
    use JUMP_HTML;
    // 显示log.html
    public function log() {
        // 清空session
        session(null);
        $this->display();
    }
    // log.html中使用，提交处理
    public function log_() {
        // 取得学号值
        $account = $_POST['id'];
        // 若学号值不为空
    	if ($account) {
            // M方法实例化stu表
            $Exc = M('stu');
            // 获取stu表中学号为取得的学号值的第一条数据，变量user类似于C/C++结构体数组
            $user = $Exc->where("id=$account")->find();
            // 获取客户机局域网地址
            $ip = get_client_ip();
            // M方法实例化
            $Exc = M('ip');
            // select ip对应的位置，loc类似于C/C++语言结构体数组
            $loc = $Exc->where("ip='$ip'")->find();
            // 若 stu表中学号为取得的学号值的数据 存在
			if ($user) {
                // 调试用，部署时需将以下一行解除注释
                // if($loc) {
                // 调试用，部署时需将以下两行注释，否则提交将会固定为B103：4号机
                    $cla = 'C103';
                    $num = '1';
                    // 调试用，部署时需将以下两行解除注释
                    // $cla = $loc['cla'];
                    // $num = $loc['num'];
                    // 添加字段
                    $user['cla'] = $cla;
                    $user['num'] = $num;
                    // 位置保存到cookie中
                    cookie('cla',$cla);
                    cookie('num',$num);
                    // 登录状态保存到session中
                    session('user',$user);
                    $this->redirect('main/main');
                // 调试用，部署时需将以下两行解除注释
                // } else
                //    $this->error('请使用实验室电脑登录该系统'.$ip);
			} else
				$this->error('学号不存在');
        } else
            $this->error('学号不能为空');
    }
    // 显示logm.html
    public function logm() {
        session(null);
        $this->display();
    }
    // logm.html中使用，提交处理
    public function logm_() {
        $id = $_POST['id'];
        if ($id) {
            $man = M('man');
            $admin = $man->where("id=$id")->find();
            if ($admin) {
                if ($admin['typ']==1) {
                    date_default_timezone_set("Asia/Shanghai");
                    $now = strtotime("now");
                    $lastYear = date('Y',strtotime("-1 year"));  
                    $year = date('Y');
                    $nextYear = date('Y',strtotime("+1 year"));  
                    $date1 = strtotime(date("Y-m-d H:i:s",mktime(0,0,0,2,1,$year)));
                    $date2 = strtotime(date("Y-m-d H:i:s",mktime(0,0,0,8,1,$year)));
                    if ($now<$date1) {
                        $admin['schYear'] = "$lastYear-$year";
                        $admin['schTerm'] = 1;
                    } else if ($now>=$date1 && $now<$date2) {
                        $admin['schYear'] = "$lastYear-$year";
                        $admin['schTerm'] = 2;
                    } else if ($now>=$date2) {
                        $admin['schYear'] = "$year-$NextYear";
                        $admin['schTerm'] = 1;
                    }
                    $man->where("id=$id")->save($admin);
                }
                session('admin',$admin);
                $this->redirect('main/main_m');
            } else
                $this->error('职工号/学号不存在');
        } else
            $this->error("职工号/学号不能为空");
    }
}
