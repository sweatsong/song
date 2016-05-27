<?php
//定义命名空间
namespace Admin\Controller;
//引入核心文件
use Think\Controller;

//定义Login控制器
class LoginController extends Controller{
    
    //定义一个login方法，用于后台登录
    public function login(){
        //直接载入后台模板
        $this->display();
    } 
    //定义verify方法生产验证码
    public function verify(){
        //实例化验证对象
        $verify= new \Think\Verify();
        $verify-> codeSet="23456789";
        $verify-> useCurve=false; // 是否画混淆曲线
        $verify-> useNoise=false;// 是否添加杂点	
        $verify-> fontSize=120; // 验证码字体大小(px)
        $verify-> fontttf="4.ttf";
        $verify-> length=4;   // 验证码位数
        //调用生成验证码方法
        $verify->entry();
    }
    
    //定义一个checkLogin方法登录验证
    public function checkLogin(){
        //判断是否为POST请求
        if(IS_POST){
           //接收参数
           $username=$_POST['UserName'];
           $password=$_POST['PassWord']; 
           // $code=$_POST['Code'];
           // if(empty($code)){
           //     $this->error('验证码不能为空');
           // }
           //判断验证码是否为空
           // $verify=new \Think\Verify();
           // if(!$verify->check($code)){
           //     $this->error('验证码有误，请重新填写');
           // }
           //判断用户或密码是否为空
           if(empty($username)||empty($password)){
               //输出提示并返回
               $this->error('用户或密码不能为空');
           }
           //对密码进行MD5加密
          $password=md5($password);
           //实例化模型
           $user=D('User');
           $where=" name='$username' and password='$password' ";
           $row=$user->where($where)->find();
           //判断是否合法
           if($row['id']){
              //登录成功
              //设置session
              session('username',$row['name']);
              session('id',$row['id']);
              $this->redirect('Index/index');
           }else{
               //登陆失败
               $this->error('登陆失败');
           }
        }
    }
    
}