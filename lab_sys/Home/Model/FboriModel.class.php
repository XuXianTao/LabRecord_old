<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FboriModel extends Model{
	protected $_auto=array(
		array('bId','getBId',1,"callback"),
		array('bNam','getNam',1,"callback"),
		array('creTim','getTim',1,"callback")
	);
	protected function getBId(){
		return session('admin')['id'];
	}
	protected function getNam(){
		return session('admin')['nam'];
	}
	protected function getTim() {
		return date('Y-m-d H:i:s',time());
	}

}