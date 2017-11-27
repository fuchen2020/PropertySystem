<?php

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use think\Controller;
use think\Db;

class IndexController extends BaseController
{
    /**
     * 会员登陆
     * @param $username
     * @param $pwd
     * @return \think\response\Json
     */
    public function login($username, $pwd)
    {

//        var_dump($username,$pwd);
        $user = Db::name('users')->where(['username' => $username])->find();
        if ($user) {
            if (password_verify($pwd, $user['password_hash'])) {
                //统计当前用户待付款订单数
                $waitPayCount = Db::name('order')->where(['users_id' => $user['id'], 'status' => 1])->count();
                //统计当前用户待收货订单数
                $waitReceiveCount = Db::name('order')->where(['users_id' => $user['id'], 'status' => 2])->count();
                $data = [
                    "success" => true,
                    "errorMsg" => "",
                    "result" => [
                        "id" => $user['id'],
                        "userName" => $user['username'],
                        "userIcon" => "",
                        "waitPayCount" => $waitPayCount ? $waitPayCount : 0,
                        "waitReceiveCount" => $waitReceiveCount ? $waitReceiveCount : 0,
//                       用户等级（1注册会员2铜牌会员3银牌会员4金牌会员5钻石会员）
                        "userLevel" => 1,
                    ],
                ];
                return $this->zJson($data);
            } else {
                return $this->zJson(null, false, '用户密码错误');
            }

        } else {

            return $this->zJson(null, false, '用户名不正确');
        }

    }

