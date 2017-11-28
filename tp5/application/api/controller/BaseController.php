<?php

namespace app\api\controller;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\ValidationData;
use think\Controller;
use Lcobucci\JWT\Parser;

class BaseController extends Controller
{
    //token验证------------------------------------------------------------
    protected function _initialize()
    {
        if(request()->action()!='login'){
            $token =request()->param('sign');
            $re=[
                "success" => false,
                "errorMsg" =>'签名无效',
                "result" =>null,
            ];
            if (!$token) {
                exit(json_encode($re));
            }

            $token = (new Parser())->parse((string) $token);
            $signer = new Sha256();
            $data=new ValidationData();
            if ($token->verify($signer, 'chenziyong')===false && $token->validate($data)===false) {
                exit(json_encode($re));
            }
        }

        parent::_initialize();
    }
//-------------------------------------------------------------------------

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
