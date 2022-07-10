<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
        'description',
        'schedule_start',
        'start_date',
        'schedule_end',
        'end_date',
        'status',
        'target_asset',
        'asset',
        'crop_season_id',
        'employee_id'
    ];

    public function crop_season(){
        return $this->belongsTo(\App\Crop_season::class);
    }

    public function employee(){
        return $this->belongsTo(\App\Employee::class);
    }
}
