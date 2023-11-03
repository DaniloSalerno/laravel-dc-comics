@extends('layouts.app')



@section('content')
    <div class="text-white p-4">
        <h1>Questa è la Pagina di benvenuto</h1>
        <div>Visita la pagina dei <a href="{{route('comics')}}" class="btn btn-primary">Comics</a></div>
    </div>
@endsection