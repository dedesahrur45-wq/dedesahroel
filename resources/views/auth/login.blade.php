<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIMASET Sekolah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <style>
        /* Reset dan dasar */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: #333;
}

/* Kontainer login */
.login-container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
}

/* Card */
.login-card {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    padding: 30px 25px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.25);
}

/* Header */
.login-header {
    text-align: center;
    margin-bottom: 25px;
}

.login-logo {
    font-size: 2rem;
    font-weight: 700;
    color: #764ba2;
}

.login-subtitle {
    font-size: 0.95rem;
    color: #555;
    margin-top: 5px;
}

/* Alerts */
.error-alert, .success-alert {
    border-radius: 8px;
    padding: 12px 15px;
    margin-bottom: 20px;
    font-size: 0.9rem;
}

.error-alert {
    background-color: #ffe5e5;
    color: #d93025;
}

.success-alert {
    background-color: #e6f4ea;
    color: #188038;
}

/* Form */
.form-group {
    margin-bottom: 18px;
}

.form-label {
    display: block;
    font-weight: 500;
    margin-bottom: 6px;
    color: #333;
}

.form-input {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 0.95rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-input:focus {
    border-color: #764ba2;
    box-shadow: 0 0 0 3px rgba(118, 75, 162, 0.2);
    outline: none;
}

.error-message {
    font-size: 0.85rem;
    color: #d93025;
    margin-top: 4px;
}

/* Checkbox */
.checkbox-wrapper {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.checkbox-input {
    margin-right: 8px;
    width: 16px;
    height: 16px;
}

.checkbox-label {
    font-size: 0.9rem;
    color: #555;
}

/* Button */
.btn-primary {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #764ba2;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background: #5a3490;
    transform: translateY(-2px);
}

/* Demo Info */
.demo-info {
    margin-top: 25px;
    font-size: 0.85rem;
    background: #f5f5f5;
    padding: 12px 15px;
    border-radius: 8px;
}

.demo-label {
    font-weight: 500;
    display: block;
    margin-bottom: 8px;
}

.demo-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.demo-credential {
    font-weight: 600;
    color: #764ba2;
}

    </style>
    <div class="login-container">
        <div class="login-card">
            <!-- Header -->
            <div class="login-header">
                <span class="login-logo">SIMASET</span>
                <p class="login-subtitle">Sistem Informasi Manajemen Aset Sekolah</p>
            </div>

            <!-- Alert Messages -->
            @if ($errors->any())
                <div class="error-alert">
                    <p class="error-title">Terjadi kesalahan</p>
                    <ul class="error-list">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="success-alert">
                    ✓ {{ session('success') }}
                </div>
            @endif

            <!-- Form Login -->
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email Anda"
                        class="form-input"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password Anda"
                        class="form-input"
                        required
                    >
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="checkbox-wrapper">
                    <input
                        type="checkbox"
                        id="remember"
                        name="remember"
                        class="checkbox-input"
                    >
                    <label for="remember" class="checkbox-label">Ingat saya</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </form>

            <!-- Demo Info -->
                        <div class="demo-info">
                            <span class="demo-label">🔓 Akun Demo:</span>
                            <div class="demo-item">
                                    <span>Email:</span>
                                    <span class="demo-credential">admin@example.com</span>
                                </div>
                                <div class="demo-item">
                                    <span>Password:</span>
                                    <span class="demo-credential">111111</span>
                                </div>
                        </div>
                    </div>
                </div>
</body>
</html>
