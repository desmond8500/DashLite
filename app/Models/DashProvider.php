<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashProvider extends Model 
{

    protected $table = 'dash_provider';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}