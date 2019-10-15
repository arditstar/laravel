@extends('layouts.app')
@section('content')
   <h1>companies</h1>
      @if(count($companies) > 0)
         @foreach ( $companies as $companie)
          <div class = "card p-3 mt-3 mb-3">
           <div class="table-responsive">
            <div class="card-heading">Companies list</div>
            <div class ="card-body">
            <table class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Email</th>
                     <th>website</th>
                     <th>Logo</th>
                     <th>Company id</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                     <td><a href="/companies/{{$companie->id}}">{{$companie->name}}</td>
                     <td>{{$companie->email}}</td>                    
                     <td>{{$companie->website}}</td>
                     <td><div class="col-md"><img src="/storage/cover_images/{{$companie->cover_image}}"class="img-thumbnail"
                     div></td>
                     <td>{{$companie->id}}</td>
                    </tr>
                  </tbody>
                 </table>
                </div>
            </div>
          </div>
         @endforeach
        
          <div class="col-12 d-flex justify-content-center pt-4">
           {{$companies->links()}}
           <div>
         
       @else
       <p>no companies found</p>
      @endif
@endsection