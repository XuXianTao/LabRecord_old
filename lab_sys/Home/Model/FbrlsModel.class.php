<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class FbrlsModel extends Model{
	protected $field = true;
	protected $_auto=array(
		array('teaId','getTeaId',1,'callback'),
		array('teaName','getTeaname',1,"callback"),
		array('wDay','getWDay',1,"callback"),
		array('bTim','getBTim',1,'callback'),
		array('eTim','getETim',1,'callback'),
		array('styNum','0'),
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
	protected function getBTim(){
		return I('timInt');
	}
	protected function getETim(){
		return I('timInt');
	}
}