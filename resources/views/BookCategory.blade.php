@extends('template')
@section('contents')
@if(count($books))
<div class="contain text-center"><h1>{{$category->name}}</h1></div>

<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
        @foreach ($books as $d)

            <div class="card shadow-sm p-4 mb-5 bg-white rounded" style="width: 24rem;">
                 <div class="card-body text-center">

                         <img src="{{asset('storage/'.$d->image)}}" class="w-75" id="img" width="200px", height="300px" alt="default">
                        <h5 class = "card-title mt-3">{{$d->title}}</h5>
                        <p class = "card-text">by </p>
                        <p class = "card-text">{{$d->author}}</p>
                        <a href="{{url('Home/'.$d->title)}}" class="btn btn-primary">Details</a>
                 </div>
            </div>
         @endforeach
     </div>
</div>
@else
<div class="container text-center">No books are available for the {{$category->name}} category</div>
@endif
@endsection
