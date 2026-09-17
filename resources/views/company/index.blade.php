@extends('layouts.main')

@section('content')

<!-- 1. Cover Depan / Hero Section -->
<section id="hero" class="bg-dark text-white text-center py-5 position-relative" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/motor 1.jpg') }}') center/cover no-repeat; min-height: 80vh;">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center" style="min-height: 70vh;">
        <h1 class="display-3 fw-bold text-warning">THUNDER RIDERS MC</h1>
        <p class="lead fs-4">Komunitas & Penyedia Layanan Touring Profesional Indonesia</p>
        <a href="#about" class="btn btn-warning btn-lg mt-3 fw-semibold">Jelajahi Profil Kami</a>
    </div>
</section>

<!-- 2 & 3. Kata Pengantar & About Us -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <span class="text-warning fw-bold">TENTANG KAMI</span>
                <h2 class="fw-bold mb-4">Persaudaraan di Atas Dua Roda</h2>
                <p class="text-muted">Didirikan pada tahun 2015, <strong>Thunder Riders MC</strong> berkembang dari komunitas otomotif lokal menjadi organisasi independen yang menaungi penggemar touring, keselamatan berkendara (<em>safety riding</em>), dan manajemen event otomotif skala nasional.</p>
                <p class="text-muted">Kami berkomitmen membangun citra positif bagi pengendara sepeda motor di Indonesia melalui aksi sosial, edukasi lalu lintas, serta kerja sama strategis dengan berbagai brand ternama.</p>
            </div>
            <div class="col-md-6">
                <!-- 4. Visi Misi -->
                <div class="bg-light p-4 rounded border-start border-4 border-warning shadow-sm">
                    <h4 class="fw-bold"><i class="bi bi-eye text-warning me-2"></i>Visi</h4>
                    <p>Menjadi klub motor terdepan yang profesional, pelopor keselamatan berkendara, serta berdampak positif bagi masyarakat.</p>
                    <hr>
                    <h4 class="fw-bold"><i class="bi bi-bullseye text-warning me-2"></i>Misi</h4>
                    <ul>
                        <li>Mengedukasi anggota dan masyarakat mengenai <em>safety riding</em>.</li>
                        <li>Mengorganisasi event dan touring otomotif yang tertib dan profesional.</li>
                        <li>Menjalin kemitraan yang saling menguntungkan dengan klien dan sponsor.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5 & 6. Kelebihan & Produk/Jasa -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Produk & Layanan Kami</h2>
            <p class="text-muted">Layanan profesional yang kami tawarkan untuk mitra dan anggota</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <i class="bi bi-geo-alt-fill display-4 text-warning mb-3"></i>
                        <h5 class="card-title fw-bold">Touring Management</h5>
                        <p class="card-text text-muted">Jasa pengelolaan dan pengawalan <em>touring</em> komersial maupun privat dengan standar rute yang aman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <i class="bi bi-shield-check display-4 text-warning mb-3"></i>
                        <h5 class="card-title fw-bold">Safety Riding Training</h5>
                        <p class="card-text text-muted">Pelatihan teknik berkendara aman bagi korporasi atau komunitas oleh instruktur bersertifikat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-3">
                    <div class="card-body">
                        <i class="bi bi-shop display-4 text-warning mb-3"></i>
                        <h5 class="card-title fw-bold">Merchandise Resmi</h5>
                        <p class="card-text text-muted">Penjualan apparel otomotif berkualitas tinggi, seperti jaket, helm, dan aksesori berkendara.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. Galeri Foto -->
<section id="gallery" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Galeri Kegiatan</h2>
            <p class="text-muted">Dokumentasi momen persaudaraan dan petualangan kami</p>
        </div>
        <div class="row g-3">
            @forelse($galleries as $gallery)
                <div class="col-md-4">
                    <img src="{{ $gallery->image_url }}" class="img-fluid rounded shadow-sm w-100" style="height: 250px; object-fit: cover;" alt="{{ $gallery->title }}">
                </div>
            @empty
                <div class="col-md-4"><img src="{{ asset('images/motor 1.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="height: 250px; object-fit: cover;" alt="Touring Motor"></div>
                <div class="col-md-4"><img src="{{ asset('images/motor 2.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="height: 250px; object-fit: cover;" alt="Motor Sport"></div>
                <div class="col-md-4"><img src="{{ asset('images/helm.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="height: 250px; object-fit: cover;" alt="Perlengkapan Helm"></div>
            @endforelse
        </div>
    </div>
</section>

<!-- 8. Daftar Klien -->
<section class="py-4 bg-dark text-white">
    <div class="container text-center">
        <h5 class="fw-bold mb-4 text-warning">MITRA & KLIEN KAMI</h5>
        <div class="d-flex justify-content-around align-items-center flex-wrap gap-3">
            <span class="fs-4 fw-bold">PERTAMINA LUBRICANTS</span>
            <span class="fs-4 fw-bold">HONDA INDONESIA</span>
            <span class="fs-4 fw-bold">YAMAHA RIDING ACADEMY</span>
            <span class="fs-4 fw-bold">EIGER ADVENTURE</span>
        </div>
    </div>
</section>

<!-- 11. Event Perusahaan -->
<section id="events" class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Kegiatan & Event Agenda</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-warning text-dark mb-2">Mendatang</span>
                        <h5 class="card-title fw-bold">National Annual Rally 2026</h5>
                        <p class="text-muted mb-1"><i class="bi bi-calendar3"></i> 15 Oktober 2026 | <i class="bi bi-geo-alt"></i> Bali - Lombok</p>
                        <p class="card-text">Agenda touring tahunan menyusuri keindahan pesisir Bali hingga NTB bersama seluruh anggota.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <span class="badge bg-secondary mb-2">Selesai</span>
                        <h5 class="card-title fw-bold">Bakti Sosial & Donor Darah</h5>
                        <p class="text-muted mb-1"><i class="bi bi-calendar3"></i> 12 Agustus 2026 | <i class="bi bi-geo-alt"></i> Jakarta</p>
                        <p class="card-text">Kegiatan bakti sosial dan penggalangan dana untuk membantu fasilitas pendidikan daerah terpencil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 10. Artikel -->
<section id="articles" class="py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Artikel & Tips Otomotif</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/motor 1.jpg') }}" class="card-img-top" alt="Tips Safety Riding" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Persiapan Touring Jarak Jauh</h5>
                        <p class="card-text text-muted">Panduan mengecek kondisi fisik kendaraan dan perlengkapan wajib sebelum <em>touring</em>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/motor 2.jpg') }}" class="card-img-top" alt="Maintenance" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Perawatan Rantai Motor</h5>
                        <p class="card-text text-muted">Cara merawat dan membersihkan rantai motor agar tetap awet dan responsif saat berkendara.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <img src="{{ asset('images/helm.jpg') }}" class="card-img-top" alt="Helmet Guide" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Memilih Helm Berstandar SNI</h5>
                        <p class="card-text text-muted">Pentingnya sertifikasi helm untuk kenyamanan dan keamanan berkendara sehari-hari.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. Kontak Kami -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Hubungi Kami</h2>
                <p><i class="bi bi-geo-alt-fill text-warning me-2"></i> Jl. Otomotif No. 123, Jakarta Selatan</p>
                <p><i class="bi bi-telephone-fill text-warning me-2"></i> +62 812-3456-7890</p>
                <p><i class="bi bi-envelope-fill text-warning me-2"></i> info@thunderriders.id</p>
            </div>
            <div class="col-md-6">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('contact.store') }}" method="POST" class="shadow-sm p-4 bg-white rounded">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
