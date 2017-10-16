<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locker extends Model
{
    public $incrementing = false;
    
    function student()
    {
        // FIXME 2 DONE
        return $this->belongsTo('App\Student');
    }
}
