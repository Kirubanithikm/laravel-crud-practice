@extends('layouts.app')
@section('content')

@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
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
                        @foreach($employees as $key => $employee)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->joining_date}}</td>
                            <td><span type="button" class="btn {{$employee->is_active == '1' ? 'btn-success' : 'btn-danger'}} btn-xs py-0">{{$employee->is_active == '1' ? 'Active' : 'Inactive'}}</span></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('employee.show',$employee->id)}}" class="btn btn-primary btn-xs py-0 mx-1">Show</a>
                                    <a href="{{route('employee.edit',$employee->id)}}" class="btn btn-warning btn-xs py-0 mx-1">Edit</a>
                                    <form action="{{route('employee.destroy',$employee->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-xs py-0">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$employees->links()}}
            </div>
        </div>
    </div>
</div>
@endsection