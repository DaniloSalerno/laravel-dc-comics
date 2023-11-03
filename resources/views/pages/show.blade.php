@extends('layouts.app')

<<<<<<< HEAD
@section('content')
    <div class="p-5 text-white text-center col-6 m-auto">
        <div>
            <div>ID:{{ $comic->id }}</div>
            <div> <strong>Title: </strong>{{ $comic->title }}</div>

            @if (str_contains($comic->thumb, 'http'))
                <img width="300" class=" img-fluid" src="{{ $comic->thumb }}">
            @else
                <img width="300" class=" img-fluid" src="{{asset('storage/' . $comic->thumb)}}" alt="">
            @endif
            
            <p>{{ $comic->description }}</p>
            <div><strong>Type: </strong> {{ $comic->type }}</div>
            <div><strong>Series: </strong> {{ $comic->series }}</div>
            <div><strong>Sale Date: </strong> {{ $comic->sale_date }}</div>
            <div><strong>Price: </strong> {{ $comic->price }}</div>
            <div><strong>Title:</strong> {{$comic->title}}</div>
            <div><strong>Artists:</strong> {{$comic->artists}}</div>
            <div><strong>Writers:</strong> {{$comic->writers}}</div>

            <div class="d-flex justify-content-center">
                <a class="text-decoration-none btn btn-primary" href="{{ route('comics') }}">Torna alla lista</a>
            </div>
        </div>
=======


@section('content')
    <div class="text-white p-4">
        {{$comic->id}}
>>>>>>> 394cd328d63fee3083ab2dff3c18d394dea9fb2a
    </div>
@endsection