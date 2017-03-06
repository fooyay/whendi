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

    public function hasEmployee(User $user = null)
    {
        if (null == $user)
            return false;

        $result = Employee::where("user_id", $user->id)
            ->where("business_id", $this->id)
            ->exists();

        return $result;
    }

    public function addEmployee(User $user)
    {
        $employee = new Employee();
        $employee->user_id = $user->id;
        $this->employees()->save($employee);
    }

    public function listEmployees()
    {
        return $this->employees()->get();
    }
}
