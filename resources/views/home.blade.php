@extends('layout.app')

@section('content')
    <h1>Home Page</h1>
    @foreach ($travels as $travel)
        <h1>{{$travel->city}}</h1>
    @endforeach
@endsection