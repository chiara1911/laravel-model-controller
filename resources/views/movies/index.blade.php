@extends('layouts.app')


@section('title', 'All Movies')

@section('content')

<ul>
    @foreach ($movies as $movie )
        <li>{{$movie->title}}</li>
    @endforeach
</ul>

<h1>hello</h1>
@endsection
