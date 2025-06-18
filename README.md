
# 🎬 Movie App - Sistem Pengujian Web PHP

Proyek ini adalah simulasi sistem pengujian web berbasis PHP yang menggunakan API dari TMDB (The Movie Database) untuk menampilkan daftar film terkini. Sistem dibangun menggunakan pendekatan pengujian **BlackBox**, **WhiteBox**, dan **GreyBox**.

## 👥 Tim Proyek

| Nama Lengkap            | Peran               |
|-------------------------|---------------------|
| Arya Abdul Mughni       | Pengembang Sistem   |
| Padjrin Fauzi           | Penguji BlackBox    |
| Azhar Havis             | Penguji WhiteBox    |
| Pikri Nabila Mulia      | Penguji GreyBox     |

## 🚀 Fitur yang Digunakan

- ✅ Menambah keamanan terhadap serangan brute force dengan **reCAPTCHA**
- ✅ Pengiriman email menggunakan **PHPMailer**
- ✅ Integrasi **TMDB API** untuk menampilkan daftar film
- ✅ Dibangun dengan **PHP Native**
- ✅ Menggunakan **MySQL** sebagai basis data
- ✅ Dikembangkan dengan **Visual Studio Code**

## 🖼️ Tampilan Web

### Halaman Login
![image](https://github.com/user-attachments/assets/7c5e6832-d2a6-4adb-8a52-69c68ec0afad)
### Register
![image](https://github.com/user-attachments/assets/b79baf8e-8b90-4e18-b1f9-9862a197075a)
### Forgot Password
![image](https://github.com/user-attachments/assets/f4409472-81df-46ef-8033-4b0f019237a6)
### Dasboard
![image](https://github.com/user-attachments/assets/3493a633-b1c6-46b5-b7f8-6fcc424cdb51)
### Bookmark
![image](https://github.com/user-attachments/assets/dd935331-b72f-46bb-b773-28c5966b5315)
### Profile
![image](https://github.com/user-attachments/assets/b676de99-3ac9-4e4d-baaf-dec87bd79c3f)
### Change Password
![image](https://github.com/user-attachments/assets/e44e3c67-165d-44a4-8f37-2c26e85865e7)




## 📂 Struktur Direktori

![Struktur Proyek](https://github.com/user-attachments/assets/7307e57a-bee2-4bd0-90a5-588bd3facca6)

## 🛠️ Cara Menjalankan Proyek (Instalasi Lengkap)

Ikuti langkah-langkah berikut untuk menjalankan proyek secara lokal menggunakan **XAMPP**:

### 1. Clone Repositori ke XAMPP

Salin proyek ke dalam direktori `htdocs` milik XAMPP:

```bash
git clone https://github.com/Aryaloop/WhiteBox-GreyBox-BlackBox-Testing
```

Pastikan folder proyek berada di:

```
C:\xampp\htdocs\WhiteBox-GreyBox-BlackBox-Testing
```

### 2. Setup Database MySQL

- Jalankan XAMPP dan aktifkan **Apache** & **MySQL**.
- Akses `http://localhost/phpmyadmin`
- Klik **New** untuk membuat database baru, misalnya `movie_app`.
- Pilih database tersebut lalu klik **Import**
- Pilih file `.sql` dari folder `database/` dalam repositori ini, lalu klik **Go**

### 3. Konfigurasi Koneksi Database

Buka file `config/database.php`, lalu sesuaikan dengan konfigurasi lokal Anda:

```php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "movie_app"; // sesuaikan dengan nama database
```

### 4. Daftar & Dapatkan API Key TMDB

- Buka [https://www.themoviedb.org/](https://www.themoviedb.org/)
- Klik **Join TMDB** (atau **Login** jika sudah punya akun)
- Setelah login, buka [Settings > API](https://www.themoviedb.org/settings/api)
- Klik **Create API Key** dan isi formulir
- Salin **API Key v3**

Buka file `includes/tmdb_config.php` dan tambahkan API Key:

```php
$apiKey = 'YOUR_API_KEY_HERE';
```

### 5. Konfigurasi PHPMailer

Jika belum terinstal, ikuti langkah berikut:

- Unduh PHPMailer dari: [https://github.com/PHPMailer/PHPMailer/releases](https://github.com/PHPMailer/PHPMailer/releases)
- Ekstrak ke folder `includes/PHPMailer/`

Contoh penggunaan:

```php
use PHPMailer\PHPMailer\PHPMailer;

require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';
require 'includes/PHPMailer/src/Exception.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'youremail@gmail.com';
$mail->Password = 'yourpassword'; // Gunakan App Password jika Gmail
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
```

**Catatan:** Jika menggunakan Gmail, aktifkan "2-Step Verification" dan buat **App Password**.

### 6. Jalankan Server Lokal

Pastikan **Apache** dan **MySQL** aktif di XAMPP. Akses proyek di browser:

```
http://localhost/WhiteBox-GreyBox-BlackBox-Testing
```

---


