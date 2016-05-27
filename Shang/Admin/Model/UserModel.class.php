<?php
//定义命名空间
namespace Admin\Controller;
//引用核心Model类文件
use Think\Model;

//定义模型
class UserModel extends Model{
    //定义user表字段
    protected $fields=array('name','password');
   // protected $pk='id';
}