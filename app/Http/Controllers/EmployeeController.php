<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){

        $empleados = Employee::where( 'status', 1 )->get();
            
            $data = [
                'empleados' => $empleados,
            ];


            return view( 'employee.listEmployee', $data );

    }
}
