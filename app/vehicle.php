<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    public function assignRoutine(routine $routine){
        
        $vehicleRoutine = vehicleRoutines::where(
            [
                ['vehicle_id', $this->id],
                ['routine_id', $routine->id],
            ]
        )->first();
        
        if($vehicleRoutine)
        {
            $vehicleRoutine->update(
              [
                  'nextDate' => $this->calculateNextRoutineDate($routine),
                  'nextKm'   => $this->calculateNextRoutineKm($routine),
              ]
            );
        }
        else
        {
            vehicleRoutines::create(
                [
                    'vehicle_id' => $this->id,
                    'routine_id' => $routine->id,
                    'nextDate'   => $this->calculateNextRoutineDate($routine),
                    'nextKm'     => $this->calculateNextRoutineKm($routine),
                ]
            );
        }
    }
    
    public function calculateNextRoutineDate(routine $routine)
    {
        //fecha actual
        $dateNow = Carbon::now();
        
        //Siguiente fecha de rutina
        $nextRoutineDate = $dateNow->addDay($routine->days);
        
        return $nextRoutineDate;
    }
    
    public function calculateNextRoutineKm(routine $routine)
    {
        //km actual
        $km = $this->km;
        
        //Siguiente km
        $nextRoutineKm = $km + $routine->km;
        
        return $nextRoutineKm;
    }
}
