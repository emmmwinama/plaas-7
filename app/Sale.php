<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'description',
        'customer',
        'net',
        'tax',
    ];

    public function sale_item(){
        $this->hasMany(\App\Sale_item::class);
    }

    public function customer(){
        $this->belongsTo(\App\Customer::class);
    }
}
