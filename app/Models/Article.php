<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model 
{

    protected $table = 'Article';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function provider()
    {
        return $this->hasOne('App\Models\Provider');
    }

    public function brand()
    {
        return $this->hasOne('App\Models\Brand');
    }

}