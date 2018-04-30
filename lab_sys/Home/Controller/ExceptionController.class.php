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
        $admin=session('admin');
        if ($admin){
            $type = "1";
            if(I('type')){
                $type = I('type');
            }
            if(I('selectType')){
                $type = I('typ');
            }
            $list = array();
            $num = 0;
            switch($type){
                case 1:
                    $page = ($btn-1) * 10;
                    if($page<0)$page = 0;
                    $excpsta=M('excpsta');
                    $num_list = $excpsta->count();
                    $num = ceil($num_list / 10);
                    if($page>=$num_list)$page-=10;
                    $this->assign('page',$page/10+1);
                    $list=$excpsta->limit($page,10)->select();
                    break;
                case 2:
                    $page = ($btn-1) * 10;
                    if($page<0)$page = 0;
                    $excpsta=M('excpsta');
                    $num_list = $excpsta->count();
                    $num = ceil($num_list / 10);
                    if($page>=$num_list)$page-=10;
                    $this->assign('page',$page/10+1);
                    $list=$excpsta->order(array('cla','num'))->limit($page,10)->select();
                    break;
                case 3:
                    $page = ($btn-1) * 10;
                    if($page<0)$page = 0;
                    $excp=M('excp');
                    $list_old=$excp->order('id')->select();
                    $list = array();
                    $j = 0;
                    for($i = 0 ; $i < count($list_old);$i++){
                        if(($list[$j]['id']!=$list_old[$i]['id']||$list[$j]['nam']!=$list_old[$i]['nam'])){
                            $j++;
                            $list[$j]=array(
                                    'id'        =>0,
                                    'nam'       =>'',
                                    'pc'        =>0,
                                    'wire'      =>0,
                                    'box'       =>0,
                                    'oscp'      =>0,
                                    'gen'       =>0,
                                    'oth'       =>0
                            );
                            $list[$j]['id'] = $list_old[$i]['id'];
                            $list[$j]['nam'] = $list_old[$i]['nam'];
                        };
                        if($list_old[$i]['pc']==true)
                            $list[$j]['pc']++;
                        if($list_old[$i]['wire']==true)
                            $list[$j]['wire']++;
                        if($list_old[$i]['box']==true)
                            $list[$j]['box']++;
                        if($list_old[$i]['oscp']==true)
                            $list[$j]['oscp']++;
                        if($list_old[$i]['gen']==true)
                            $list[$j]['gen']++;
                        if($list_old[$i]['oth']==true)
                            $list[$j]['oth']++;
                    }
                    $num_list = count($list);
                    $num = ceil($num_list / 10);
                    if($page>=count($num_list))$page-=10;
                    $this->assign('page',$page/10+1);
                    $list = array_slice($list,$page,10);
                    break;
                case 4:
                    $page = ($btn-1) * 10;
                    if($page<0)$page = 0;
                    $excp=M('excp');
                    $list_old=$excp->order(array('schday','schtim'))->select();
                    $list = array();
                    $j = 0;
                    for($i = 0 ; $i < count($list_old);$i++){
                        if(($list[$j]['schday']!=$list_old[$i]['schday']||$list[$j]['schtim']!=$list_old[$i]['schtim'])){
                            $j++;
                            $list[$j]=array(
                                    'schday'        =>0,
                                    'schtim'       =>'',
                                    'pc'        =>0,
                                    'wire'      =>0,
                                    'box'       =>0,
                                    'oscp'      =>0,
                                    'gen'       =>0,
                                    'oth'       =>0
                            );
                            $list[$j]['schday'] = $list_old[$i]['schday'];
                            $list[$j]['schtim'] = $list_old[$i]['schtim'];
                        };
                        
                        if($list_old[$i]['pc']==true)
                            $list[$j]['pc']++;
                        if($list_old[$i]['wire']==true)
                            $list[$j]['wire']++;
                        if($list_old[$i]['box']==true)
                            $list[$j]['box']++;
                        if($list_old[$i]['oscp']==true)
                            $list[$j]['oscp']++;
                        if($list_old[$i]['gen']==true)
                            $list[$j]['gen']++;
                        if($list_old[$i]['oth']==true)
                            $list[$j]['oth']++;
                    }
                    for($i = 0;$i<=$j;$i++){
                        switch($list[$i]['schday']){
                            case 1:
                                $list[$i]['schday'] = '星期一';
                            break;
                            case 2:
                                $list[$i]['schday'] = '星期二';
                            break;
                            case 3:
                                $list[$i]['schday'] = '星期三';
                            break;
                            case 4:
                                $list[$i]['schday'] = '星期四';
                            break;
                            case 5:
                                $list[$i]['schday'] = '星期五';
                            break;
                            case 6:
                                $list[$i]['schday'] = '星期六';
                            break;
                            case 7:
                                $list[$i]['schday'] = '星期日';
                            break;
                            default:
                            break;
                        }
                    }
                    $num_list = count($list);
                    $num = ceil($num_list / 10);
                    if($page>=count($num_list))$page-=10;
                    $this->assign('page',$page/10+1);
                    $list = array_slice($list,$page,10);
                break;
                case 5:
                    $page = ($btn-1) * 10;
                    if($page<0)$page = 0;
                    $dev=M('dev');
                    $num_list = $dev->count();
                    $num = ceil($num_list / 10);
                    if($page>=$num_list)$page-=10;
                    $this->assign('page',$page/10+1);
                    $list=$dev->order('cnt desc')->limit($page,10)->select();
                    for($i=0;$i<10;$i++){
                        switch($list[$i]['typ']){
                            case 1:
                                $list[$i]['typ'] = "PC";
                            break;
                            case 2:
                                $list[$i]['typ'] = '导线';
                            break;
                            case 3:
                                $list[$i]['typ'] = '电路箱';
                            break;
                            case 4:
                                $list[$i]['typ'] = '示波器';
                            break;
                            case 5:
                                $list[$i]['typ'] = '函数发生器';
                            break;
                            case 6:
                                $list[$i]['typ'] = '其它';
                            break;
                        }
                    }
                    break;
                    default:
                        dump($type);
                    break;
            }
            //dump($list);
            $this->assign('list',$list);
            $this->assign('num',$num);
            $this->assign('type',$type);
            $this->assign('admin',$admin);
            $this->display();
            
            
        
        }else $this->redirect('logm');
    }
}