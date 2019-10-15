@extends('layouts.app')
@section('content')
    <h1>employees</h1>
        @if(count($employees) > 0)
        @foreach ( $employees as $employee )
            <div class ="card p-3 mt-3 mb-3">
            <div class="table-responsive">
              <div class="card-heading">Employees List</div>
                <div class ="card-body">
                 <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                       <th>Name</th>
                       <th>Surname</th>
                       <th>Email</th>
                       <th>Phone Number</th>
                       <th>CompanyId</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="/employees/{{$employee->id}}">{{$employee->first_name}}</td>
                        <td>{{$employee->last_name}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->phone_number}}</td>
                        <td>{{$employee->company_id}}</td>
                    </tr>
                    </tbody>
                 </table>
                </div>    
            </div>
        </div>
        @endforeach
        <div class="col-12 d-flex justify-content-center pt-4">
        {{$employees->links()}}
        </div>
        @else
        <p>no employees found</p>
       @endif
@endsection