    /**
     * 会员注册
     * @return \think\response\Json
     */
    public function regist()
    {
        $result = Db::name('users')->insertGetId([
            'username' => request()->post('username'),
            'password_hash' => password_hash(request()->post('pwd'), PASSWORD_DEFAULT),
            'email' => uniqid() . '@qq.com',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        if ($result) {
            $data = [
                "success" => true,
                "errorMsg" => "",
                "result" => [
                    "id" => $result,
                ]
            ];
            return $this->zJson($data);
        } else {
            return $this->zJson(null, false, '注册失败');
        }
    }

    /**
     * 会员重置密码
     * @return \think\response\Json
     */
    public function reset()
    {

        $result = Db::name('users')->where(['username' => request()->post('username')])->update([
            'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
        ]);
        if ($result) {
            $data = [
                "success" => true,
                "errorMsg" => "",
                "result" => ""
            ];
            return $this->zJson($data);
        } else {
            return $this->zJson(null, false, '密码重置失败');
        }
    }

    /**
     * 按条件搜索商品
     * @return \think\response\Json
     */
    public function searchProduct()
    {
        $query = Db::name('goods');
        $re = request();
        $name = $re->post('keyword');
        $categoryId = $re->post('categoryId');
        $filterType = $re->post('filterType');
        $sortType = $re->post('sortType');
        $deliverChoose = $re->post('deliverChoose');
        $minPrice = $re->post('minPrice');
        $maxPrice = $re->post('maxPrice');
        $brandId = $re->post('brandId');
        if (isset($name)) {
            $query->where("name like '%{$name}%' or sn like '%{$name}%'");
        }
        if ($categoryId) {
            $query->where("goods_category_id = {$categoryId}");
        }
//        if ($filterType) {
//            $query->where("sort = {$filterType}");
//        }
        if ($sortType) {
            $query->where("sort = {$sortType}");
        }
//        if($deliverChoose){
//            $query->where( "$deliverChoose = {$deliverChoose}");
//        }
        if ($minPrice > 0) {
            $query->where("price >= {$minPrice}");
        }
        if ($maxPrice > 0) {
            $query->where("price <= {$maxPrice}");
        }
        if ($brandId) {
            $query->where("brand_id = {$brandId}");
        }
        $goods = $query->select();
//        var_dump($goods);exit;
        $total = count($goods);
        $rows = [];
        foreach ($goods as $v => $good) {
            $rows[$v]['id'] = $good['id'];
            $rows[$v]['price'] = $good['price'];
            $rows[$v]['name'] = $good['name'];
            $rows[$v]['iconUrl'] = $good['logo'];
            $rows[$v]['commentCount'] = 0;
            $rows[$v]['favcomRate'] = '60%';
        }
//        var_dump($rows);exit;
        if ($goods) {
            $data = [
                "success" => true,
                "errorMsg" => "",
                "result" => [
                    "total" => $total,
                    "rows" => $rows,
                ],
            ];
            return $this->zJson($data);
        } else {
            return $this->zJson(null, false, '搜索商品失败');
        }
    }

    /**
     * 购物车信息
     * @return \think\response\Json
     */
    public function shopCar()
    {

        $u_id = request()->post('userId');
        $goodss = [];
        $carts = Db::name('cart')->where(['u_id' => $u_id])->select();
        foreach ($carts as $cart) {
            $goods = Db::name('goods')->where(['id' => $cart['g_id']])->find();
//                var_dump($goods);
            $goods['amount'] = $cart['amount'];
            $goods['cart_id'] = $cart['id'];
            $goodss[] = $goods;
        }
        if ($goodss) {
            $res = [];
            foreach ($goodss as $goodo) {
                $res[]['id'] = $goodo['cart_id'];
                $res[]['buyCount'] = $goodo['amount'];
                $res[]['storeName'] = '京西商城';
                $res[]['pprice'] = $goodo['price'];
                $res[]['pimageUrl'] = $goodo['logo'];
                $res[]['pname'] = $goodo['name'];
                $res[]['pid'] = $goodo['id'];
                $res[]['stockCount'] = $goodo['stock'];
                $res[]['storeId'] = 0;
                $res[]['pversion'] = 1;
            }
            $data = [
                "success" => true,
                "errorMsg" => "",
                "result" => $res,
            ];
            return $this->zJson($data);
        } else {
            return $this->zJson(null, false, '购物车暂无数据');
        }
    }

    /**
     * 加入购物车
     * @return \think\response\Json
     */
    public function toShopCar()
    {
//userId  用户id
//productId  商品id
//buyCount  购买数量
        $userId = request()->post('userId');
        $productId = request()->post('productId');
        $buyCount = request()->post('buyCount');
        $cart=Db::name('cart')->where(['g_id'=>$productId,'u_id'=>$userId])->find();
        if($cart){
            $re=Db::name('cart')->where(['g_id'=>$productId,'u_id'=>$userId])->update([
                'amount'=>$cart['amount']+$buyCount,
            ]);
        }else {
            $re = Db::name('cart')->insert([
                'u_id' => $userId,
                'g_id' => $productId,
                'amount' => $buyCount
            ]);
        }
        if ($re) {
            $data = [
                "success"=> true,
                "errorMsg"=> "",
                "result"=> ""
            ];

            return $this->zJson($data);
        }else{
            return $this->zJson(null,false,'加入购物车失败');
        }
    }

    /**
     * 购物车商品数
     * @return \think\response\Json
     */
    public function shopCarNum(){
        $userId = request()->post('userId');

        $data=Db::name('cart')->where(['u_id'=>$userId])->count();
        if ($data) {
            $data = [
                "success"=> true,
                "errorMsg"=> "",
                "result"=>$data,
            ];

            return $this->zJson($data);
        }else{
            return $this->zJson(null,false,'购物车没有商品');
        }
    }

    public function delShopCar(){
        $userId = request()->post('userId');
        $id=request()->post('id');
        $re=Db::name('cart')->where(['u_id'=>$userId,'id'=>$id])->delete();
        if ($re) {
            $data = [
                "success"=> true,
                "errorMsg"=> "",
                "result"=>"",
            ];
            return $this->zJson($data);
        }else{
            return $this->zJson(null,false,'购物车商品删除失败');
        }
    }

}

