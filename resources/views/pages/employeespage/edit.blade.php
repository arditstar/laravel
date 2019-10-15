@extends('layouts.app')

@section('content')
    <h1>Edit Employee</h1>
    {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('first_name', 'Name')}}
            {{Form::text('first_name', $employee->first_name, ['class' => 'form-control', 'placeholder' => 'add Name'])}}
        </div>    
        <div class="form-group">
            {{Form::label('last_name', 'Surname')}}
            {{Form::text('last_name', $employee->last_name, ['class' => 'form-control', 'placeholder' => 'add Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $employee->email, ['class' => 'form-control', 'placeholder' => 'add Logo'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_number', 'Phone Number')}}
            {{Form::text('phone_number', $employee->phone_number, ['class' => 'form-control', 'placeholder' => 'add Website'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_id', 'Company ID')}}
            {{Form::text('company_id', $employee->company_id, ['class' => 'form-control', 'placeholder' => 'add Website'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection 