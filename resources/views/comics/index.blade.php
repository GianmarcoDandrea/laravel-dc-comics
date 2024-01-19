@extends('layouts.app')

@section('content')
    <div class="container-fluid w-100 p-5">
        <h1>Comics List in Your Database</h1>
        <div class="text-end">
            <a class="btn btn-dark" href="{{ route('comics.create') }}">Add new Comics</a>
        </div>

        @if (Session::has('message'))
            <div class="w-100 d-flex justify-content-center">
                <div class="alert alert-success w-50">
                    {{ Session::get('message') }}
                </div>

            </div>
        @endif

        <table class="table table-bordered table-hover my-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="th-lg">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title }}</th>
                        <td>{{ $comic->series }}</td>
                        <td>{{ ucwords($comic->type) }}</td>
                        <td>{{ '$' . $comic->price }}</td>
                        <td>{{ substr($comic->description, 0, 300) . '...' }}</td>
                        <td class="btn-section">
                            <a class="btn btn-dark info-btn" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <i class="fa-solid fa-info"></i>
                            </a>
                            <a class="btn btn-warning modify-btn"
                                href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>

                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button id="delete-btn" class="btn btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#comfimErasing">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                {{-- Modal --}}
                                <div class="modal fade" id="comfimErasing" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure To Delete This
                                                    Item</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
