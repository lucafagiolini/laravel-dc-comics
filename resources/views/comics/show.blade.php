@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <h1>This is the comic:</h1>

        <div class="card" style="width: 18rem;">
            <img src=" {{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <span> {{ $comic->type }}</span>
                <h5 class="card-title">{{ $comic->title }}</h5>
                <h5>{{ $comic->series }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <span>{{ $comic->price }}</span>
                <span>{{ $comic->sale_date }}</span>
                <p>{{ $comic->artists }}</p>
            </div>
        </div>


    </div>
@endsection
