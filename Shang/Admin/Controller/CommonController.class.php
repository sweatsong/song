<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
    //防止用户翻墙行为
    public function  _initialize(){
        //判断用户是否登陆
        if(!session("?username")){
            $this->redirect("Login/login");
        }
    }
}