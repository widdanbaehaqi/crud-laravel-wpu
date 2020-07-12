@extends('layout.main')

@section('title', 'Data Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-2">Data Mahasiswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <ul class="list-group">
                    @foreach ($students as $student)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$student->nama}}
                        <a href="/students/{{$student->id}}" class="badge badge-primary">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection