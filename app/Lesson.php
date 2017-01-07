<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
