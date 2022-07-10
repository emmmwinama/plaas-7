<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_item extends Model
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
        'sale',
        'inventory',
    ];

    public function inventory_item(){
        return $this->belongsTo(\App\Inventory_item::class);
    }
}
