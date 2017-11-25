<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class IndexController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch();
    }


}
