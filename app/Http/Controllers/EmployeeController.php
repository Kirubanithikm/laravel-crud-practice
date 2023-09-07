<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        $employees = Employee::orderBy('id','desc')->paginate(2);
        return view('index', ['employees' => $employees]);
//        return view('index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employees,email|email',
            'phone' => 'required|numeric|unique:employees,phone',
            'joining_date', 'required',
            'salary' => 'required'
        ]);

        $data = $request->except('_token');

        Employee::create($data);

        // $employee = new Employee;
        // $employee->name = $data['name'];
        // $employee->email = $data['email'];
        // $employee->phone = $data['phone'];
        // $employee->joining_date = $data['joining_date'];
        // $employee->salary = $data['salary'];
        // $employee->is_active = $data['is_active'];
        // $employee->save();

        return redirect()->route('employee.index')->withAdded('Employee has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $updated_data = $request->all();
        $employee = Employee::find($id);

        $employee->update($updated_data);
        return redirect()->route('employee.edit',$employee->id)
        ->withSuccess('Employee details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
