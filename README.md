# Laravel Books API

Proyek ini adalah RESTful API sederhana berbasis **Laravel** untuk mengelola data buku.  
API ini menyediakan fitur untuk menampilkan daftar buku, detail buku, menambahkan buku baru, memperbarui, serta menghapus buku.

# Fitur API

- **GET** `/api/books` → Menampilkan semua buku
- **GET** `/api/books/{id}` → Menampilkan detail buku berdasarkan ID
- **POST** `/api/books` → Menambahkan buku baru
- **PUT** `/api/books/{id}` → Memperbarui data buku
- **DELETE** `/api/books/{id}` → Menghapus buku

# Sudah Terdapat data Dummy yang berada pada BookSeeder
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


# Cara Instalasi & Menjalankan Project

1. **Clone repository**
   ```bash
   git clone https://github.com/LRMNTRIX03/Simple-Library-Books-Laravel.git
   cd Simple-Library-Laravel

2. **Instal dependencies**
   composer install
   
3. **Salin file.env**
   cp .env.example .env

4. **Generate Application Key**
   php artisan key:generate

5. **Konfigurasi Databse**
   Sesuaikan dengan database anda:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=root
    DB_PASSWORD=

6. **Migrasi Database dan isi tabel books dengan Seeder yang ada**
    php artisan migrate --seed

7. **Jalankan Server**
    php artisan serve

8. **Buka Server anda**
   http://127.0.0.1:8000
