<?php

namespace App\Http\Controllers;

use App\schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //Muestra todas las rutinas programadas
    public function index()
    {
        $schedules = schedule::all();
        
        return view('schedules', compact('schedules'));
    }
}
