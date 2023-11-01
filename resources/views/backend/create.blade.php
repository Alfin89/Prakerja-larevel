@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Siswa</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                            value="{{ old('nama') }}">
                    </div>
                    <div class="form-group">
                        <label>NIS</label>
                        <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror"
                            value="{{ old('nis') }}">
                    </div>
                    <div class="form-group">
                        <label>Tetala</label>
                        <input type="text" name="tetala" class="form-control @error('tetala') is-invalid @enderror"
                            value="{{ old('tetala') }}">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" name="kelas" class="form-control @error('kelas') is-invalid @enderror"
                            value="{{ old('kelas') }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            value="{{ old('alamat') }}">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror"
                            value="{{ old('umur') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
