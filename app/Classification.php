<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['description'];

    public function documents()
    {
        return $this->hasMany('App\Document');
    }
}
