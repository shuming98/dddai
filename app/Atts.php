<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atts extends Model
{
    protected $table = 'atts';
    protected $primaryKey = 'aid';
    public $timestamps = false;

    protected $fillable = ['pid','uid','age'];

}
