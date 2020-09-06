@extends('layout/main')

@section('title','Students List')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="my-4">Students List</h4>

            @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="/students/create" class="btn btn-primary">Tambah Data Mahasiswa</a>

            <ul class="list-group mt-3">
                @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="/students/{{ $student->id }}" class="badge badge-info">Details</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection