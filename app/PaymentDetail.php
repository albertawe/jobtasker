<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $table = 'job_payment_detail';
    public function JobPost()
    {
        return $this->belongsTo('JobPost');
    }
}
