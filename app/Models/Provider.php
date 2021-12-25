<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model 
{

    protected $table = 'Provider';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}