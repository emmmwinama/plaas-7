<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cost',
        'qty',
        'line-total',
        'expense',
        'inventory',
    ];

    public function expense(){
        return $this->belongsTo(\App\Expense::class);
    }

    public function inventory_item(){
        return $this->belongsTo(\App\Inventory_item::class);
    }
}
