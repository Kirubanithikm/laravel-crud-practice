<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
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
        $data = $request->except('_token');

        employee::create($data);

        // $employee = new employee;
        // $employee->name = $data['name'];
        // $employee->email = $data['email'];
        // $employee->phone = $data['phone'];
        // $employee->joining_date = $data['joining_date'];
        // $employee->salary = $data['salary'];
        // $employee->is_active = $data['is_active'];
        // $employee->save();
        dd('success');
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
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
