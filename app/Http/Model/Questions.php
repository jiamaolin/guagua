<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //连接数据库表
     
    protected $table = 'question_type';
//    主键
    protected $primaryKey = 'q_id';
//    时间戳
    public $timestamps = true;
//    白名单
//    public $fillable = ['post'];
//    黑名单
    protected $guarded = [];


    //  public function cars()
    // {
    //     return $this->belongsToMany('App\Cars');
    // }

}
