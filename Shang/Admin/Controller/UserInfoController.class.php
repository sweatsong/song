<?php
namespace Admin\Controller;
use Think\Controller;
class UserInfoController extends Controller{
	public function index(){

		$citys=M('citys');
		$userinfo=M('userinfo');
      		$count      = $userinfo->count();// 查询满足要求的总记录数
       		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数
       		$show       = $Page->show();// 分页显示输出
    		 // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
       		$data = $userinfo->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();       
		foreach ($data as $key => $value) {
			//获取省名字
			$province=$value['province'];
			$name=$citys->where("id=$province")->find();
			$data[$key]['province']=$name['shortname'];
			//获取城市名字
			$city=$value['city'];
			$name=$citys->where("id=$city")->find();
			$data[$key]['city']=$name['shortname'];
		}

		$this->assign('data',$data);
		$this->assign('page',$show);// 赋值分页输出
		$this->display();
	}

	public function xls(){
		$citys=M('citys');
		$userinfo=M('userinfo');
		 $data = $userinfo->order('addtime desc')->select();       
		foreach ($data as $key => $value) {
			//获取省名字
			$province=$value['province'];
			$name=$citys->where("id=$province")->find();
			$data[$key]['province']=$name['shortname'];
			//获取城市名字
			$city=$value['city'];
			$name=$citys->where("id=$city")->find();
			$data[$key]['city']=$name['shortname'];
		}
	
		$str='<table class="result-tab" width="100%">
                        <tr > 
                            <th style="text-align:center">ID</th>
                            <th style="text-align:center">用户名</th>
                            <th style="text-align:center">电话号码</th>
                            <th style="text-align:center">省份</th>
                            <th style="text-align:center">城市</th>
                        </tr>';
                       
                        foreach ($data as $key => $value) {
                        	 $str.='<tr>
                     		 <td style="text-align:center">'.$value['id'].'</td>
                     		 <td style="text-align:center">'.$value['username'].'</td>
                                        <td style="text-align:center">'.$value['telephone'].'</td>
                                        <td style="text-align:center">'.$value['province'].'</td>
                                        <td style="text-align:center">'.$value['city'].'</td>
                        </tr>';
                        }
                         $str.='</table>';
                       

		$filename='cs';
        		header('application/vnd.ms-excel');
        		header('Content-Disposition: attachment; filename="'.$filename.'.xls"');
        		echo $str;
	}

}