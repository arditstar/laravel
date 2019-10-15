@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>
    {!! Form::open(['action' => ['CompaniesController@update', $companie->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $companie->name, ['class' => 'form-control', 'placeholder' => 'add Name'])}}
        </div>    
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $companie->email, ['class' => 'form-control', 'placeholder' => 'add Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('website', 'Website')}}
            {{Form::text('website', $companie->website, ['class' => 'form-control', 'placeholder' => 'add Website'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection 