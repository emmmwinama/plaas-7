<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'business_id',
        'email',
        'department',
        'phone',
        'physical_address',
        'postal_address',
    ];

    public function sale(){
        return $this->hasMany(\App\Sale::class);
    }
}
