<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicleRoutines extends Model
{
    protected $fillable = [
        'routine_id',
        'vehicle_id',
    ];
    
    public function vehicle(){
        return $this->belongsTo(vehicle::class);
    }
    
    public function routine(){
        return $this->belongsTo(routine::class);
    }
}
