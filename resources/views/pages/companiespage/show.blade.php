@extends('layouts.app')
@section('content')
         <a href="/companies" class="btn btn-success"> Go back </a>
            <div class ="card-head">
            <div class="table-responsive">
                <div class ="card-body">
                 <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Logo</th>
                       <th>Website</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{$companie->name}}</td>
                        <td>{{$companie->email}}</td>
                        <td>{{$companie->website}}</td>
                        <td><img src="/storage/cover_images/{{$companie->cover_image}}"/td>
                    </tr>
                    </tbody>
                 </table>
                </div>    
            </div>
        </div>
        @if(!Auth::guest())
        <a href="/companies/{{$companie->id}}/edit" class="btn btn-primary"> Edit</a>

        {!! Form::open(['action' => ['CompaniesController@destroy', $companie->id], 'method' => 'companie', 'class' => 'float-right']) !!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close()!!}
        @endif
@endsection