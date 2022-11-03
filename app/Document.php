<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function classification()
    {
        return $this->belongsTo('App\Classification');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
