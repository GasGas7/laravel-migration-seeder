@extends('layout.app')

@section('content')

<div class="container-xl">
    <h1>Travel page</h1>
    @foreach($travels as $travel)
    <h1>{{$travel->city}}</h1>

    <a href="{{ route('travels.show', $travel -> id) }}">fumettino</a>
    @endforeach
</div>
    
@endsection