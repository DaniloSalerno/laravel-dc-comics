@extends('layouts.admin')

@section('content')

<div class="container">
        <h1>Pagina Index di Admin</h1>

        <a class="btn btn-outline-primary my-4" href="{{ route('comics.create') }}">ADD</a>
        <div class="pt-4"> {{$comics->links('pagination::bootstrap-5')}} </div>

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

                        <td>
                            @if (str_contains($comic->thumb, 'http'))
                                <img width="100" class=" img-fluid" src="{{ $comic->thumb }}">
                            @else
                                <img width="100" class=" img-fluid" src="{{asset('storage/' . $comic->thumb)}}" alt="">
                            @endif
                        </td>

                        <td> {{$comic->series}} </td>
                        <td> <a href=" {{route('comics.show', $comic->id)}} " class="btn btn-primary">View</a> </td>
                    </tr>
                        
                    @empty
                        No comics yet
                    @endforelse
                </tbody>
            </table>
            <div class="pt-4"> {{$comics->links('pagination::bootstrap-5')}} </div>
        </div>
    </div>
    

@endsection