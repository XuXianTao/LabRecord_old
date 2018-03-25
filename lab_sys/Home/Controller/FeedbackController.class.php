<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class FeedbackController extends Controller {
    use JUMP_HTML;
    public function fb(){
    	$this->display();
    }
    public function fbsts_a(){
    	$this->display();
    }
	public function fb_(){
    	echo asdouhasoduiahsd;
    	$knowc=I('knowledge');
    	echo $knowc;
    }
}