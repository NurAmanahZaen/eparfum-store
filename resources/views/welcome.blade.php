@extends('layouts.app')

@section('content')
<!-- Tampilan Hero Section -->
<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Selamat Datang di Toko Parfum Kami</h1>
        <p class="lead">Temukan koleksi parfum terbaik dengan aroma yang memikat. Nikmati pengalaman belanja parfum secara online.</p>
        <a href="{{ route('home') }}" class="btn btn-light btn-lg">Jelajahi Sekarang</a>
    </div>
</section>

<!-- Tampilan Tentang Kami -->
<section class="about py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Tentang Kami</h2>
                <p>Kami adalah toko parfum yang menyediakan berbagai macam parfum berkualitas dari berbagai brand ternama. Kami berkomitmen untuk memberikan pelayanan terbaik dan pengalaman belanja yang menyenangkan bagi pelanggan kami.</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/parfum_collection.jpg') }}" class="img-fluid" alt="Parfum Collection">
            </div>
        </div>
    </div>
</section>

<!-- Tampilan Produk Unggulan -->
<section class="featured-products bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Produk Unggulan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/parfum2.jpg') }}" class="card-img-top" alt="Parfum Floral">
                    <div class="card-body">
                        <h5 class="card-title">Parfum Floral</h5>
                        <p class="card-text">Aroma bunga yang menyegarkan dan memikat.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/parfum3.jpg') }}" class="card-img-top" alt="Parfum Woody">
                    <div class="card-body">
                        <h5 class="card-title">Parfum Woody</h5>
                        <p class="card-text">Aroma kayu yang elegan dan maskulin.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/parfum1.jpg') }}" class="card-img-top" alt="Parfum Oriental">
                    <div class="card-body">
                        <h5 class="card-title">Parfum Oriental</h5>
                        <p class="card-text">Aroma oriental yang misterius dan eksotis.</p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
