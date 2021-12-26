<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashProject extends Model 
{

    protected $table = 'dash_project';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function client()
    {
        return $this->belongsTo('App\Models\DashClient', 'client_id');
    }

    public function invoices()
    {
        return $this->hasMany('App\Models\DashInvoice');
    }

    public function status()
    {
        return $this->hasOne('App\Models\DashStatus', 'status_id');
    }

}