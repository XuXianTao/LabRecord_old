<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FbrlsModel extends Model{
	protected $field = true;
	protected $_auto=array(
		array('teaId','getTeaId',self::MODEL_BOTH,'callback'),
		array('teaName','getTeaname',self::MODEL_BOTH,"callback"),
		array('wDay','getWDay',self::MODEL_BOTH,"callback"),
		array('stuNum','0'),
		array('rlsTim','getTim',self::MODEL_BOTH,"callback"),
		array('claTim','getclaTim',self::MODEL_BOTH,"callback"),
		array('ddl','getDDL',self::MODEL_BOTH,"callback")
	);
	protected function getTeaId(){
		return session('admin')['id'];
	}
	protected function getTeaname(){
		return session('admin')['nam'];
	}
	protected function getWDay(){
		return I('wDay');
	}
	protected function getclaTim(){
		return I('timInt');
	}
	protected function getTim() {
		return date('Y-m-d H:i:s',time());
	}
	protected function getDDL(){
		return date('Y-m-d H:i:s',strtotime('+'.I('min').'minute'));
	}
}