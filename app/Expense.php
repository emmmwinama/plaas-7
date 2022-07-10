<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'description',
        'vendor',
        'net',
        'tax',
    ];

    public function expense_item(){
        return $this->hasMany(\App\Expense_item::class);
    }

    public function vendor(){
        return $this->belongsTo(\App\Vendor::class);
    }
}
