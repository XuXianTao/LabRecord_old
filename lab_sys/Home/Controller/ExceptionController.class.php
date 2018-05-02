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

        if ($temp=$Exc->create()){
            dump($temp);
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
// list1
                    // $page = ($btn-1) * 10;
                    // if($page<0)$page = 0;
                    $excpsta=M('excpsta');
                    $num_list1 = $excpsta->count();
                    $num1 = ceil($num_list1 / 10);
                    // if($page>=$num_list)$page-=10;
                    // $this->assign('page',$page/10+1);
                    $list1=$excpsta->order(array('cla','num'))->select();
//list2
                    // $page = ($btn-1) * 10;
                    // if($page<0)$page = 0;
                    $excp=M('excp');
                    $list_old=$excp->order('id')->select();
                    $list2 = array();
                    $j = 0;
                    for($i = 0 ; $i < count($list_old);$i++){
                        if(($list2[$j]['id']!=$list_old[$i]['id']||$list2[$j]['nam']!=$list_old[$i]['nam'])){
                            $j++;
                            $list2[$j]=array(
                                    'id'        =>0,
                                    'nam'       =>'',
                                    'pc'        =>0,
                                    'wire'      =>0,
                                    'box'       =>0,
                                    'oscp'      =>0,
                                    'gen'       =>0,
                                    'oth'       =>0
                            );
                            $list2[$j]['id'] = $list_old[$i]['id'];
                            $list2[$j]['nam'] = $list_old[$i]['nam'];
                        };
                        if($list_old[$i]['pc']==true)
                            $num_list2[$j]['pc']++;
                        if($list_old[$i]['wire']==true)
                            $list2[$j]['wire']++;
                        if($list_old[$i]['box']==true)
                            $list2[$j]['box']++;
                        if($list_old[$i]['oscp']==true)
                            $list2[$j]['oscp']++;
                        if($list_old[$i]['gen']==true)
                            $list2[$j]['gen']++;
                        if($list_old[$i]['oth']==true)
                            $list2[$j]['oth']++;
                    }
                    $num_list2 = count($list2);
                    $num2 = ceil($num_list / 10);
                    // if($page>=count($num_list))$page-=10;
                    // $this->assign('page',$page/10+1);
                    // $list = array_slice($list,$page,10);
//list3
                    // $page = ($btn-1) * 10;
                    // if($page<0)$page = 0;
                    $excp=M('excp');
                    $list_old=$excp->order(array('schday','schtim'))->select();
                    $list3 = array();
                    $j = 0;
                    for($i = 0 ; $i < count($list_old);$i++){
                        if(($list3[$j]['schday']!=$list_old[$i]['schday']||$list3[$j]['schtim']!=$list_old[$i]['schtim'])){
                            $j++;
                            $list3[$j]=array(
                                    'schday'        =>0,
                                    'schtim'       =>'',
                                    'pc'        =>0,
                                    'wire'      =>0,
                                    'box'       =>0,
                                    'oscp'      =>0,
                                    'gen'       =>0,
                                    'oth'       =>0
                            );
                            $list3[$j]['schday'] = $list_old[$i]['schday'];
                            $list3[$j]['schtim'] = $list_old[$i]['schtim'];
                        };

                        if($list_old[$i]['pc']==true)
                            $list3[$j]['pc']++;
                        if($list_old[$i]['wire']==true)
                            $list3[$j]['wire']++;
                        if($list_old[$i]['box']==true)
                            $list3[$j]['box']++;
                        if($list_old[$i]['oscp']==true)
                            $list3[$j]['oscp']++;
                        if($list_old[$i]['gen']==true)
                            $list3[$j]['gen']++;
                        if($list_old[$i]['oth']==true)
                            $list3[$j]['oth']++;
                    }
                    for($i = 0;$i<=$j;$i++){
                        switch($list3[$i]['schday']){
                            case 1:
                                $list3[$i]['schday'] = '星期一';
                            break;
                            case 2:
                                $list3[$i]['schday'] = '星期二';
                            break;
                            case 3:
                                $list3[$i]['schday'] = '星期三';
                            break;
                            case 4:
                                $list3[$i]['schday'] = '星期四';
                            break;
                            case 5:
                                $list3[$i]['schday'] = '星期五';
                            break;
                            case 6:
                                $list3[$i]['schday'] = '星期六';
                            break;
                            case 7:
                                $list3[$i]['schday'] = '星期日';
                            break;
                            default:
                            break;
                        }
                    }
                    $num_list3 = count($list3);
                    $num3 = ceil($num_list3 / 10);
                    // if($page>=count($num_list))$page-=10;
                    // $this->assign('page',$page/10+1);
                    // $list = array_slice($list,$page,10);
//list4
                    // $page = ($btn-1) * 10;
                    // if($page<0)$page = 0;
                    $dev=M('dev');
                    $num_list4 = $dev->count();
                    $num4 = ceil($num_list4 / 10);
                    // if($page>=$num_list)$page-=10;
                    // $this->assign('page',$page/10+1);
                    $list4=$dev->order('cnt desc')->select();
                    for($i=0;$i<10;$i++){
                        switch($list4[$i]['typ']){
                            case 1:
                                $list4[$i]['typ'] = "PC";
                            break;
                            case 2:
                                $list4[$i]['typ'] = '导线';
                            break;
                            case 3:
                                $list4[$i]['typ'] = '电路箱';
                            break;
                            case 4:
                                $list4[$i]['typ'] = '示波器';
                            break;
                            case 5:
                                $list4[$i]['typ'] = '函数发生器';
                            break;
                            case 6:
                                $list4[$i]['typ'] = '其它';
                            break;
                        }
                    }


            //dump($list);
            $this->assign('list1',$list1);
            $this->assign('list2',$list2);
            $this->assign('list3',$list3);
            $this->assign('list4',$list4);
            $this->assign('num',$num);
            $this->assign('type',$type);
            $this->assign('admin',$admin);
            $this->display();



        }else $this->redirect('logm');
    }
}