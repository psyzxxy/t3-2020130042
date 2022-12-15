@extends('layout.master')
@section('title', $books->title)
@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $books->judul }}</h2>
            </div>
            <div class="col-md-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('books.edit', $books->id) }}" class="btn btn-primary ml-3">Edit</a>

                        <form action="{{ route('books.destroy', $books->id) }}" method="POST">
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                            @method('DELETE')
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h5>
            <span class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                {{ $books->halaman }}
            </span>
        </h5>
        <p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>{{ $books->kategori }}</em>
            </li>
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>{{ $books->penerbit }}</em>
            </li>
        </ul>
        </p>
        <hr>
        <hr>

    </div>
    <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg btn-block">back
        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
    </a>
@endsection
