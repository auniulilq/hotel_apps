@extends('app')
@section('title', 'Tambah Kategori Kamar')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title ?? '' }}</h3>

                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">nama*</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary">simpan</button>
                            <a href="{{ url()->previous() }}" class="text-muted">kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
