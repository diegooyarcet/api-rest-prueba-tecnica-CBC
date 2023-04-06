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
        // Se verifica que $supervisor sea supervisor
        $isSupervisor = employee::whereIn('id', function($query) use ($supervisor){
            $query->select('employee_id')
                ->from('employees')
                ->where('employee_id', $supervisor->id);
        })->exists();

        // Si $supervisor es un supervisor, se muestran sus datos, en caso de que no sea supervisor entonces se retorna un mensaje de error
        if($isSupervisor){
            return $supervisor;
        }else{
            return response()->json(['error' => 'El empleado no es un supervisor'], 404);
        }
    }
}
