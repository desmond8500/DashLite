<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model 
{

    protected $table = 'Invoice';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id');
    }

    public function rows()
    {
        return $this->hasMany('App\Models\InvoiceRow');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Status', 'status_id');
    }

}