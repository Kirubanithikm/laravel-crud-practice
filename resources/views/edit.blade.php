@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-body">
        <p style="font-size:20px; font-weight:bold;">Update Employee</p>
        <form action="" class="was-validated" method="POST">
            <div class="form-group has-validation">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>
            <div class="form-group has-validation   ">
                <label for="joining_date">Joining date</label>
                <input type="date" name="joining_date" id="joining_date" class="form-control" value="" required>
                <span class="invalid-feedback">
                    <strong>Error</strong>
                </span>
            </div>

            <div class="form-group has-validation">
                <label for="joining_salary">Joining salary</label>
                <input type="number" name="joining_salary" id="joining_salary" class="form-control" value="" required>
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
            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
</div>
@endsection