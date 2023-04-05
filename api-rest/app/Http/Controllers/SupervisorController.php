<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class SupervisorController extends Controller
{
    public function ListadoSupervisores(Request $request){
        $supervisors = employee::select('employees.*')->distinct()
        ->join('employees as e2','employees.id','=','e2.employee_id')
        ->get();
        return $supervisors;
    }

    public function DatosSupervisor(Request $request, employee $supervisor){
        return $supervisor;
    }
}
