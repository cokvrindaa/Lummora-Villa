# Lummora — Villa Booking Website

Website villa dengan landing page publik dan panel admin (Filament) untuk mengelola data kamar, fasilitas, dan ketersediaan.

## Tech Stack

- **Backend:** Laravel 13
- **Admin Panel:** Filament v5
- **Database:** MySQL
- **Frontend:** Blade + Vite
- **PHP:** ^8.3

## Requirement

Pastikan sudah terinstall di komputer:

- PHP >= 8.3 (dengan extension `zip` aktif)
- Composer
- Node.js & npm
- MySQL (bisa pakai Laragon)
- Git

## Cara Install (Clone dari GitHub)

Ikuti urutan ini setiap kali clone project ke device baru.

### 1. Clone repository
```bash
git clone <url-repo-github>
cd <nama-folder>
```

### 2. Install dependency PHP
```bash
composer install
```

### 3. Install dependency JavaScript
```bash
npm install
```

### 4. Copy file environment
```bash
copy .env.example .env
```
> File `.env` tidak ikut ter-push ke GitHub (berisi kredensial), jadi harus dibuat ulang di setiap device.

### 5. Generate application key
```bash
php artisan key:generate
```

### 6. Setup database

Buat database baru lewat phpMyAdmin (misal nama `lummora`), lalu sesuaikan `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lummora
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan migration
```bash
php artisan migrate
```

### 8. Buat symlink storage
Wajib supaya foto kamar bisa diakses dari browser.
```bash
php artisan storage:link
```

### 9. Buat akun admin Filament
Akun login tidak ikut pindah otomatis saat clone (data ada di database, bukan di kode), jadi perlu dibuat ulang:
```bash
php artisan make:filament-user
```

### 10. Build asset
```bash
npm run build
```
atau untuk mode development sambil edit-edit tampilan:
```bash
npm run dev
```

### 11. Jalankan server
```bash
php artisan serve
```

Buka browser:
- Landing page: `http://127.0.0.1:8000`
- Admin panel: `http://127.0.0.1:8000/admin`

## Struktur Data Kamar

Tabel `kamars` memiliki kolom:

| Kolom | Tipe | Keterangan |
|---|---|---|
| `nama_kamar` | string | Nama kamar |
| `tipe_kamar` | string | Tipe/kategori kamar |
| `harga` | decimal(10,2) | Harga per malam |
| `fasilitas` | text | Daftar fasilitas, dipisah koma |
| `deskripsi` | text | Deskripsi kamar |
| `periode` | string | Periode sewa |
| `foto` | string | Path foto kamar (disk `public`) |
| `stok` | integer | Jumlah kamar tersedia — jika `0`, kamar otomatis tidak tampil di landing page |

## Catatan Penting

- **Foto kamar** (folder `storage/app/public/kamar-foto`) biasanya tidak ikut ter-push ke GitHub (masuk `.gitignore`). Kalau mau foto lama ikut pindah ke device baru, salin foldernya secara manual.
- **Data kamar** juga tidak ikut pindah otomatis via git (tersimpan di database). Untuk memindahkan data lama, export database dari device lama lewat phpMyAdmin (Export), lalu import ke device baru sebelum menjalankan `migrate`.
- Setelah edit field/migration, jalankan `php artisan migrate:fresh` jika ingin reset ulang struktur tabel (⚠️ ini menghapus semua data).
- Kalau ada error terkait extension `zip` saat `composer install`, aktifkan dulu `extension=zip` di `php.ini`.

## Troubleshooting Cepat

| Masalah | Solusi |
|---|---|
| Login admin gak respons sama sekali | `php artisan optimize:clear` lalu `php artisan filament:assets` |
| Foto tidak muncul di landing page | Cek `php artisan storage:link` sudah dijalankan, dan `FileUpload` di form pakai `->disk('public')` |
| Error "Class not found" pada Resource | Cek `use App\Models\Kamar;` sudah ada di file terkait |
| Composer gagal install karena security advisory | Pastikan versi package yang di-require bukan versi yang kena advisory, gunakan versi terbaru yang stabil |
