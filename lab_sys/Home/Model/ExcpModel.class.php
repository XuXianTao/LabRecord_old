<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class ExcpModel extends Model{
	protected $_auto=array(
		array('dat','getDate',1,'callback'),
		array('id','getId',1,"callback"),
		array('nam','getNam',1,"callback"),
		array('cla','getCla',1,"callback"),
		array('num','getNum',1,"callback"),
		array('delId','getDelId',1,"callback"),
		array('delNam','getDelNam',1,"callback"),
		array('sts','getSts',1,"callback"),
		array('delWay','getDelWay',1,"callback"),
		array('delTim','getDelTim',1,"callback"),
		array('pc','getPc',1,"callback"),
		array('wire','getWire',1,"callback"),
		array('box','getBox',1,"callback"),
		array('oscp','getOscp',1,"callback"),
		array('gen','getGen',1,"callback"),
		array('oth','getOth',1,"callback"),
		array('des','getDes',1,"callback")
	);
	protected function getDate() {
		return date('Y-m-d H:i:s',time());
	}
	protected function getId() {
		return session('user')['id'];
	}
	protected function getNam() {
		return session('user')[nam];
	}
	protected function getCla() {
		return cookie('cla');
	}
	protected function getNum() {
		return cookie('num');
	}
	protected function getDelId() {
		return I('delId');
	}
	protected function getDelNam() {
		return I('delNam');
	}
	protected function getSts() {
		return '未处理';
	}
	protected function getDelWay() {
		return I('delWay');
	}
	protected function getDelTim() {
		return I('delTim');
	}
	protected function getPc() {
		return I('pc')?1:0;
	}
	protected function getWire() {
		return I('wire')?1:0;
	}
	protected function getBox() {
		return I('box')?1:0;
	}
	protected function getOscp() {
		return I('oscp')?1:0;
	}
	protected function getGen() {
		return I('gen')?1:0;
	}
	protected function getOth() {
		return I('oth')?1:0;
	}
	protected function getDes() {
		return I('Des');
	}
}
?>