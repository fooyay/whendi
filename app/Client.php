<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public function business()
    {
        return $this->belongsTo('App\Business');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
