@extends('layouts.app')



@section('content')

<div>
    @include('partials.jumbo')
</div>
    
<section id="comics">

    @include('partials.comics')
    @include('partials.banner')

</section>

@endsection