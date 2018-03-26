<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class ExcpModel extends Model{
	protected $_auto=array(
		array('dat','myDate',1,'callback'),
		array('id','getId',1,"callback"),
		array('sts','未处理'),
		array('pc','getPc',1,"callback"),
		array('wire','getWire',1,"callback"),
		array('box','getBox',1,"callback"),
		array('oscp','getOscp',1,"callback"),
		array('gen','getGen',1,"callback"),
		array('nam','getNam',1,"callback"),
		array('cla','getCla',1,"callback"),
		array('num','getNum',1,"callback"),
	);
	protected function myDate(){
		return date('Y-m-d H:i:s',time());
	}
	protected function getId(){
		return session('user')['id'];
	}
	protected function getPc(){
		return I('pc')?1:0;
	}
	protected function getWire(){
		return I('wire')?1:0;
	}
	protected function getBox(){
		return I('box')?1:0;
	}
	protected function getOscp(){
		return I('oscp')?1:0;
	}
	protected function getGen(){
		return I('gen')?1:0;
	}
	protected function getNam(){
		return session('user')[nam];
	}
	protected function getCla(){
		return session('user')[cla];
	}
	protected function getNum(){
		return session('user')[num];
	}
}
?>