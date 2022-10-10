<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function classification()
    {
        return $this->belongsTo('App\Classification');
    }
}
