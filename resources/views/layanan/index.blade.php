@extends('layouts.app')
@section('title', 'Daftar Layanan')
@section('content')
<section class="page-banner"><div class="container py-5"><span class="eyebrow">DAFTAR DATA</span><h1 class="fw-bold display-5 mt-2">Layanan Kereta Api</h1><p class="lead mb-0">Informasi layanan dan fasilitas terkait perjalanan kereta api.</p></div></section>
<section class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2 mb-4">
        <div><h2 class="fw-bold mb-1">Jelajahi layanan</h2><p class="text-secondary mb-0">Menampilkan {{ $layanans->count() }} data layanan dari database.</p></div>
        <span class="data-pill">Data dari database · Blade View</span>
    </div>
    <div class="row g-4">
        @forelse ($layanans as $layanan)
        <div class="col-sm-6 col-lg-4">
            <article class="service-card h-100">
                <div class="service-image-wrap"><img src="{{ asset($layanan->gambar) }}" class="service-image" alt="{{ $layanan->nama }}"></div>
                <div class="p-4 d-flex flex-column h-100">
                    <div class="d-flex justify-content-between align-items-center gap-2 mb-2"><span class="category-pill">{{ $layanan->kategori }}</span><span class="status-text">{{ $layanan->status }}</span></div>
                    <h5 class="fw-bold">{{ $layanan->nama }}</h5>
                    <p class="text-secondary flex-grow-1">{{ $layanan->deskripsi }}</p>
                    <div class="service-meta"><strong>Rute:</strong> {{ $layanan->rute ?: 'Informasi tersedia sesuai layanan' }}</div>
                    <a href="{{ route('layanan.show', $layanan) }}" class="btn btn-outline-kai mt-3">Lihat detail <span aria-hidden="true">→</span></a>
                </div>
            </article>
        </div>
        @empty
        <div class="col-12"><div class="alert alert-info">Belum ada data. Jalankan perintah <code>php artisan db:seed</code>.</div></div>
        @endforelse
    </div>
</section>
@endsection
