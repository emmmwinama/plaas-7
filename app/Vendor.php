<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'business_id',
        'email',
        'department',
        'name',
        'phone',
        'physical_address',
        'postal_address'
    ];

    public function expense(){
        return $this->hasMany(\App\Expense::class);
    }
}
