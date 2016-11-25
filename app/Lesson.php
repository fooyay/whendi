<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
