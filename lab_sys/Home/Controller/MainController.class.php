<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class MainController extends Controller {
    use JUMP_HTML;
	public function main(){
        $this->display();
	}
    
    public function test($s1){
    	echo 'test'.$s1;
    }
}