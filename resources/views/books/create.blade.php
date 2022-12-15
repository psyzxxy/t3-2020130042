@extends('layout.master')
@section('title', 'Add New Books')
@section('content')
    <h2>Add New Books</h2>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 mb-3">
            <label for="title">Kode Buku</label>
            <input type="text" class="form-control @error('kodebuku') is-invalid @enderror" name="kodebuku" id="kodebuku"
                value="{{ old('kodebuku') }}">
            @error('kodebuku')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="judul">judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul"
                value="{{ old('judul') }}">
            @error('judul')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="title">halaman</label>
                <input type="number" class="form-control @error('halaman') is-invalid @enderror" name="halaman" id="halaman"
                    min="0" max="2099" value="{{ old('halaman') }}">
                @error('halaman')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="judul">kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" id="kategori"
                    value="{{ old('kategori') }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="judul">penerbit</label>
                <input type="text" class="form-control @error('penerbit') is-invalid @enderror" name="penerbit" id="penerbit"
                    value="{{ old('penerbit') }}">
                @error('penerbit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- </div> --}}
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>

            <a href="{{ route('books.index') }}" class="btn btn-primary btn-lg btn-block">back
                <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
            </a>
        </div>
    </form>
@endsection
{{-- @push('js_after')
    <script>
        // Untuk upload file
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
    @endpus --}}
