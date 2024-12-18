@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1>Selamat Datang di Toko Parfum Kami</h1>
            <p>Temukan parfum favoritmu dengan berbagai pilihan aroma terbaik.</p>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/profile_toko1.jpg') }}" class="d-block w-100" alt="Parfum Premium">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/profile_toko2.jpg') }}" class="d-block w-100" alt="Parfum Elegan">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/profile_toko3.jpg') }}" class="d-block w-100" alt="Parfum Fresh">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Cards untuk menampilkan produk parfum -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/parfum1.jpg') }}" class="card-img-top" alt="Parfum Floral">
                <div class="card-body">
                    <h5 class="card-title">Parfum Floral</h5>
                    <p class="card-text">Aroma bunga yang menyegarkan dan memikat.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/parfum2.jpg') }}" class="card-img-top" alt="Parfum Woody">
                <div class="card-body">
                    <h5 class="card-title">Parfum Woody</h5>
                    <p class="card-text">Aroma kayu yang elegan dan maskulin.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/parfum3.jpg') }}" class="card-img-top" alt="Parfum Oriental">
                <div class="card-body">
                    <h5 class="card-title">Parfum Oriental</h5>
                    <p class="card-text">Aroma oriental yang misterius dan eksotis.</p>
                    <a href="#" class="btn btn-primary">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
