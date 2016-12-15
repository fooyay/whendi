<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function business()
    {
        return $this->belongsTo('App\Business');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
