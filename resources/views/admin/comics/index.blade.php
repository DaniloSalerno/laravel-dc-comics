@extends('layouts.admin')

@section('content')

<div class="container">
        <h1>Pagina Index di Admin</h1>

        <a class="btn btn-outline-primary my-4" href="#">ADD</a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Series</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
    
                    <tr class="">
                        <td scope="row"> {{$comic->id}} </td>
                        <td> {{$comic->title}} </td>
                       {{--  <td> <img width="100" src="{{$comic->thumb}}" alt=""></td> --}}
                       {{-- ADESSO FUNZIONANO LE NUOVE IMMAGINI INSERITE MA NON QUELLE GIà PRESENTI NEL DB --}}
                        <td> <img width="100" src="{{asset('storage/' . $comic->thumb)}}" alt=""></td>
                        <td> {{$comic->series}} </td>
                    </tr>
                        
                    @empty
                        No comics yet
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    

@endsection