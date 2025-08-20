@extends('app')
@section('title', 'Tambah Pengguna')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title ?? 'Tambah Pengguna' }}</h3>

                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">nama*</label>
                            <input type="name" class="form-control" name="name" placeholder="Masukan nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">password*</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukan password" required>
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
