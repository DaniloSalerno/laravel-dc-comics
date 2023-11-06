@extends('layouts.admin')

@section('content')

<div class="container py-4">


        @if(session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              <strong>Success!</strong> {{session('message')}}
            </div>
            
        @endif

        <h1 class="text-white">Comics Table</h1>

        <div class="d-flex justify-content-between my-4">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add New Comic</a>
            <a class="btn btn-danger" href="{{ route('cestino') }}">Cestino</a>

        </div>

        <div class="pt-4"> {{$comics->links('pagination::bootstrap-5')}} </div>

        <div class="table-responsive">
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
                <tbody class="table-group-divider">
                    @forelse ($comics as $comic)
    
                    <tr>
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
                        <td>
                             <a href=" {{route('comics.show', $comic->id)}} " class="btn btn-outline-primary">View</a> 
                             <a href=" {{route('comics.edit', $comic->id)}} " class="btn btn-outline-success">Edit</a> 
                             {{-- <a href=" ##{{route('comics.', $comic->id)}}" class="btn btn-outline-danger">Delete</a> --}} 

                             <!-- Modal trigger button -->
                             <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalId-{{$comic->id}}">
                                Delete
                             </button>
                             
                             <!-- Modal Body -->
                             <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                             <div class="modal fade" id="modalId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{$comic->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{$comic->id}}">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attenzione,sei sicuro di voler cancellare?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                             </div>

                        </td>
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