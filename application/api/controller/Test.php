<?php
namespace app\api\controller;
use app\common\lib\exception\ApiException;
class Test extends Base
{
    public function index()
    {

    	$data = ['name'=>'zhangsan','sex'=>'nan'];	
    	
    	//1.api数据标准化产出

    	//2.服务器异常处理

    	return show(1,'success',$data,201);
    
    }
}
