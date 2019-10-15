@extends('layouts.app')

@section('content')
    <h1>Create Employees</h1>
    {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('first_name', 'Name')}}
            {{Form::text('first_name', '', ['class' => 'form-control', 'placeholder' => 'add Name'])}}
        </div>    
        <div class="form-group">
            {{Form::label('last_name', 'Surname')}}
            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'add surname'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'add email'])}}
        </div>
        <div class="form-group">
            {{Form::label('phone_number', 'Phone Number')}}
            {{Form::text('phone_number', '', ['class' => 'form-control', 'placeholder' => 'ad phone number'])}}
        </div>
        <div class="form-group">
            {{Form::label('company_id', 'Company ID')}}
            {{Form::text('company_id', '', ['class' => 'form-control', 'placeholder' => 'ad an ID number ONLY related to existing Company'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection    