@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>Modify: {{ $comic->title }}</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-6">

                {{-- SHOW ERROR --}}
                @if ($errors->any())
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') ?? $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image Url</label>
                        <input type="text" class="form-control" id="image" name="thumb"
                            value="{{ old('thumb') ?? $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price"
                            value="{{ old('price') ?? $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series') ?? $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date') ?? $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option @selected(old('type' ?? $comic->type) === 'comic_book') value="comic_book">Comic Book</option>
                            <option @selected(old('type' ?? $comic->type) === 'graphic_novel') value="graphic_novel">Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') ?? $comic->description }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection
