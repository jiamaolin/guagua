<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class HomeUser extends Model
{
    //连接数据库表
     
    protected $table = 'home_users';
//    主键
    protected $primaryKey = 'user_id';
//    时间戳
    public $timestamps = true;
//    白名单
//    public $fillable = ['post'];
//    黑名单
    protected $guarded = [];
}
