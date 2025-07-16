@extends('layouts.app')

@section('content')
    <!-- Navbar Stylish -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #A0C878; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#" style="color: #FFFDF6;">
                <i class="fas fa-boxes me-2"></i>Inventaris Barang
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" 
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" style="color: #FFFDF6;">
                            <i class="fas fa-home me-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #FFFDF6;" id="profileBtn">
                            <i class="fas fa-user me-1"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/" style="color: #FFFDF6;">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container -->
    <div class="container-fluid py-4" style="background-color: #FFFDF6; min-height: calc(100vh - 56px);">
        <div class="container">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h1 class="fw-bold" style="color: #2D3436;">
                    <i class="fas fa-tachometer-alt me-2" style="color: #A0C878;"></i>Dashboard Inventaris
                </h1>
                <div class="d-flex">
                    <div class="me-3 p-2 rounded" style="background-color: #DDEB9D;">
                        <small class="text-muted">Tanggal</small>
                        <div class="fw-bold">{{ date('d F Y') }}</div>
                    </div>
                    <div class="p-2 rounded" style="background-color: #DDEB9D;">
                        <small class="text-muted">Pengguna</small>
                        <div class="fw-bold">{{ Auth::user()->name ?? 'Admin' }}</div>
                    </div>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="row g-4">
                <!-- Data Pengguna -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-users me-2" style="color: #A0C878;"></i>Data Pengguna
                                    </h5>
                                    <p class="card-text text-muted small">Kelola akun pengguna sistem</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">24 User</span>
                            </div>
                            <a href="pengguna/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Data Barang -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-boxes me-2" style="color: #A0C878;"></i>Data Barang
                                    </h5>
                                    <p class="card-text text-muted small">Lihat dan kelola data barang</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">156 Item</span>
                            </div>
                            <a href="barang/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kategori Barang -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-tags me-2" style="color: #A0C878;"></i>Kategori Barang
                                    </h5>
                                    <p class="card-text text-muted small">Atur kategori barang sesuai jenis</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">12 Kategori</span>
                            </div>
                            <a href="kategori-barang/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Barang Masuk -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-arrow-down me-2" style="color: #A0C878;"></i>Barang Masuk
                                    </h5>
                                    <p class="card-text text-muted small">Catat barang yang masuk ke gudang</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">30 Hari</span>
                            </div>
                            <a href="barang-masuk/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Barang Keluar -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-arrow-up me-2" style="color: #A0C878;"></i>Barang Keluar
                                    </h5>
                                    <p class="card-text text-muted small">Kelola barang keluar dari gudang</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">30 Hari</span>
                            </div>
                            <a href="barang-keluar/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pemasok -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-truck me-2" style="color: #A0C878;"></i>Pemasok
                                    </h5>
                                    <p class="card-text text-muted small">Data pemasok barang</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">8 Vendor</span>
                            </div>
                            <a href="pemasok" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Penyesuaian Stok -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-exchange-alt me-2" style="color: #A0C878;"></i>Penyesuaian Stok
                                    </h5>
                                    <p class="card-text text-muted small">Kelola perubahan stok manual</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">7 Hari</span>
                            </div>
                            <a href="stok-adjustment/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Log Aktivitas -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm" style="border-left: 4px solid #A0C878;">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="card-title fw-bold mb-1" style="color: #2D3436;">
                                        <i class="fas fa-history me-2" style="color: #A0C878;"></i>Log Aktivitas
                                    </h5>
                                    <p class="card-text text-muted small">Lihat aktivitas pengguna</p>
                                </div>
                                <span class="badge rounded-pill" style="background-color: #DDEB9D; color: #2D3436;">24 Jam</span>
                            </div>
                            <a href="log-aktivitas/" class="btn btn-sm mt-3" style="background-color: #A0C878; color: white;">
                                Kelola <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Section -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-3" style="color: #2D3436;">
                                <i class="fas fa-chart-line me-2" style="color: #A0C878;"></i>Ringkasan Cepat
                            </h5>
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <div class="p-3 rounded" style="background-color: #FFFDF6;">
                                        <h6 class="text-muted">Total Barang</h6>
                                        <h3 class="fw-bold" style="color: #A0C878;">156</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 rounded" style="background-color: #FFFDF6;">
                                        <h6 class="text-muted">Barang Masuk (7d)</h6>
                                        <h3 class="fw-bold" style="color: #A0C878;">24</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 rounded" style="background-color: #FFFDF6;">
                                        <h6 class="text-muted">Barang Keluar (7d)</h6>
                                        <h3 class="fw-bold" style="color: #A0C878;">18</h3>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="p-3 rounded" style="background-color: #FFFDF6;">
                                        <h6 class="text-muted">Stok Rendah</h6>
                                        <h3 class="fw-bold" style="color: #A0C878;">7</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<!-- Modal Profil User -->
<div id="profileModal" class="modal" tabindex="-1" style="display:none; background-color: rgba(0,0,0,0.5); position:fixed; top:0; left:0; width:100%; height:100%; z-index:1050;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header" style="background-color: #A0C878;">
                <h5 class="modal-title text-white">Biodata Pengguna</h5>
                <button type="button" class="btn-close" id="closeModalBtn" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless">
                    <tr><td><strong>Nama</strong></td><td>{{ Auth::user()->name ?? '-' }}</td></tr>
                    <tr><td><strong>Email</strong></td><td>{{ Auth::user()->email ?? '-' }}</td></tr>
                    <tr><td><strong>Role</strong></td><td>Admin</td></tr>
                    <tr><td><strong>Login Terakhir</strong></td><td>{{ now()->format('d M Y, H:i') }}</td></tr>
                </table>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("profileModal");
        const openBtn = document.getElementById("profileBtn");
        const closeBtn = document.getElementById("closeModalBtn");

        openBtn.addEventListener("click", function (e) {
            e.preventDefault();
            modal.style.display = "block";
        });

        closeBtn.addEventListener("click", function () {
            modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>
