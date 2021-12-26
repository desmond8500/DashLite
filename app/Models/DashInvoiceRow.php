<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DashInvoiceRow extends Model 
{

    protected $table = 'dash_invoice_row';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function invoice()
    {
        return $this->belongsTo('App\Models\DashInvoice', 'invoice_id');
    }

    public function prority()
    {
        return $this->hasOne('App\Models\DashPriority', 'prority-_id');
    }

}