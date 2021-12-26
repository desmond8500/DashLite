<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashInvoice extends Model 
{

    protected $table = 'dash_invoice';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function project()
    {
        return $this->belongsTo('App\Models\DashProject', 'project_id');
    }

    public function rows()
    {
        return $this->hasMany('App\Models\DashInvoiceRow');
    }

    public function status()
    {
        return $this->hasOne('App\Models\DashStatus', 'status_id');
    }

}