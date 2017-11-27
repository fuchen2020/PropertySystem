<?php

namespace app\api\controller;

use think\Controller;

class BaseController extends Controller
{
    //返回json对象函数

    protected function zJson($result,$success=true,$errorMsg=''){
        $data=[
//            "false代表服务器返回数据失败，true代表成功",
            "success" => $success,
//            在success为false的时候返回对应的失败信息",
            "errorMsg" =>$errorMsg,
//            "此处返回为实际的数据，根据返回的数据类型确定result的最终类型"
            "result" =>$result,
        ];

        return json($data);
    }
}
