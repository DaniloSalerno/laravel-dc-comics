@extends('layouts.admin')

@section('content')

<section class="create py-5 bg-white">
    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action=" {{route('comics.update', $comic)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId" value=" {{old('title', $comic->title)}} " required>
                <small id="titleHelper" class="text-muted">Type a title</small>
                @error('title')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="" aria-describedby="helpId" value=" {{old('title', $comic->series)}} " required>
                <small id="seriesHelper" class="text-muted">Type a series</small>
                @error('series')
                    <div class="text-danger"> {{$message}} </div>
                @enderror
            </div>
            
            <div class="mb-3 d-flex gap-5">
                <div>
                    <label for="thumb" class="form-label">New Image</label>
                    <input type="file" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="" aria-describedby="helpId" required>
                    <small id="imageHelper" class="text-muted">Upload an image</small>
                    @error('thumb')
                        <div class="text-danger"> {{$message}} </div>
                    @enderror
                </div>
                <div>
                    @if(!in_array('The thumb field is required.',$errors->all()))
                        <div class="text-center">Old image</div>
                        <img width="300" src=" {{asset('storage/' . $comic->thumb)}} " alt="">
                    @endif
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a class="text-decoration-none btn btn-primary" href="{{ route('comics.index') }}">Torna alla lista</a>
    
        </form>
    </div>
</section>


@endsection