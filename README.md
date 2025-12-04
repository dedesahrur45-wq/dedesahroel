# SIMASET Sekolah

Sistem Informasi Manajemen Aset Sekolah (SIMASET Sekolah)

Ringkasan singkat aplikasi ini, dependensi, cara menjalankan, dan struktur utama disusun di bawah untuk developer baru.

**Tentang proyek**

-   Nama repo: `dedesahroel`
-   Tujuan: Manajemen aset sekolah — entitas utama: `Barang`, `Kategori`, `Tanah`, `Bangunan`, `Ruangan`, dan `User`.
-   Stack: Laravel 10 (PHP ^8.1) untuk backend; Vite + TailwindCSS + AlpineJS + Bootstrap untuk frontend; Sanctum tersedia untuk API auth.

**Dependensi penting**

-   PHP: ^8.1
-   Laravel/framework: ^10.10
-   Laravel Sanctum: ^3.3
-   Dev: `laravel/breeze`, `pest` (testing), `laravel/pint`, `laravel/sail` (opsional)
-   JS: `vite`, `laravel-vite-plugin`, `tailwindcss`, `alpinejs`, `axios`, `bootstrap`

**Struktur penting (lokasi file)**

-   Models: `app/Models/` (`Barang.php`, `Kategori.php`, `Tanah.php`, `Bangunan.php`, `Ruangan.php`, `User.php`)
-   Controllers: `app/Http/Controllers/` (tersedia controller resource untuk tiap entitas)
-   Routes web: `routes/web.php` (resource routes untuk entitas utama)
-   Migrations: `database/migrations/` (cek skema tabel di sana)
-   Views: `resources/views/`

**Ringkasan routes utama**

-   Resource routes terdaftar di `routes/web.php`:
    -   `/barang` → `BarangController`
    -   `/kategori` → `KategoriController`
    -   `/user` → `UserController`
    -   `/tanah` → `TanahController`
    -   `/ruangan` → `RuanganController`
    -   `/bangunan` → `BangunanController`

**Cara cepat menjalankan (lokal, PowerShell di Windows)**

1. Install dependensi PHP:

```powershell
composer install
```

2. Install dependensi JS:

```powershell
npm install
```

3. Salin environment dan generate key:

```powershell
copy .env.example .env ; php artisan key:generate
```

4. Sesuaikan file `.env` (database dan APP_URL)
5. Jalankan migrasi dan seeding (opsional):

```powershell
php artisan migrate
php artisan db:seed
```

6. Jalankan pengembangan:

```powershell
php artisan serve
# di terminal lain: npx vite
```

Atau gunakan script npm:

```powershell
npm run dev
```

Catatan: `npm run dev` di repo ini menjalankan `npx concurrently "vite" "php artisan serve"`. Jika gagal di Windows, jalankan `php artisan serve` dan `npx vite` di terminal terpisah.

**Menjalankan test**

-   Menggunakan Pest/PHPUnit:

```powershell
php artisan test
```

atau (jika diperlukan):

```powershell
vendor\bin\pest
```

**Deployment singkat**

-   `composer install --no-dev --optimize-autoloader`
-   `npm run build`
-   Set `APP_ENV=production`, `APP_KEY`, dan variabel DB di server
-   `php artisan migrate --force`
-   Pastikan `public/` dipakai sebagai document root dan berikan permission pada `storage/` dan `bootstrap/cache`.

**Hal yang saya sarankan untuk dicek / langkah berikutnya**

-   Periksa file migrasi di `database/migrations/` untuk melihat skema tabel dan relasi.
-   Periksa `app/Http/Controllers/*Controller.php` untuk alur CRUD dan validasi (jika ada `FormRequest`, lihat `app/Http/Requests`).
-   Periksa `resources/views/` untuk tampilan Blade dan integrasi frontend.

**Lisensi**

-   Proyek ini memakai lisensi MIT (sesuai skeleton Laravel).

Jika Anda mau, saya bisa:

-   Menambahkan skema tabel lengkap dari file migrasi ke README,
-   Menyusun panduan setup Docker/Sail,
-   Atau membuka dan menjelaskan salah satu controller (mis. `BarangController`).

File yang saya edit: `README.md`
