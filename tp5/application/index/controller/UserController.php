<?php

namespace app\index\controller;

use app\index\model\User;
use think\Controller;
use think\Request;

class UserController extends Controller
{
    public function index()
    {
        $data=User::all();
        return $this->fetch('list',compact('data'));
    }

    public function add()
    {

        if(\request()->isPost()){
            $re=User::create([
                'username'=>\request()->post('username'),
                'password'=>\request()->post('password'),
            ]);
            if($re){
                $this->success('添加成功',url('index/user/index'));
            }

        }


        return $this->fetch('add');
    }


}
