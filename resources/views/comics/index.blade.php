@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 py-5">
        <h1>Comics List in Your Database</h1>
        <div class="text-end">
          <a class="btn btn-dark" href="{{ route('comics.create') }}">Add new Comics</a>
        </div>

        <table class="table table-bordered table-hover my-3">
            <thead class="table-dark">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->title }}</th>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ substr($comic->description , 0 , 300) . '...' }}</td>
                    <td>
                      <a class="btn btn-dark" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection