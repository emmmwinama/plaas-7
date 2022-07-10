<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory_item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'unit',
        'qty',
        'manufacturer',
        'description',
        'category',
    ];

    public function sale_item(){
        return $this->hasMany(\App\Sale_item::class);
    }

    public function expense_item(){
        return $this->hasMany(\App\Expense_item::class);
    }

    public function inventory_category(){
        return $this->belongsTo(\App\Inventory_category::class);
    }
}
