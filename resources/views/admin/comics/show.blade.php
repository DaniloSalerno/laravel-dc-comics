@extends('layouts.admin')

@section('content')
    <div class="p-5">
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
        </div>
    </div>
@endsection