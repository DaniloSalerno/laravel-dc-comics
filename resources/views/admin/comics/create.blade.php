@extends('layouts.admin')

@section('content')

<section class="create py-5">
    <div class="container">
        <form action=" {{route('comics.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
    
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="titleHelper" class="text-muted">Type a title</small>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="imageHelper" class="text-muted">Upload an image</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="seriesHelper" class="text-muted">Type a series</small>
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
    
        </form>
    </div>
</section>


@endsection