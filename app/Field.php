<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'location',
        'soil_comp',
        'usable_area',
        'ownership',
        'description',
    ];

    public function linked_area(){
        return $this->hasMany(\App\Linked_area::class);
    }
}
