<?php
namespace Home\Controller;
use Think\Controller;
require 'JUMP_HTML.trait';
class LoginController extends Controller {
    use JUMP_HTML;
    public function login() {
        if (session(MERCHANT)) {
            $this->redirect(U('User/Index/index'));
        } else {
            $this->display();
        }
    }
}