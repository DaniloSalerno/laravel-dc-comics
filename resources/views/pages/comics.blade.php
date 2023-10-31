@extends('layouts.app')

@section('content')
    <h1>Questa è la pagina comics</h1>

    <ul>
        @forelse ($comics as $comic)
            <li><strong>Titolo:</strong> {{$comic->title}} </li>
        @empty
            
        @endforelse
    </ul>
@endsection