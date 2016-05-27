<?php
namespace Home\Model;
use Think\Model;
class UserinfoModel extends Model{

	//字段映射
	protected $_map=array(
		'sheng'=>'province',
		);

	//字段验证
	protected $_validate=array(
			
			array('username','require','请填写您能的姓名'),  
			array('telephone','/^1[34578]\d{9}$/','请输入正确的手机号码',1,'regex',1),//正则验证
			array('province','require','请填写您能的地址'),  
		);
	

		
}