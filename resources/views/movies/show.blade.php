@extends('layouts.app')
@section('title', 'Single Book')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 m-4">
                    <div class="d-flex flex-row">
                        <img src="{{ $movies->image }}" alt="{{ $movies->title }}" class="big-image">
                        <div class="d-flex flex-column px-4 text-uppercase opacity-75 ">
                            <h3 class="text-light"> title :{{ $movies->title }}</h3>
                            <h4 class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus saepe accusamus
                                necessitatibus natus doloremque! Id mollitia, tempora quo soluta esse eum sapiente voluptas
                                impedit! Ut nam accusamus inventore facilis tenetur! Quisquam voluptate repellendus
                                perspiciatis, distinctio voluptas, quas voluptatibus laborum eveniet iusto asperiores
                                cupiditate magnam magni veritatis ipsa. Minus ut deserunt perferendis vitae debitis nihil
                                repellendus saepe, harum sed velit veritatis nisi quam enim odit ratione. Id sunt laudantium
                                hic esse error, aperiam provident ex voluptatum labore unde a, iusto mollitia! Facere
                                numquam accusantium sequi amet, dolore omnis error et aliquid quia totam doloribus quidem.
                                Voluptatum soluta deleniti error quaerat laboriosam!</h4>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
