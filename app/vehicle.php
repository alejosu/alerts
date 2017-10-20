<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    public function assignRoutine(routine $routine){
        vehicleRoutines::create(
            [
                'vehicle_id' => $this->id,
                'routine_id' => $routine->id,
            ]
        );
    }
}
