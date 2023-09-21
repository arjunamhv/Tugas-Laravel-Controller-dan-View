@extends('layout')

@section('content')
    <div class="card shadow w-50 m-auto">
        <div class="card-body">
            <h5 class="card-title">My Profile</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Nama
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-8">
                            {{ $nama }}
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Tempat kuliah
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-8">
                            {{ $tempatKuliah }} <a href="{{ url('universitas') }}" class="badge bg-primary">Cek
                                Universitas</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Jurusan kuliah
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-8">
                            {{ $jurusan }}
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Kegiatan saat ini
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-8">
                            {{ $studi }}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
@endsection
