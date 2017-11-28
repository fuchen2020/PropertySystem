### 会员模块
---
>1. 会员登陆
---
URL：http://www.tpp.com/v1/login

>方式：get

参数 |是否必须 | 说明
---|---|---
username |是 | 用户名
pwd |是 | 密码

```
{
    "success": true,
    "errorMsg": "",
    "result": {
        "id": 5,
        "userName": "aa",
        "userIcon": "",
        "waitPayCount": 0,
        "waitReceiveCount": 0,
        "userLevel": 1
    }
}
```
---
> 2. 会员注册
---
>URL:http://www.tpp.com/v1/regist

>方式：POST

参数 |是否必须 | 说明
---|---|---
username |是 | 用户名
pwd |是 | 密码

```
{
  "success": true,
  "errorMsg": "",
  "result": {
    "id": 7
  }
}
```
---
> 3. 密码重置
---
>URL:http://www.tpp.com/v1/reset

>方式：POST

参数 |是否必须 | 说明
---|---|---
username |是 | 用户名

```json
{
  "success": true,
  "errorMsg": "",
  "result": ""
}

```
### 首页模块
---
> 4. 首页banner（待写）
---
>URL:http://www.tpp.com/v1/banner

>方式：get

参数 |是否必须 | 说明
---|---|---
adKind |是 | 广告类型(1导航banner，2广告banner)

```json
{
   "success": true,
   "errorMsg": "",
   "result": [
     {
       "id": 广告id,
       "type": 跳转类型（1跳转到网页，2跳转到商品详情，3跳转到分类去）,
       "adUrl": "图片路径",
       "webUrl": "如果是跳转网页类型，则返回网页地址",
       "adKind": 广告类型（1为导航banner，2为广告banner）
      }
   ]
}
```
---
> 5. 首页搜索
---
>URL:http://www.tpp.com/v1/searchProduct

>方式：psot

参数 |是否必须 | 说明
---|---|---
keyword  |是 | 商品名称关键字
categoryId  | 否  |  分类id
filterType  | 否  |  排序类型（1-综合 2-新品 3-评价）
sortType  | 否 |  排序条件（1-销量 2-价格高到低 3-价格低到高）
deliverChoose  | 否 |  选择类型（0-代表无选择 1代表京东配送 2-代表货到付款 4-代表仅看有货 3代表条件1+2 5代表条件1+4 6代表条件2+4）
minPrice  | 否 |  最低价格
maxPrice  | 否 |  最高价格
brandId  | 否 |  品牌id

```json
{
   "success": true,
   "errorMsg": "",
   "result": {
       "total": 商品数量,
       "rows": [
           {
               "id": '商品id',
               "price": '商品价格',
               "name": "商品名称",
               "iconUrl": "商品图片",
               "commentCount": 评论数,
               "favcomRate": 好评率
           }
       ]
   }
}
 
```
---
> 6. 购物车信息
---
>URL:http://www.tpp.com/v1/shopCar

>方式：psot

参数 |是否必须 | 说明
---|---|---
userId  | 是 |  用户id

```json
{
   "success": true,
   "errorMsg": "",
   "result": [
       {
           "id": 购物车明细id,
           "buyCount": 购买数,
           "storeName": "商店名称",
           "pprice": 价格,
           "pimageUrl": "商品图片路径",
           "pname": "商品名称",
           "pid": 商品id,
           "stockCount": 库存,
           "storeId": 商店id,
           "pversion": "商品版本"
       }
   ]
}
```
---
> 7. 加入购物车
---
>URL:http://www.tpp.com/v1/toShopCar

>方式：psot

参数 |是否必须 | 说明
---|---|---
userId  | 是 |  用户id
productId  | 是 |  商品id
buyCount  | 是 |  购买数量

```json
{
  "success": true,
  "errorMsg": "",
  "result": ""
}

```
---
> 8. 购物车商品数
---
>URL:http://www.tpp.com/v1/shopCarNum

>方式：psot

参数 |是否必须 | 说明
---|---|---
userId |是 | 用户id

```json
{
  "success": true,
  "errorMsg": "",
  "result": 2
}
```
---
> 9. 购物车
---
>URL:http://www.tpp.com/v1/shopCarNum

>方式：psot

参数 |是否必须 | 说明
---|---|---
userId |是 | 用户id

```json
{
  "success": true,
  "errorMsg": "",
  "result": 2
}
```
---
---
> 10. 删除购物车明细
---
>URL:http://www.tpp.com/v1/delShopCar

>方式：psot

参数 |是否必须 | 说明
---|---|---
userId  | 是 |  用户id
id  | 是 |  明细id

```json
{
  "success": true,
  "errorMsg": "",
  "result": ""
}
```