<?php
namespace app\api\controller;
use think\Controller;
use app\common\Auth;
use app\common\Aes;

class Base extends Controller
{

	public function _initialize(){
		//$sing = $this->setSing();
		//halt($sing);
		$header_arr = request()->header();
		//halt($header_arr);
		Auth::checkSing($header_arr['sing']);
	
    }

    //客户端行进加密操作
    public function setSing(){
    	//生成一个加密前面 Aes
    	
		$aes = new Aes();
		$sing_arr = [
			'token'=>'test',
			'version'=>'1.0',
			'type'=>'sanxin',
			'time'=>time()
		];
		//排序
		ksort($sing_arr);

		$sing_str = http_build_query($sing_arr);
		//halt($sing_str);
		return $aes->encrypt($sing_str);

		//7fzufWfc7xiW+3FR481XBRD2gI3DjkybFybM/d/ey9hSEXvpz61TEQlbK7/DBvDe15idimW3V/ZI/9z8eax+VQ==
		
    }

    /*	
		创建模型
			关联关系
		使用数据填充（文章）
			
	功能：
		登录注册操作	
		用户的增删改查 
		查看每一个用户的文章				

    */
}	
?>