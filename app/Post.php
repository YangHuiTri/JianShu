<?php

namespace App;

use App\Model;

class Post extends Model
{
    //定义关联的数据表
    protected $table = 'posts';
    //禁用时间
    //public $timestamps = false;
    //允许插入到数据库的字段
//    protected $fillable = ['title', 'content'];
    //protected $guarded;//不可以注入的字段

}
