<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashArticle extends Model 
{

    protected $table = 'dash_article';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function provider()
    {
        return $this->hasOne('App\Models\DashProvider');
    }

    public function brand()
    {
        return $this->hasOne('App\Models\DashBrand');
    }

}