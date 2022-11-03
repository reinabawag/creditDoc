<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name'];

    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
