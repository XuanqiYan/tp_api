<?php
namespace app\common\lib\exception;
use think\Exception;

class ApiException extends Exception{
	public $httpcode='500';
	public $message = '';
	public function __construct($message,$httpcode){
		$this->message = $message;
		$this->httpcode = $httpcode;
	}	
}
?>

