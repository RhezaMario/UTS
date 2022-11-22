@extends('template')
@section('contents')
<div class = "container text-center p-3"><h1> Browse our selection of Books </h1></div>
@if(count($data))
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
        @foreach ($data as $d)

            <div class="card shadow-sm p-4 mb-5 bg-white rounded" style="width: 24rem;">
                 <div class="card-body text-center">

                         <img src="{{asset('storage/'.$d->image)}}" class="w-75" id="img" width="200px", height="300px" alt="default">
                         <hr>
                         <h5 class="card-title">{{$d->title}}</h5>
                         <p class = "card-text">by </p>
                         <p class="card-text">{{$d->author}}</p>
                         <a href="{{url('Home/'.$d->title)}}" class="btn btn-primary">Details</a>
                         </div>
                         </div>
         @endforeach
     </div>
     {{$data->links() }}
</div>
@else
<div class="container text-center">No books are available</div>
@endif
@endsection
