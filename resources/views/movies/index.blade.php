@extends('layouts.app')


@section('title', 'All Movies')

@section('content')
    <main class="bg-danger">
        <div class="container">
            <h2 class="text-light">Movies</h2>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-3 col-lg-2 m-2 bg-light p-2">
                            <div class="img-card overflow-hidden mb-4">
                                <a href="{{ route('movies.show', $movie->id)}}"><img src="{{ $movie->image }}" alt="{{ $movie->title }}"></a>
                            </div>
                            <span
                            class=" text-uppercase ">{{ $movie->title }}</span>


                        <div>
                            <span class="btn"><i class="fa-solid fa-cart-shopping"></i></span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
