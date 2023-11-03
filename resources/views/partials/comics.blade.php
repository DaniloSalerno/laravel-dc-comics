<div class="container py-4">



    <div class="row row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 py-4">
        @forelse ($comics as $comic)
        <div class="col">
            <div class="card border-0">
                @if (str_contains($comic->thumb, 'http'))
                <img class=" img-fluid" src="{{ $comic->thumb }}">
                 @else
                <img class=" img-fluid" src="{{asset('storage/' . $comic->thumb)}}" alt="">
                @endif
                <div class="card-body ps-0">
                    <h6 class="card-title text-white text-uppercase"> {{$comic->title}} </h6>
                </div>
            </div>
        </div>
        @empty
        <div class="col">
            Nessun fumetto da mostrare
        </div>
        @endforelse
    </div>

    <div class="pt-4"> {{$comics->links('pagination::bootstrap-5')}} </div>

    <div class="text-center py-4">
        <a href="##" class="btn btn-primary rounded-0 text-uppercase px-5 fw-bold">load more</a>
    </div>
</div>