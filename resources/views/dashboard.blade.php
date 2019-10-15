@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                <a href="/employees/create" class="btn btn-primary">Create Employees</a>
                    <h4>Your employees</h4>
                    </div>
                <div class="card-body">
                    <a href="/companies/create" class="btn btn-primary">Create Companies</a>
                    <h4>Your companies</h4>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection