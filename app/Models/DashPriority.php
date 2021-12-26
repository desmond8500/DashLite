<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashPriority extends Model 
{

    protected $table = 'dash_priority';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}