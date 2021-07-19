@extends('layout.app');

@section('content')
    <h1 class="text-center">🌍 IL VIAGGIO TI ASPETTA 🌍</h1>

    <div class="container-xl text-center justify-content-center align-items-center" style="height:100vh">
        <div class="p-2">
            <h2>{{ $travel->city }}</h2>
            <p>IL VIAGGIO: {{ $travel->description }}</p>
            <p>PARTENZA IL : {{ $travel->departure }} E RITORNO IL: {{ $travel->arrival }}</p>
            <h5 class="p-3">{{$travel->price}} &euro;</h5>
            <div><img class="height:50%" src="{{ $travel->image_path }}" alt=""></div>
            <a name="booking" id="booking" class="btn btn-primary m-2" href="#" role="button">Prenota ora !!!</a>
        </div>
    </div>
@endsection
