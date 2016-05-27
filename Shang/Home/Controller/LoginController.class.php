<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function index(){
		$this->display();
	}

	public function ajaxsheng(){
		$citys=M('citys');
		$data=$citys->where("LevelType=1")->select();
		
		$this->ajaxReturn($data);
	}

	public function ajaxcity(){
		$citys=M('citys');
		$pid=I('post.pid');
		$data=$citys->where("ParentId=$pid")->select();
		
		$this->ajaxReturn($data);
	}

	/*public function add(){
		$data['addtime']=time();
		$data['username']=$_POST['mingzi'];
		$data['telephone']=$_POST['telephone'];
		$data['province']=$_POST['sheng'];
		$data['city']=$_POST['city'];
		if($data['username']==null){
			$this->error('请填写您的姓名');
		}
		if($data['telephone']==null){
			$this->error('请填写您的电话');
		}
		if($data['province']==0 || $data['city']==0){
			$this->error('请选择您的地址');
		}
		//dump($data);exit();
		$userinfo=M('userinfo');
		$flag=$userinfo->add($data);
		if($flag){
			$this->redirect("Index/index");
		}else{
			$this->error('添加失败');
		}
	}*/
	public function add(){
		$userinfo=D('userinfo');
		$data=$userinfo->create();
		if(!$data){
			$this->error($userinfo->getError());
		}else{
			$data['addtime']=time();
			$flag=$userinfo->add($data);
			if($flag){
				$this->redirect("Index/index");
			}else{
				$this->error('添加失败');
			}

		}
	}

	public function jump(){
		$this->display();
	}


}