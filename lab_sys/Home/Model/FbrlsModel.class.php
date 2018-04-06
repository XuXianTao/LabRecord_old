<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FbrlsModel extends Model{
	protected $_auto=array(
		array('dat','myDate',1,'callback'),
		array('id','getId',1,"callback"),
		array('kno','getKno',1,"callback"),
	);
	protected function myDate(){
		return date('Y-m-d H:i:s',time());
	}
	protected function getId(){
		return session('user')['id'];
	}
	protected function getKno(){
		return I('knowledge');
	}
}