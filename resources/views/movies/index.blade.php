@extends('layouts.app')


@section('title', 'All Movies')

@section('content')



<h1>Movies</h1>
<main>

    <div class="container">

        <h2 class="text-light">Movies</h2>
        <div class="row">
            {{-- @foreach ($movies as $key => $movie) --}}
            @foreach ($movies as $movie )
                <div class="col-12 col-md-3 col-lg-2">
                    <div class="card-wrapper">
                        <div class="img-card overflow-hidden">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">

                        </div>

                         <span
                            class="p-2 d-flex flex-wrap align-content-center text-light text-uppercase">{{ $movie->title }}</span>

                    </div>

<span>{{$movie->title}}</span>
                </div>
            @endforeach

        </div>
    </div>


</main>
@endsection
