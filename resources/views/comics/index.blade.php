@extends('layout.admin')

@section('contents')
    {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}

    @if (session('delete_success'))
        @php
            $comic = session('delete_success')
        @endphp
        <div class="alert alert-danger">
            {{session('delete_success')}}
        </div>
    @endif

    <div class="cont_a">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITOLO</th>
                    <th>TIPO</th>
                    <th>PREZZO</th>
                    <th>DATA ACQUISTO</th>
                    <th><a class="btn btn-success" href="{{ route('comics.create') }}">nuovo</a></th>
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
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', ['comic' =>$comic]) }}">show</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' =>$comic]) }}">edit</a>
                            <form action="{{ route('comics.destroy', ['comic' =>$comic])}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" >delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    

@endsection
