@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container mt-2">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $student->nim }}</h6>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->jurusan }}</p>
                        <a href="{{ $student->id }}/edit">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                        <form action="{{ $student->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <br><br>
                        <a href="/students" class="card-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection