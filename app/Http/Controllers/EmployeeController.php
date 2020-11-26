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

    public function create(){

        return view( 'employee.create' );

    }

    public function store( Request $request ){

        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'maidenName' => 'required',
            'mail' => 'required|email|',
            'contract' => 'required',
        ]);
        
        $employee = new Employee;
        $employee->code = $request->code;
        $employee->name = $request->name;
        $employee->last_name = $request->lastName;
        $employee->maiden_name = $request->maidenName;
        $employee->mail = $request->mail;
        $employee->contract = $request->contract;
        $employee->status = 1; 
        $employee->save();
       
        return redirect('employee');
            
    }

}
