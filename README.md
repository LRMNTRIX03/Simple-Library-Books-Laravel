# Laravel Books API

Proyek ini adalah RESTful API sederhana berbasis **Laravel** untuk mengelola data buku.  
API ini menyediakan fitur untuk menampilkan daftar buku, detail buku, menambahkan buku baru, memperbarui, serta menghapus buku.

---
## Syarat Menjalankan Project ini

Sebelum menjalankan project, pastikan sistem Anda sudah memenuhi syarat berikut:
1. **PHP >= 8.2** dengan ekstensi **zip** aktif  
2. **Composer** (versi terbaru)  
3. **Database MySQL** atau **MariaDB**

## Fitur API

- **GET** `/api/books` → Menampilkan semua buku
- **GET** `/api/books/{id}` → Menampilkan detail buku berdasarkan ID
- **POST** `/api/books` → Menambahkan buku baru
- **PUT** `/api/books/{id}` → Memperbarui data buku
- **DELETE** `/api/books/{id}` → Menghapus buku

---

## Dummy Data (BookSeeder)

```php
[
    [
        'title' => 'Pemrograman Web dengan PHP',
        'author' => 'Andi Prasetyo',
        'year' => 2021
    ],
    [
        'title' => 'Dasar-dasar Framework Laravel',
        'author' => 'Budi Santoso',
        'year' => 2023
    ],
    [
        'title' => 'Algoritma dan Struktur Data',
        'author' => 'Citra Handayani',
        'year' => 2020
    ],
    [
        'title' => 'Basis Data Relasional',
        'author' => 'Dewi Kartika',
        'year' => 2019
    ],
    [
        'title' => 'Jaringan Komputer dan Keamanan',
        'author' => 'Eko Wiratama',
        'year' => 2022
    ],
]
```



## Cara Instalasi & Menjalankan Project

1. **Clone repository**
   ```bash
   git clone https://github.com/LRMNTRIX03/Simple-Library-Books-Laravel.git
   cd Simple-Library-Books-Laravel
    ```
   
2. **Instal dependencies**
   ```bash
   composer install
    ```
   
3. **Salin file.env**
   ```bash
   cp .env.example .env
    ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
    ```

6. **Konfigurasi Database**
   Sesuaikan dengan database anda di file .env:
   
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database #db_xfit_digital
    DB_USERNAME=root
    DB_PASSWORD=
     ```

8. **Migrasi Database dan isi tabel books dengan Seeder yang ada**
   ```bash
    php artisan migrate --seed
     ```

10. **Jalankan Server**
   ```bash
    php artisan serve
 ```

11. **Buka Server anda**
    ```bash
    http://127.0.0.1:8000

   **Proses Api bisa diuji melalui Aplikasi Postman**
