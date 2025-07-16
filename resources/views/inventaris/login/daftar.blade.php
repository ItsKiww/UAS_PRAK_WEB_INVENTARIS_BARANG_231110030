@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <header class="main-header">
        <div class="header-content">
            <a href="#" class="logo">
                <i class="fas fa-boxes logo-icon"></i>
                <span class="logo-text">InventarisKu</span>
            </a>
            
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari barang...">
                <button class="search-button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="signup-container">
            <div class="signup-header">
                <div class="form-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2>Buat Akun Baru</h2>
                <p>Daftarkan diri Anda untuk mengakses sistem inventaris</p>
            </div>
            
            <form method="post" action="/daftar">
                @csrf
                <!-- Akun Section -->
                <div class="form-section">
                    <span class="section-label">
                        <i class="fas fa-user-circle me-2"></i>Informasi Akun
                    </span>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-icon">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Buat username unik" required>
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-icon">
                            <input type="password" class="form-control" name="pass" id="password" placeholder="Buat password kuat" required>
                            <i class="fas fa-lock password-toggle" onclick="togglePassword('password')"></i>
                        </div>
                        <div class="form-text">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Konfirmasi Password</label>
                        <div class="input-icon">
                            <input type="password" class="form-control" id="confirm-password" placeholder="Ketik ulang password" required>
                            <i class="fas fa-lock password-toggle" onclick="togglePassword('confirm-password')"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Data Pribadi Section -->
                <div class="form-section">
                    <span class="section-label">
                        <i class="fas fa-id-card me-2"></i>Data Pribadi
                    </span>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nama Lengkap</label>
                        <div class="input-icon">
                            <input type="text" class="form-control" name="nama" id="fullname" placeholder="Nama lengkap Anda" required>
                            <i class="fas fa-user-tag"></i>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-icon">
                            <input type="email" class="form-control" name="email" id="email" placeholder="alamat@email.com" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="contact" class="form-label">Nomor Telepon</label>
                        <div class="input-icon">
                            <input type="tel" class="form-control" name="kontak" id="contact" placeholder="081234567890" required>
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">Saya menyetujui <a href="#" style="color: var(--color-primary);">syarat dan ketentuan</a></label>
                </div>
                
                <button type="submit" class="btn btn-signup">
                    <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                </button>
                
                <div class="login-link">
                    <p>Sudah punya akun? <a href="/">Masuk disini</a></p>
                </div>
            </form>
        </div>
    </main>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    
    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = field.nextElementSibling;
            
            if (field.type === "password") {
                field.type = "text";
                icon.classList.remove('fa-lock');
                icon.classList.add('fa-lock-open');
            } else {
                field.type = "password";
                icon.classList.remove('fa-lock-open');
                icon.classList.add('fa-lock');
            }
        }
    </script>
@endsection