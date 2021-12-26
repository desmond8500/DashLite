<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashBrand extends Model 
{

    protected $table = 'dash_brand';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}