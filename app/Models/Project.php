<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model 
{

    protected $table = 'Project';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id');
    }

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'status_id');
    }

}