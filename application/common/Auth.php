<?php
namespace app\common;
use app\common\lib\exception\ApiException;
use think\Cache;
class Auth{

	public  static function checkSing($sing){

		if(empty($sing)){
			throw new ApiException('加密签名不存在',501);
		}	

		//1. 用户身份识别 
		$aes = new Aes();
		$sing_str = $aes->decrypt($sing);//token=test&type=sanxin&version=1.0
		
		parse_str($sing_str,$sing_arr);
		// halt($sing_arr);	

		if($sing_arr['token'] != 'test'){
			throw new ApiException('加密前面token不正确',501);
		}
		//2. api暴露
		if((time()-$sing_arr['time']) > 200){
			throw new ApiException('加密签名过期',501);
		}
		//3. 暴力请求
		if(Cache::get($sing)){
			throw new ApiException('加密签名已经使用',501);
		}
		Cache::set($sing,'abc');
	}
}

?>