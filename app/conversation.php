<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{
    public function message(){
        return $this->belongsTo('App\message');
    }
}
