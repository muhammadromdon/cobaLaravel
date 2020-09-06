@extends('layout/main')

@section('title','Add Students Data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h4 class="mt-3">Ubah Data Mahasiswa</h4>

            <form method="POST" action="/students/{{ $student->id }}" class="mt-5">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama anda.." name="nama" value="{{ $student->nama }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="masukkan nrp anda.." name="nrp" value="{{ $student->nrp }}">
                    @error('nrp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="masukkan email anda.." name="email" value="{{ $student->email }}">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="masukkan jurusan anda.." name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button class="btn-sm btn-primary" type="submit">Ubah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection