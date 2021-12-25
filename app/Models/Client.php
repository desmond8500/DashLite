<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model 
{

    protected $table = 'Client';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

}