@extends('layouts.admin')

@section('content')

<section class="create py-5 bg-white">
    <div class="container">
        <form action=" {{route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value=" {{$comic->title}} ">
              <small id="titleHelper" class="text-muted">Type a title</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="" aria-describedby="helpId" value=" {{$comic->series}} ">
                <small id="seriesHelper" class="text-muted">Type a series</small>
            </div>
            
            <div class="mb-3 d-flex gap-5">
                <div>
                    <label for="thumb" class="form-label">Image</label>
                    <input type="file" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="imageHelper" class="text-muted">Upload an image</small>
                </div>
                <div>
                    <img width="300" src=" {{asset('storage/' . $comic->thumb)}} " alt="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="text-decoration-none btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista</a>
    
        </form>
    </div>
</section>


@endsection