
@extends('template')
@section('contents')
    <div class="container-sm d-flex flex-column flex-wrap gap-4 mt-50 justify-content-center align-items-left mt-4">
        <div class="row row-cols-3 gap-5">
                <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
                     <div class="card-body">
                             <h5 class="card-title">Publisher Name: {{$pub->name}}</h5>
                             <p class="card-text">Address: {{$pub->address}}</p>
                             <p class = "card-text">Phone: {{$pub->phone}}</p>
                             <p class ="card-text">Email: {{$pub->email}}</p>
                     </div>
                </div>
         </div>
    </div>
    <div class="container text-center">Published Books</div>
    <hr>
    <br>
    @if(count($book))
    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center  ">
        <div class="row row-cols-3 gap-5 ml-3">
            @foreach ($book as $d)
                <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
                     <div class="card-body">
                             <img src="{{asset('storage/'.$d->image)}}" class="w-75" id="img" width="200px", height="300px" alt="default">
                             <h5 class="card-title">{{$d->title}}</h5>
                             <p class = "card-text">by </p>
                             <p class="card-text">{{$d->author}}</p>
                             <a href="{{url('Home/'.$d->title)}}" class="btn btn-primary">Details</a>
                             </div>
                             </div>
             @endforeach
         </div>
    </div>
    @else
        <div class="container text-center">This publisher hasn't published anything yet</div>

    @endif
@endsection
