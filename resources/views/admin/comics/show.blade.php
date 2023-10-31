@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div>
            <div>ID:{{ $comic->id }}</div>
            <div> <strong>Title: </strong>{{ $comic->title }}</div>


            
            {{-- <img width="300" src="{{ $comic->thumb }}" alt=""> --}}
            {{-- ADESSO FUNZIONANO LE NUOVE IMMAGINI INSERITE MA NON QUELLE GIà PRESENTI NEL DB --}}
            <img width="300" src="{{asset('storage/' . $comic->thumb)}}" alt="">
            
            <p>{{ $comic->description }}</p>
            <div><strong>Type: </strong> {{ $comic->type }}</div>
            <div><strong>Series: </strong> {{ $comic->series }}</div>
            <div><strong>Sale Date: </strong> {{ $comic->sale_date }}</div>
            <div><strong>Price: </strong> {{ $comic->price }}</div>
        </div>
    </div>
@endsection