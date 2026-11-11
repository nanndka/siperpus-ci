# Perpustakaan Digital (CodeIgniter 4)

CRUD data buku: tampil, tambah, edit, hapus, cari, dan pagination.
Dibuat dari CodeIgniter 4.7.4 (butuh PHP 8.2 atau lebih baru) dan Composer.

## Cara menjalankan (setelah clone atau download)

1. Nyalakan **MySQL** di XAMPP.
2. Buka http://localhost/phpmyadmin, tab **Import**, pilih file `database/perpustakaan.sql`, klik Go.
   (Ini membuat database `perpustakaan` dan tabel `books`.)
3. Buka CMD di folder project, lalu jalankan:

```
composer install
copy env .env
```

4. Buka file `.env`, hapus tanda `#` di depan baris berikut dan isi:

```
CI_ENVIRONMENT = development

database.default.hostname = localhost
database.default.database = perpustakaan
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

5. Jalankan server:

```
php spark serve
```

6. Buka http://localhost:8080

## File yang ditambahkan ke project bawaan CI4

| File | Fungsi |
|---|---|
| `app/Config/Routes.php` | Daftar URL |
| `app/Controllers/Buku.php` | Logika CRUD |
| `app/Models/BukuModel.php` | Akses tabel `books` |
| `app/Views/layout.php` | Kerangka halaman |
| `app/Views/buku/index.php` | Daftar buku |
| `app/Views/buku/form.php` | Form tambah dan edit |
| `database/perpustakaan.sql` | Database, tabel, dan 2 data contoh |

Folder `vendor/` dan file `.env` tidak ikut di GitHub (sudah diabaikan oleh `.gitignore`).
Keduanya dibuat ulang lewat langkah 3 dan 4.
"# siperpus-ci" 
