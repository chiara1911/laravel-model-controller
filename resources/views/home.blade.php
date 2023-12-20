@extends('layouts.app')

@section('title' , 'Home')

@section('content')
<main>
   <div class="container">
    <img src="{{ Vite::asset('resources/image/christmas.png') }}" alt="">
   </div>
</main>
@endsection
