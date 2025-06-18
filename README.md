# 🎬 Movie App - Sistem Pengujian Web PHP

Proyek ini adalah simulasi sistem pengujian web berbasis PHP yang menggunakan API dari TMDB (The Movie Database) untuk menampilkan daftar film terkini. Dibangun menggunakan pendekatan pengujian **BlackBox**, **WhiteBox**, dan **GreyBox**.

## 👥 Tim Proyek

| Nama Lengkap            | Peran               |
|-------------------------|---------------------|
| Arya Abdul Mughni       | Pengembang Sistem   |
| Padjrin Fauzi           | Penguji BlackBox    |
| Azhar Havis             | Penguji WhiteBox    |
| Pikri Nabila Mulia      | Penguji GreyBox     |

## 🚀 Fitur yang Digunakan
- ✅ Menambah keamanan dalam serangan brute force menggunakan **reCHAPTHA**  
- ✅ Mengirim email dengan **PHPMailer**
- ✅ Integrasi **TMDB API** untuk menampilkan film
- ✅ Dibangun dengan **PHP Native**
- ✅ Basis data menggunakan **MySQL**
- ✅ Editor pengembangan: **Visual Studio Code**

## 🖼️ Tampilan Web

*(Akan ditambahkan kemudian oleh Arya Abdul Mughni)*

## 📂 Struktur Direktori

![image](https://github.com/user-attachments/assets/7307e57a-bee2-4bd0-90a5-588bd3facca6)

## 🛠️ Cara Menjalankan Proyek (Instalasi Lengkap)

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal menggunakan **XAMPP**:

### 1. Clone Repositori ke XAMPP

Salin proyek ini ke dalam direktori `htdocs` milik XAMPP:

```bash
git clone https://github.com/Aryaloop/WhiteBox-GreyBox-BlackBox-Testing

Kemudian pindahkan atau pastikan folder ada di:

makefile
Copy
Edit
C:\xampp\htdocs\WhiteBox-GreyBox-BlackBox-Testing

2. Setup Database MySQL
Jalankan XAMPP dan aktifkan Apache & MySQL.

Akses phpMyAdmin melalui:

arduino
Copy
Edit
http://localhost/phpmyadmin
Klik New untuk membuat database baru. Misalnya:

nginx
Copy
Edit
movie_app
Pilih database tersebut, lalu klik Import.

Pilih file .sql dari folder database/ di repositori ini, lalu klik Go.

3. Konfigurasi Koneksi Database
Buka file berikut:

arduino
Copy
Edit
config/database.php
Sesuaikan konfigurasi dengan kredensial XAMPP kamu:

php
Copy
Edit
$host = "localhost";
$user = "root";
$password = "";
$dbname = "movie_app"; // sesuaikan dengan nama database yang dibuat
4. Daftar & Dapatkan API Key TMDB
Buka https://www.themoviedb.org/

Klik tombol Join TMDB (atau Login jika sudah punya akun).

Setelah login, buka https://www.themoviedb.org/settings/api

Klik Create API key, pilih Developer atau Personal.

Isi form dan salin API Key v3.

Lalu buka file berikut di proyek kamu:

bash
Copy
Edit
includes/tmdb_config.php
Tambahkan API key ke variabel berikut:

php
Copy
Edit
$apiKey = 'YOUR_API_KEY_HERE';
5. Konfigurasi PHPMailer
Jika belum terinstal, kamu bisa install PHPMailer secara manual:

🔧 Cara install PHPMailer tanpa Composer:
Download PHPMailer ZIP dari GitHub:
https://github.com/PHPMailer/PHPMailer/releases

Ekstrak ke folder misalnya:

swift
Copy
Edit
includes/PHPMailer/
Pastikan file class.phpmailer.php dan lainnya bisa diakses. Contoh penggunaan:

php
Copy
Edit
use PHPMailer\PHPMailer\PHPMailer;

require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';
require 'includes/PHPMailer/src/Exception.php';

$mail = new PHPMailer();
Sesuaikan pengaturan SMTP kamu untuk Gmail atau lainnya:

php
Copy
Edit
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'youremail@gmail.com';
$mail->Password = 'yourpassword'; // bisa gunakan App Password Gmail
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
Catatan: Jika menggunakan Gmail, aktifkan "2-Step Verification" lalu buat App Password untuk digunakan di $mail->Password.

6. Jalankan Server Lokal
Pastikan Apache dan MySQL aktif di XAMPP.

Akses proyek dari browser:

arduino
Copy
Edit
http://localhost/WhiteBox-GreyBox-BlackBox-Testing


