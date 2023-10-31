@extends('layouts.app')

@section('content')

<section class="comics py-5">
    <div class="container">
        <h1>Questa è la pagina comics</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">
            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card h-100">

                        <img width="100" src="{{asset('storage/' . $comic->thumb)}}" alt="">

                        <div class="card-body">
                            <div><strong>Title:</strong> {{$comic->title}}</div>
                            <div><strong>Price:</strong> {{$comic->price}}</div>
                            <div><strong>Series:</strong> {{$comic->series}}</div>
                            <div><strong>Sale date:</strong> {{$comic->sale_date}}</div>
                            <div><strong>Artists:</strong> {{$comic->artists}}</div>
                            <div><strong>Artists:</strong> {{$comic->writers}}</div>

                        </div>
                        {{-- /.card-body --}}
                    </div>
                    {{-- /.card --}}

                </div>
                {{-- /.col --}}
                @empty
                No comics yet
                @endforelse
        </div>
        {{-- /.row --}}

    </div>
    {{-- /.container --}}
</section>
@endsection