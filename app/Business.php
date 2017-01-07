<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function employees()
    {
        return $this->hasMany('App\Employee');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function slug()
    {
        return str_slug($this->name);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
