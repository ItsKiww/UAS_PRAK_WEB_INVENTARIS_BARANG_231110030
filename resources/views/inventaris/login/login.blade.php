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
        <div class="login-container">
            <div class="login-header">
                <div class="form-icon">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <h2>Masuk ke Akun Anda</h2>
                <p>Silakan login untuk mengakses sistem inventaris</p>
            </div>
            
            <form  method="post" action="/masuk">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-icon">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username" required>
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-icon">
                        <input type="password" name="pass" class="form-control" id="password" placeholder="Masukkan password" required>
                        <i class="fas fa-lock password-toggle" onclick="togglePassword('password')"></i>
                    </div>
                </div>
                
                <div class="remember-forgot">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Ingat saya</label>
                    </div>
                    <a href="#" style="color: var(--color-primary);">Lupa password?</a>
                </div>
                
                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>Masuk
                </button>
                
                <div class="signup-link">
                    <p>Belum punya akun? <a href="/daftar">Daftar disini</a></p>
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