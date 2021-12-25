<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model 
{

    protected $table = 'Brand';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}