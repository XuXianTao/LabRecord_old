<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FboriModel extends Model{
	protected $_auto=array(
		array('teaId','getTeaId',1,"callback"),
		array('teaNam','getTeaNam',1,"callback"),
		array('creTim','getTim',1,"callback")
	);
	protected function getTeaId(){
		return session('admin')['id'];
	}
	protected function getTeaNam(){
		return session('admin')['nam'];
	}
	protected function getTim() {
		return date('Y-m-d H:i:s',time());
	}

}