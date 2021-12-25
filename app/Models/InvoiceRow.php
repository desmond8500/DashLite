<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceRow extends Model 
{

    protected $table = 'InvoiceRow';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function invoice()
    {
        return $this->belongsTo('App\Models\Invoice', 'invoice_id');
    }

    public function prority()
    {
        return $this->hasOne('App\Models\Priority', 'prority-_id');
    }

}