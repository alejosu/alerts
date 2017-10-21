<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $fillable = [
        'vehicle_routine_id',
        'active',
    ];
    
    public function vehicle_routines(){
        return $this->belongsTo(vehicleRoutines::class);
    }
    
    public function scheduleRoutine(vehicleRoutines $vehicleRoutines)
    {
        $schedule = schedule::where([
           ['vehicle_routine_id', $vehicleRoutines->id],
        ])->first();
        
        if($schedule && $schedule->active = 'false')
        {
            $this->update([
               'active' =>  true,
            ]);
        }
        else if($schedule && $schedule->active = 'true')
        {
            $this->update([
                'active' =>  false,
            ]);
        }
        else
        {
            $this->save([
                'vehicle_routine_id' => $vehicleRoutines->id,
                'active' => true,
            ]);
        }
    }
}
