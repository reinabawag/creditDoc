<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
