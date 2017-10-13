<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = false;
    
    public function locker()
    {
        // FIXME 3
        return $this->___3___('App\__?__');
    }

    public function adviser()
    {
        // FIXME 4
        return $this->___4___;
    }
}