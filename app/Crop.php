<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category',
    ];

    public function crop_Season(){
        return $this->hasMany(\App\Crop_season::class);
    }
}
