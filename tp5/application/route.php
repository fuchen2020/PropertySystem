<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
Route::rule('user/index','index/user/index');
Route::rule('user/add','index/user/add');
Route::rule('index/ws','index/index/ws');


//api接口路由

Route::get(":v/login","api/:v.index/login");
Route::post(":v/regist","api/:v.index/regist");
Route::post(":v/reset","api/:v.index/reset");
Route::post(":v/searchProduct","api/:v.index/searchProduct");
Route::post(":v/shopCar","api/:v.index/shopCar");
Route::post(":v/toShopCar","api/:v.index/toShopCar");
Route::post(":v/shopCarNum","api/:v.index/shopCarNum");
Route::post(":v/delShopCar","api/:v.index/delShopCar");
