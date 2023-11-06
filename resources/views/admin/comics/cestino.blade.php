@extends('layouts.admin')

@section('content')
<div class="container py-5">

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success!</strong> {{ session('message') }}
        </div>
    @endif

    <table class="table table-primary table-hover table-striped table-bordered">
    
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Series</th>
                <th>Options</th>
            </tr>
        </thead>
        {{-- /thead --}}
    
        <tbody class="table-group-divider">
            @forelse ($deleted_comics as $deleted)
    
            <tr>
                <td scope="row"> {{$deleted->id}} </td>
                <td> {{$deleted->title}} </td>
    
                <td>
                    @if (str_contains($deleted->thumb, 'http'))
                        <img width="100" class=" img-fluid" src="{{ $deleted->thumb }}">
                    @else
                        <img width="100" class=" img-fluid" src="{{asset('storage/' . $deleted->thumb)}}" alt="">
                    @endif
                </td>
    
                <td> {{$deleted->series}} </td>
    
                <td>
                    {{-- bottoni per ripristino e cancellazione --}}
                </td>
    
            </tr>
            @empty
                <tr>
                    <td>Nessun Elemento nel cestino</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection