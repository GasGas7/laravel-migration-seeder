@extends('layout.app')

@section('content')
    <h1>Travel page</h1>
    @foreach($travels as $travel)
    <h1>{{$travel->city}}</h1>
    @endforeach
@endsection