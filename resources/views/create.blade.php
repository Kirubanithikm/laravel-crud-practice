@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Create New Employee</p>
        <form action="{{route('employee.store')}}" class="was-validated" method="POST" novalidate>
            @csrf
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="joining_date">Joining date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control" required>
                <span class="invalid-feedback">
                    <strong class="invalid-feedback">Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="salary">Joining salary</label>
                <input type="number" name="salary" id="salary" class="form-control" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="is_active">Active</label><br>
                <input type="checkbox" name="is_active" id="is_active" value="1" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <button type="submit" class="btn btn-primary">Create Employee</button>
        </form>
    </div>
</div>
@endsection