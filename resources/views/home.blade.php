@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1>Welcome to DC Comics Admin Control Panel</h1>

    <button class="btn btn-dark my-5">

        <a class="text-light text-decoration-none fs-3" href="{{route('comics.index')}}">See Comics On Database</a>
    </button>
</div>
@endsection