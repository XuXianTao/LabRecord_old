<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FboriModel extends Model{
	protected $_auto=array(
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