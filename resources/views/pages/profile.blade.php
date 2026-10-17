@extends('layouts.app')
@section('title', 'Profil Perusahaan')
@section('content')
<section class="page-banner"><div class="container py-5"><span class="eyebrow">PROFIL PERUSAHAAN</span><h1 class="fw-bold display-5 mt-2">PT Kereta Api Indonesia (Persero)</h1><p class="lead mb-0">Mengenal perusahaan dan peran kereta api dalam mendukung mobilitas Indonesia.</p></div></section>
<section class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-5"><img class="img-fluid profile-image" src="{{ asset('images/layanan/LAYANAN STASIUN KAI.jpg') }}" alt="Loket dan layanan pelanggan KAI"></div>
        <div class="col-lg-7"><h2 class="fw-bold">Tentang KAI</h2><p>PT Kereta Api Indonesia (Persero) merupakan badan usaha milik negara yang bergerak di bidang jasa transportasi perkeretaapian. KAI menyediakan layanan angkutan penumpang dan barang serta terus mendukung perkembangan transportasi berbasis rel.</p><p>Melalui operasional perjalanan dan pelayanan di stasiun, KAI berperan dalam membantu masyarakat bepergian dan mendukung aktivitas ekonomi.</p><div class="info-strip"><strong>Fokus layanan</strong><br>Keselamatan, kenyamanan, pelayanan pelanggan, dan konektivitas.</div></div>
    </div>
    <div class="row g-4 mt-4">
        <div class="col-md-6"><div class="feature-card h-100"><h5>Visi layanan</h5><p class="mb-0 text-secondary">Mendukung transportasi publik yang andal dan berorientasi pada kebutuhan pelanggan.</p></div></div>
        <div class="col-md-6"><div class="feature-card h-100"><h5>Komitmen</h5><p class="mb-0 text-secondary">Mengutamakan keselamatan, peningkatan kualitas pelayanan, dan pengembangan berkelanjutan.</p></div></div>
    </div>
    <p class="small text-secondary mt-4">Catatan: uraian di halaman ini disusun untuk kebutuhan tugas akademik. Silakan verifikasi dan sesuaikan dengan sumber resmi jika digunakan untuk publikasi.</p>
</section>
@endsection
