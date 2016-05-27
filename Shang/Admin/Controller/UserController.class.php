<?php
//定义命名空间
namespace Admin\Controller;

//定义user控制器
class UserController extends CommonController{

    //定义一个index方法，用于显示
    public function index(){
       //实例化模型
       $user=D("User");
       //select方法读取所有数据
       $data=$user->select();
       //assign方法分配变量到模板文件
       $this->assign('data',$data);
       $this->display();
    }
    
    //定义一个add方法实现用户的添加
    public function add(){
        //加载模板
        $this->display();
    }
    //定义一个addOK方法实现添加数据
    public function addOk(){
        //接收数据
        if(IS_POST){
            $data=array();
            $data['name']=$_POST['username'];
            $data['password']=md5($_POST['password']);
            $username=$data['name'];
            $password=$data['password'];
            //判断用户或密码是否为空
            if(empty($username)||empty($password)){
                //输出提示并返回
                $this->error('用户或密码不能为空');
            }
            //实例化模型
            $user=D('User');
            //验证用户名是否存在
            $where=" name='$username'  ";
            $row=$user->where($where)->find();
            if($row['id']){
                $this->error('用户名已存在，请重新命名');
            }
            //调用add方法实现添加操作
            $flag=$user->add($data);
            if($flag){
                $this->success('添加成功',"index",3);
            }else{
                $this->error("添加失败");
            }
        }
    }
    
    //定义一个edit方法用于用户修改显示
    public function edit(){
        $id=$_GET['id'];
        $username=session('username');
        if(session('id')!=$id){
        	$this->error('无修改权限');
        }
        //通过assign方法分配一些变量到模板中
        $this->assign('id',$id);
        $this->assign('name',$username);
        $this->display();
    }
    //定义一个editok方法用于用户修改操作
    public function editOk(){
        $id=$_POST['id'];
        $data['name']=$_POST['username'];
        $data['password']=$_POST['password'];
        //验证是否为空
        if(empty($data['name'])||empty($data['password'])){
            $this->error('用户名或密码不能为空');
        }
       $data['password']=md5($_POST['password']);
        //实例化模型
        $user=D('User');
        //验证用户名是否存在
        $username=$data['name'];
        $where=" name='$username' and id!='$id' ";
        $row=$user->where($where)->find();
        if($row['id']){
            $this->error('该户名已存在，请重新命名');
        }
        //更新操作
       $flag=$user->where('id='.$id)->save($data);
   //   dump($user->getLastSql()); exit;
         if($flag){
             session('username',$username);
             session('id',$id);
             $this->success('修改成功',"index",3);            
        }else{
             $this->error('修改失败');
        } 
        
    }
    
    
    //定义一个dele方法用于用户修改
    public function dele(){
        $id=$_GET['id'];
        if(session('id')!=$id){
            $this->error('无删除权限');
        }
        $user=D('User');
        $flag=$user->delete($id);
        if($flag){
            session(null);
            $this->success('删除成功，等待退出','index',3);
        }else {
            $this->error('删除失败');
        }
    }
    
    //定义一个quit方法用于用户修改
    public function quit(){
    	session(null);
    	$this->redirect("Index/index");
    }
   
}