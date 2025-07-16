<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventaris Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* ===== BASE STYLES ===== */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #FFFDF6 0%, #f8f9fa 100%);
        color: #2D3436;
        line-height: 1.6;
        min-height: 100vh;
    }

    /* ===== NAVIGATION ===== */
    .navbar {
        background: #2D3436;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .navbar-content {
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2rem;
    }

    .logo {
        color: #A0C878;
        font-size: 1.5rem;
        font-weight: bold;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-links {
        display: flex;
        gap: 2rem;
    }

    .nav-links a {
        color: #FFFDF6;
        text-decoration: none;
        transition: color 0.3s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .nav-links a:hover {
        color: #A0C878;
    }

    /* ===== CONTAINER ===== */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    /* ===== PAGE HEADER ===== */
    .page-header {
        background: white;
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        border-top: 4px solid #A0C878;
    }

    .page-title {
        color: #2D3436;
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .page-subtitle {
        color: #636e72;
        font-size: 1.1rem;
    }

    /* ===== CARDS ===== */
    .card {
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .card-header {
        background: #A0C878;
        color: white;
        padding: 1.5rem;
        font-size: 1.2rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .card-body {
        padding: 2rem;
    }

    /* ===== BUTTONS ===== */
    .btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin: 0.25rem;
    }

    .btn-primary {
        background: #A0C878;
        color: white;
    }

    .btn-primary:hover {
        background: #8fb066;
        transform: translateY(-2px);
    }

    .btn-success {
        background: #00b894;
        color: white;
    }

    .btn-success:hover {
        background: #00a085;
    }

    .btn-warning {
        background: #fdcb6e;
        color: #2D3436;
    }

    .btn-warning:hover {
        background: #e17055;
        color: white;
    }

    .btn-danger {
        background: #e17055;
        color: white;
    }

    .btn-danger:hover {
        background: #d63031;
    }

    .btn-secondary {
        background: #636e72;
        color: white;
    }

    .btn-secondary:hover {
        background: #2D3436;
    }

    .btn-sm {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }

    /* ===== FORMS ===== */
    .mb-3 {
        margin-bottom: 1.5rem;
    }

    .form-label, label {
        display: block;
        margin-bottom: 0.5rem;
        color: #2D3436;
        font-weight: 500;
    }

    .form-control, .form-select {
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #ddd;
        border-radius: 8px;
        font-size: 1rem;
        transition: border-color 0.3s;
        background: white;
    }

    .form-control:focus, .form-select:focus {
        outline: none;
        border-color: #A0C878;
        box-shadow: 0 0 0 3px rgba(160, 200, 120, 0.1);
    }

    /* ===== TABLES ===== */
    .table-container {
        overflow-x: auto;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-top: 1rem;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    .table-bordered {
        border: none;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }

    .table-dark th {
        background: #2D3436 !important;
        color: white;
        padding: 1rem;
        text-align: left;
        font-weight: 600;
        border: none;
    }

    .table td {
        padding: 1rem;
        border-bottom: 1px solid #eee;
        vertical-align: middle;
        border-left: none;
        border-right: none;
    }

    .table tbody tr:hover {
        background: #e8f5e8;
    }

    /* ===== ALERTS ===== */
    .alert {
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
        border-left: 4px solid #28a745;
    }

    /* ===== ACTION BUTTONS ===== */
    .action-buttons {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .action-buttons .btn {
        margin: 0;
    }

    .d-inline {
        display: inline;
    }

    /* ===== HEADER ACTIONS ===== */
    .header-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
        .container {
            padding: 1rem;
        }
        
        .navbar-content {
            flex-direction: column;
            gap: 1rem;
        }
        
        .nav-links {
            flex-direction: column;
            text-align: center;
        }
        
        .action-buttons {
            flex-direction: column;
        }

        .header-actions {
            flex-direction: column;
            gap: 1rem;
        }
    }

    :root {
            --color-primary: #A0C878;
            --color-light: #FFFDF6;
            --color-dark: #2D3436;
            --color-secondary: #e8f4d9;
        }
        
        body {
            background-color: var(--color-light);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }
        
        /* Header Styles */
        .main-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--color-dark);
        }
        
        .logo-icon {
            color: var(--color-primary);
            font-size: 1.8rem;
            margin-right: 10px;
        }
        
        .logo-text {
            font-weight: 700;
            font-size: 1.3rem;
        }
        
        .search-container {
            display: flex;
            align-items: center;
            background-color: var(--color-light);
            border-radius: 20px;
            padding: 5px 15px;
            width: 40%;
            max-width: 500px;
        }
        
        .search-input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 8px;
            outline: none;
        }
        
        .search-button {
            background: none;
            border: none;
            color: var(--color-primary);
            cursor: pointer;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        
        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 40px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            margin-top: 20px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 35px;
        }
        
        .login-header h2 {
            color: var(--color-dark);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .login-header p {
            color: #6c757d;
        }
        
        .login-header .form-icon {
            color: var(--color-primary);
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        /* Form Styles */
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 0.25rem rgba(160, 200, 120, 0.25);
        }
        
        .btn-login {
            background-color: var(--color-primary);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            background-color: #8db36a;
            transform: translateY(-2px);
        }
        
        .signup-link {
            text-align: center;
            margin-top: 25px;
            color: var(--color-dark);
        }
        
        .signup-link a {
            color: var(--color-primary);
            font-weight: 600;
            text-decoration: none;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--color-primary);
        }
        
        .password-toggle {
            cursor: pointer;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-container {
                width: 100%;
                margin-top: 10px;
            }
            
            .login-container {
                padding: 30px 20px;
            }
        }

        :root {
            --color-primary: #A0C878;
            --color-light: #FFFDF6;
            --color-dark: #2D3436;
            --color-secondary: #e8f4d9;
        }
        
        body {
            background-color: var(--color-light);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
        }
        
        /* Header Styles */
        .main-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--color-dark);
        }
        
        .logo-icon {
            color: var(--color-primary);
            font-size: 1.8rem;
            margin-right: 10px;
        }
        
        .logo-text {
            font-weight: 700;
            font-size: 1.3rem;
        }
        
        .search-container {
            display: flex;
            align-items: center;
            background-color: var(--color-light);
            border-radius: 20px;
            padding: 5px 15px;
            width: 40%;
            max-width: 500px;
        }
        
        .search-input {
            border: none;
            background: transparent;
            width: 100%;
            padding: 8px;
            outline: none;
        }
        
        .search-button {
            background: none;
            border: none;
            color: var(--color-primary);
            cursor: pointer;
        }
        
        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        
        .signup-container {
            width: 100%;
            max-width: 600px;
            padding: 40px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 5px 25px rgba(0,0,0,0.08);
            margin-top: 20px;
        }
        
        .signup-header {
            text-align: center;
            margin-bottom: 35px;
        }
        
        .signup-header h2 {
            color: var(--color-dark);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .signup-header p {
            color: #6c757d;
        }
        
        .signup-header .form-icon {
            color: var(--color-primary);
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        /* Form Styles */
        .form-section {
            margin-bottom: 25px;
            position: relative;
        }
        
        .section-label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--color-dark);
            margin-bottom: 12px;
            padding-bottom: 5px;
            border-bottom: 2px solid var(--color-secondary);
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--color-primary);
            box-shadow: 0 0 0 0.25rem rgba(160, 200, 120, 0.25);
        }
        
        .btn-signup {
            background-color: var(--color-primary);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            transition: all 0.3s;
        }
        
        .btn-signup:hover {
            background-color: #8db36a;
            transform: translateY(-2px);
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            color: var(--color-dark);
        }
        
        .login-link a {
            color: var(--color-primary);
            font-weight: 600;
            text-decoration: none;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .input-icon {
            position: relative;
        }
        
        .input-icon i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--color-primary);
        }
        
        .password-toggle {
            cursor: pointer;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-container {
                width: 100%;
                margin-top: 10px;
            }
            
            .signup-container {
                padding: 30px 20px;
            }
        }
</style>
</head>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
<script>
    // Enhanced JavaScript for better UX
    document.addEventListener('DOMContentLoaded', function() {
        // Delete confirmation with better styling
        document.querySelectorAll('form[method="POST"]').forEach(form => {
            if (form.querySelector('button[class*="btn-danger"]')) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Apakah Anda yakin ingin menghapus barang ini? Aksi ini tidak dapat dibatalkan.')) {
                        this.submit();
                    }
                });
            }
        });

        // Add loading state to buttons
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                const submitBtn = this.querySelector('button[type="submit"]');
                if (submitBtn && !submitBtn.classList.contains('btn-danger')) {
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing...';
                    submitBtn.disabled = true;
                    
                    // Re-enable after 3 seconds if form doesn't submit
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 3000);
                }
            });
        });
    });
</script>
</body>
</html>