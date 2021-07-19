@extends('layout.app')

@section('content')

<div class="container-xl d-flex flex-wrap justify-content-center p-0">
    <h1>I nostri pacchetti vacanze 👇</h1>
    <div class="row d-flex justify-content-between">
         @foreach($travels as $travel)
    <div class="card col-3 offset-1 my-2 p-3 ml-4 text-center">
        <img src="{{$travel->image_path}}" alt="">
        <h5 class="p-3 ">{{$travel->city}}</h5>
        <h6 class="p-3">{{$travel->price}} &euro;</h6>
        <a href="{{ route('travels.show', $travel -> id) }}"><button class="btn btn-link btn-small">Vedi l'offerta...</button></a> 
    </div>
    @endforeach
    </div>
   
</div>
    
@endsection