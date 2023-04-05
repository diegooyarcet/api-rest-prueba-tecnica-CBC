<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Http\Requests\CreateEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;

class EmployeeController extends Controller
{
    public function ListadoEmpleados(Request $request){
        return employee::all();
    }

    public function CrearColaborador(CreateEmployeeRequest $request){
        return employee::create($request->validated());
    }

    public function ActualizarColaborador(UpdateEmployeeRequest $request, employee $colaborador){
        return $colaborador->update($request->validated());
    }
}
