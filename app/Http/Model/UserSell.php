<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserSell extends Model
{
       //    连接数据库表
    protected $table = 'user_sell';
//    主键
    protected $primaryKey = 'id';
//    时间戳
    public $timestamps = true;
//    白名单
//    public $fillable = ['post'];
//    黑名单
    protected $guarded = [];
}
