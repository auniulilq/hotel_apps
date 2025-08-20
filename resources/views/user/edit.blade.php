@extends('app')
@section('title', 'Tambah Pengguna')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title ?? '' }}</h3>

                    <form action="{{ route('user.update', $edit->id) }}" method="post">
                        @csrf
                        @method('PUt')
                        <div class="mb-3">
                            <label for="" class="form-label">nama*</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama" required
                                value="{{ $edit->name ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">email*</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email" required
                                value="{{ $edit->email ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">password*</label>
                            <input type="" class="form-control" name="password" placeholder="Masukan Password"
                                required>

                            <small class="text-danger">)* Jika ingin ubah silahkan isi Password</small>
                        </div>


                        <div class="mb-3">
                            <button class="btn btn-primary">simpan perubahan</button>
                            <a href="{{ url()->previous() }}" class="text-muted">kembali</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>1
    </div>
@endsection
