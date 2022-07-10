<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linked_area extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'area',
        'production_type',
        'season',
        'field',
        'description',
    ];

    public function field(){
        return $this->belongsTo(\App\Field::class);
    }
}
