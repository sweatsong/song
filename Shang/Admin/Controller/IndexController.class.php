<?php
//定义命名空间
namespace Admin\Controller;
//定义IndexController控制器
class IndexController extends CommonController{
    //定义index方法载入index模板
    public function index(){
        //载入模板
        $this->display();
    }
}