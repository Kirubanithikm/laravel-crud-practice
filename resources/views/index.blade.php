@extends('layouts.app')
@section('content')

@if(session()->has('added'))
<div class="alert alert-success">
    {{session()->get('added')}}
</div>
@endif
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <strong>Employee List</strong>
                <a href="{{route('employee.create')}}" class="btn btn-primary btn-xs float-end py-0">Create Employee</a>
                <table class="table table-responsive table-bordered table-stripped" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Joining Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Logesh</td>
                            <td>logesh@jvlcode.com</td>
                            <td>2023-5-12 </td>
                            <td><span type="button" class="btn btn-success btn-xs py-0">Active</span></td>
                            <td>
                                <a href="/employee/1" class="btn btn-primary btn-xs py-0">Show</a>
                                <a href="/employee/1/edit" class="btn btn-warning btn-xs py-0">Edit</a>
                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>David</td>
                            <td>david@jvlcode.com</td>
                            <td>2022-7-21 </td>
                            <td><span type="button" class="btn btn-success btn-xs py-0">Active</span></td>
                            <td>
                                <a href="/employee/2" class="btn btn-primary btn-xs py-0">Show</a>
                                <a href="/employee/2/edit" class="btn btn-warning btn-xs py-0">Edit</a>
                                <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection