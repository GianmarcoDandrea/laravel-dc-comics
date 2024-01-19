@extends('layouts.app')

@section('content')
    <div class="container mb-5">
        <h1>{{ $comic->title }}</h1>
        @if ($comic->thumb === null)
            <img class="w-25" src="{{ Vite::asset('resources/img/Poster_not_available.jpg') }}" alt="{{ $comic->title }}">
        @else
            <img class="w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        @endif

        <hr>
        <p>{{ $comic->description }}</p>

        <ul>
            <li>
                <strong>Type: </strong>
                {{ ucwords($comic->type) }}
            </li>
            <li>
                <strong>Series: </strong>
                {{ $comic->series }}
            </li>
            <li>
                <strong>Price:</strong>
                {{ '$' . $comic->price }}
            </li>
            <li>
                <strong>Sale Date:</strong>
                {{ $comic->sale_date }}
            </li>
        </ul>
        <button class="btn btn-danger">
            <a href="{{ route('comics.index') }}" class="text-decoration-none text-light">Go To Comics List</a>
        </button>
    </div>
@endsection
