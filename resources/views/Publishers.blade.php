@extends('template')
@section('contents')
<div class="container text-center mt-4 mb-4"><h1> Our Publishers </h1></div>
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
        @foreach ($data as $d)
            <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
                 <div class="card-body">

                         <img src="{{asset('storage/'.$d->image)}}" class="w-75" id="img" width="200px", height="100px" alt="default">
                         <h5 class="card-title mb-10">{{$d->name}}</h5>
                         <p class="card-text">Publisher Address: {{$d->address}}</p>
                         <a href="{{url('Publishers/'.$d->name)}}" class="btn btn-primary">Details</a>
                         </div>
                         </div>
         @endforeach
     </div>
     {{$data->links() }}
</div>
@endsection
