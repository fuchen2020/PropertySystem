<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = true;
    protected $createTime = 'addtime';
    protected $updateTime = 'last_lg_time';

    protected $table='admin';

    public function getaddtimeAttr($value){

        return date('Y-m-d H:i:s',$value);
    }


}
