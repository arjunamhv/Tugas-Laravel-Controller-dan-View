@extends('layout')

@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card shadow mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/Profile.png') }}" class="img-fluid rounded-start" alt="profile">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Profile</h5>
                                <p class="card-text">An inquisitive mind and an adventurous spirit drive me forward. Dive into my story below for a closer look.</p>
                                <p class="card-text mt-auto"><small class="text-body-secondary"><a href="{{ url('profile') }}"
                                            class="btn btn-primary shadow-sm">Cek Profile</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/unnes-leaf.jpg') }}" class="img-fluid rounded-start" alt="unnes">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Universitas</h5>
                                <p class="card-text">Committed to academic excellence and fervent about conservation, Let's connect and achieve great things together!</p>
                                <p class="card-text"><small class="text-body-secondary"><a href="{{ url('universitas') }}"
                                            class="btn btn-primary shadow-sm">Cek Universitas</a></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
