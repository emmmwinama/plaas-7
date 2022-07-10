<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop_season extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'schedule_start',
        'start_date',
        'schedule_end',
        'end_date',
        'description',
        'crop_id',
    ];

    public function crop(){
        return $this->belongsTo(\App\Crop::class);
    }

    public function yielder(){
        return $this->hasOne(\App\Yielder::class);
    }
}
