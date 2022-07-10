<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yielder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit',
        'description',
        'qty',
        'crop',
        'inventory_item',
        'crop_season_id'
    ];

    public function crop_season(){
        return $this->belongsTo(\App\Crop_season::class);
    }

    public function inventory_item(){
        return $this->belongsTo(\App\Inventory_item::class);
    }
}
