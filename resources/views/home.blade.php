@extends('layout.app')

@section('content')
    <div class="container-xl text-center d-flex flex-column justify-content-center align-items-center" style="height:100vh">
        <div class="home_page_box">
            <h1 class="p-3" style="display:inline-block">BOOLEAN TRAVEL & C.</h1><span>&copy;</span>
            <nav>
                <h3 class="p-2">🛳🚀🛫🚄 Guarda i nostri pacchetti! 🚄🛫🚀🛳</h3>
                <a href="{{ route('travels.index') }}">
                    <button type="button" class="btn btn-success btn-lg mt-4 bottone_home">Clicca qui!</button>
                </a>
            </nav>
        </div>

    </div>
@endsection
