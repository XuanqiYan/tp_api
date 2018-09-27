<?php
namespace app\common\lib\exception;
use think\exception\Handle;

class ApiHandleException extends Handle{

	public $httpcode=500;

	public function render(\Exception $e){
		//如果是开发者希望看到完成的报错
		if(config('app_debug')==true){
			//原始的报错信息
			return parent::render($e);
		}	

		//如果是api报错
		if($e instanceof ApiException ){

			$this->httpcode = $e->httpcode;
		}

		return show(1,$e->getMessage(),[],$this->httpcode);	
	}

}
?>
