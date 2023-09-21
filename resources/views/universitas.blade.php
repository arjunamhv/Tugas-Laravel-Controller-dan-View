@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card shadow m-auto">
                    <div class="card-body">
                        <h5 class="card-title">State University of Semarang</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
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
                                        Alamat
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-8">
                                        {{ $alamat }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        website
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-8">
                                        {{ $website }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        kontak
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-8">
                                        {{ $kontak }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        instagram
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-8">
                                        {{ $instagram }}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        twitter
                                    </div>
                                    <div class="col-1">
                                        :
                                    </div>
                                    <div class="col-8">
                                        {{ $twitter }}
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.647557853069!2d110.3898478737927!3d-7.0506355929516085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b3a1e3a1529%3A0x4cda1f81771c5e97!2sUniversitas%20Negeri%20Semarang%20(UNNES)!5e0!3m2!1sid!2sid!4v1695270546189!5m2!1sid!2sid"
                    width="100%" height="100%" class="shadow rounded border border-1" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
