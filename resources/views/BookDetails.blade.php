@extends('template')
@section('contents')
    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center mt-4 mb-4">
        <div class="row row-cols-3 gap-5">
                <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
                     <div class="card-body">
                             <img src="{{asset('storage/'.$book->image)}}" class="w-75" id="img" width="200px", height="300px" alt="default">
                             <h5 class="card-title mt-3">Title: {{$book->title}}</h5>
                             <p class="card-text">Author: {{$book->author}}</p>
                             <p class = "card-text">Publisher: {{$book->publisher->name}}</p>
                             <p class ="card-text">Year: {{$book->year}}</p>
                             <p class="card-text">Synopsis: </p>
                             <p class="card-text">{{$book->synopsis}}</p>
                     </div>
                </div>
        </div>
    </div>
@endsection
