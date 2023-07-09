@extends('layout.base')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}


    <div class="sub_cont">
        <div class="card_cont">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic->thumb}}" alt="card-img">
                    <h4>{{ $comic->title }}</h4>
                </div>
            @endforeach
        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-warning">ADMIN ZONE</a>
    </div>
@endsection
