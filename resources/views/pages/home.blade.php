@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
<section class="hero-section">
    <div class="container py-5">
        <div class="row align-items-center min-vh-50 g-4">
            <div class="col-lg-7">
                <span class="eyebrow">MELAJU UNTUK INDONESIA</span>
                <h1 class="display-4 fw-bold mt-3">Menghubungkan perjalanan, <span class="text-kai-red">mendekatkan tujuan.</span></h1>
                <p class="lead text-secondary mt-3">Mengenal PT Kereta Api Indonesia (Persero), layanan perjalanan, dan komitmen menghadirkan transportasi yang aman, nyaman, serta tepat waktu.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('layanan.index') }}" class="btn btn-kai btn-lg">Jelajahi Layanan</a>
                    <a href="{{ route('profil') }}" class="btn btn-outline-dark btn-lg">Tentang KAI</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-visual">
                    <img src="{{ asset('images/layanan/KERETA API JARAK JAUH.jpg') }}" alt="Kereta api jarak jauh" class="img-fluid">
                    <div class="hero-note"><span class="note-dot"></span> Bergerak bersama, melayani negeri</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container py-5">
    <div class="section-heading text-center mx-auto">
        <span class="eyebrow">KENALI LEBIH DEKAT</span>
        <h2 class="fw-bold mt-2">Transportasi untuk berbagai kebutuhan</h2>
        <p class="text-secondary">Dari perjalanan antarkota hingga layanan pendukung di stasiun, kereta api menjadi bagian dari mobilitas masyarakat.</p>
    </div>
    <div class="row g-4 mt-2">
        <div class="col-md-4"><div class="feature-card h-100"><div class="feature-icon">01</div><h5>Perjalanan</h5><p class="text-secondary mb-0">Pilihan layanan kereta untuk kebutuhan perjalanan masyarakat.</p></div></div>
        <div class="col-md-4"><div class="feature-card h-100"><div class="feature-icon">02</div><h5>Pelayanan</h5><p class="text-secondary mb-0">Informasi dan fasilitas untuk mendukung pengalaman pelanggan.</p></div></div>
        <div class="col-md-4"><div class="feature-card h-100"><div class="feature-icon">03</div><h5>Konektivitas</h5><p class="text-secondary mb-0">Mendukung koneksi perjalanan dengan moda transportasi lain.</p></div></div>
    </div>
</section>
@endsection
