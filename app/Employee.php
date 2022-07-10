<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'middle_name',
        'lastname',
        'gender',
        'email',
        'phone',
        'district',
        'description',
    ];

    public function task(){
        return $this->hasMany(\App\Task::class);
    }
}
