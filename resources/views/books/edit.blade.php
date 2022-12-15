@extends('layout.master')
@section('title', 'Edit Books')
@section('content')
    <h2>Update New Books</h2>
    <form action="{{ route('books.update', ['books' => $books->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="col-md-6 mb-3">
            <label for="title">id</label>
            <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                value="{{ old('id') ?? $books->kodebuku }}">
            @error('id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="judul">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                value="{{ old('judul') ?? $books->judul }}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title">halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman" id="halaman"
                    min="0" max="2099" value="{{ old('halaman') ?? $books->halaman }}">
                @error('halaman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="judul">kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') ?? $books->kategori }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="judul">penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    value="{{ old('penerbit') ?? $books->penerbit }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg btn-block">back
                <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
            </a>
    </form>
@endsection
