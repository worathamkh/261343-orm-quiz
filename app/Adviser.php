<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adviser extends Model
{
    public $incrementing = false;
    
    function students()
    {
        // FIXME 1 DONE
        return $this->hasMany('App\Student');
    }
}
