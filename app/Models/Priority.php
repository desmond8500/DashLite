<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priority extends Model 
{

    protected $table = 'Priority';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}