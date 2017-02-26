<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Employee;
use App\User;

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

    public function hasEmployee($user = null)
    {
        if(null == $user)
            return false;

        dd($this->employees());
//        $result = Employee::where("user_id", $user->id)
//            ->where("business_id", $this->id)
//            ->exists();

//        return $result;
    }
}
