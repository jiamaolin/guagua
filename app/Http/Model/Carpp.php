<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Carpp extends Model
{
    //
    //    连接数据库表
    protected $table = 'home_carpp';
//    主键
    protected $primaryKey = 'p_id';
//    时间戳
    public $timestamps = false;
//    白名单
//    public $fillable = ['post'];
//    黑名单
    protected $guarded = [];

}
