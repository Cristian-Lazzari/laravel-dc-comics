@extends('layout.admin')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITOLO</th>
                <th>SERIE</th>
                <th>TIPO</th>
                <th>PREZZO</th>
                <th>DATA ACQUISTO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th>{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->type}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
