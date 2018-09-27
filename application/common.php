<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function show($status,$message,$data,$httpcode){
	//格式化数据产出
    	$resp = [
    		'status'=>$status,//业务状态码
    		'message'=>$message,//描述
    		'data'=>$data
    	];

    	return json($resp,$httpcode);//http状态码	

}