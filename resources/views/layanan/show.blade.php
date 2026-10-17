@extends('layouts.app')
@section('title', $layanan->nama)
@section('content')
<section class="page-banner"><div class="container py-4"><a href="{{ route('layanan.index') }}" class="back-link">← Kembali ke daftar layanan</a><h1 class="fw-bold display-5 mt-3">{{ $layanan->nama }}</h1><p class="lead mb-0">{{ $layanan->kategori }}</p></div></section>
<section class="container py-5">
    <div class="row g-5 align-items-start">
        <div class="col-lg-6"><img class="img-fluid detail-image" src="{{ asset($layanan->gambar) }}" alt="{{ $layanan->nama }}"></div>
        <div class="col-lg-6"><span class="category-pill">{{ $layanan->kategori }}</span><h2 class="fw-bold mt-3">{{ $layanan->nama }}</h2><p class="text-secondary">{{ $layanan->deskripsi }}</p>
            <dl class="detail-list">
                <div><dt>Rute/cakupan</dt><dd>{{ $layanan->rute ?: 'Informasi sesuai layanan' }}</dd></div>
                <div><dt>Jam operasional</dt><dd>{{ $layanan->jam_operasional ?: 'Mengikuti jadwal yang berlaku' }}</dd></div>
                <div><dt>Status informasi</dt><dd>{{ $layanan->status }}</dd></div>
                <div><dt>Diperbarui</dt><dd>{{ $layanan->updated_at?->format('d-m-Y') }}</dd></div>
            </dl>
            @if ($layanan->url_pemesanan)
            <a href="{{ $layanan->url_pemesanan }}" target="_blank" rel="noopener" class="btn btn-kai mt-2">Buka kanal terkait ↗</a>
            @endif
        </div>
    </div>
</section>
@endsection
