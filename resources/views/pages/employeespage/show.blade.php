@extends('layouts.app')
@section('content')
            <a href="/employees" class="btn btn-primary">Go back</a>
            <div class ="card-head">
            <div class="table-responsive">
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
                        <td>{{$employee->first_name}}</td>
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
        @if(!Auth::guest())
        <a href="/employees/{{$employee->id}}/edit" class="btn btn-primary">Edit</a>
        {!! Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'method' => 'employee', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close()!!}
        @endif
@endsection