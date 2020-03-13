<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'pid';
    public $timestamps = false;

    //允许添加的字段
    protected $fillable = ['money','mobile','uid','name','pubtime'];


}
