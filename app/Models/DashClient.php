<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashClient extends Model
{

    protected $table = 'dash_client';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description',
        'logo',
        'address',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\DashProject');
    }

}
