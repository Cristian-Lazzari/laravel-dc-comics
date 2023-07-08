@extends('layout.admin')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <div class="cont_b">
        <div class="card">
            <h1>{{$comic->title}}</h1>
            <img src="{{$comic->thumb}}" alt="">
            <h5>{{$comic->price}}</h5>
            <h5>{{$comic->series}}</h5>
            <h5>{{$comic->sale_date}}</h5>
            <h5>{{$comic->type}}</h5>
            <p>{{$comic->description}}</p>
        </div>
    </div>    

@endsection
