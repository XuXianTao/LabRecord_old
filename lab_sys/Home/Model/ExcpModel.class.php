<?php
namespace Home\Model;
use Think\Model;
//model对应表名
class ExcpModel extends Model{
	protected $_auto=array(
		array('dat','mydate',1,'callback'),
		array('id','getId',1,"callback"),
		array('sts','0'),
		array('pc','getpc',1,"callback"),
		array('wire','getwire',1,"callback"),
		array('box','getbox',1,"callback"),
		array('oscp','getoscp',1,"callback"),
		array('gen','getgen',1,"callback"),
	);
	protected function mydate(){
		return date('Y-m-d H:i:s',time());
	}
	protected function getId(){
		return session('user')['id'];
	}
	protected function getpc(){
		return I('pc')?1:0;
	}
	protected function getwire(){
		return I('wire')?1:0;
	}
	protected function getbox(){
		return I('box')?1:0;
	}
	protected function getoscp(){
		return I('oscp')?1:0;
	}
	protected function getgen(){
		return I('gen')?1:0;
	}
}
?>