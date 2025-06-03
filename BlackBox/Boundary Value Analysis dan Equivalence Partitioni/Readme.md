# 🔍 Laporan Pengujian Sistem Pengaduan Sarana dan Prasarana

Dokumentasi ini berisi pengujian terhadap fitur-fitur utama sistem, terdiri dari dua metode:

- **Behavior Testing** – menguji perilaku aktual fitur sesuai ekspektasi.
- **Equivalence Partitioning** – menguji input berdasarkan kelas valid/invalid.

---

## ✅ 1. Behavior Testing

### 🔐 Registrasi

|NO|Fitur yang Diuji   | Input             | Langkah Uji           | Hasil Diharapkan              | Hasil Aktual                               | Status |Screenshot|
|--|-------------------|-------------------|-----------------------|-------------------------------|--------------------------------------------|--------|--|
|A01| Registrasi - Full Name|Name > 25 karakter| Memasukkan nama > 25 Karakter  | Nama harus 1 - 25 karakter     | Tampil Pesan     Nama harus 1 - 25 karakter                      | Lulus  | ![Image](https://github.com/user-attachments/assets/cd9daeda-7556-49f8-96c8-8c8128c960d7)|
|A02| Registrasi - Full Name|-| -  | Nama harus 1 - 25 karakter     | Tampil Pesan     Nama harus 1 - 25 karakter                      | Lulus  | ![Image](https://github.com/user-attachments/assets/cd9daeda-7556-49f8-96c8-8c8128c960d7)|
| A02  | Registrasi - Email       | padjrinf  | Menginput email tanpa @         | tolong gunakan @                       | email tidak dapat diinput                        | Lulus  | ![Image](https://github.com/user-attachments/assets/4f4de585-17c4-4d24-9721-3454d2f73f4d)|
| A04  | Registrasi - Email       | padjrinf@gmail.com  | Menginput email       | pendaftaran berhasil                       | email berhasil dapat diinput                        | Lulus  | | A02  | Registrasi - Email       | padjrinf  | Menginput email tanpa @         | tolong gunakan @                       | email tidak dapat diinput                        | Lulus  | ![Image](https://github.com/user-attachments/assets/067b61e0-454c-4f1f-84c7-e21f23a7a378)
|
| A04  | Registrasi - Address     | Bandung             | Menginput alamat                            | Alamat dapat diinput                      | Alamat dapat diinput                        | Lulus  |
| A05  | Registrasi - Phone Number| 095326163183        | Menginput nomor HP                          | Nomor HP dapat diinput                    | Nomor HP dapat diinput                      | Lulus  |
| A06  | Registrasi - Username    | ajin                | Menginput username                          | Username dapat diinput                    | Username dapat diinput                      | Lulus  |
| A07  | Registrasi - Password    | 12345               | Menginput password                          | Password dapat diinput                    | Password dapat diinput                      | Lulus  |
| A08  | Registrasi - password    | -                   | Mohon diisi password terlebih dahulu        | Password harus diisi                      | Tidak lulus
| A09  | Registrasi - Halaman     | -                   | Memasuki halaman membuat akun               | Halaman membuat akun dapat diakses        | Halaman membuat akun dapat diakses          | Lulus  |

---

### 🔑 Halaman Login

| No   | Fitur yang Diuji         | Input                         | Langkah Uji                                             | Hasil Diharapkan                                 | Hasil Aktual                                     | Status |
|------|--------------------------|-------------------------------|----------------------------------------------------------|--------------------------------------------------|--------------------------------------------------|--------|
| B01  | Halaman Login            | Tombol Register               | Klik tombol “Register”                                   | Membuka halaman “Register”                       | Halaman “Register” terbuka                       | Lulus  |
| B02  | Halaman Login            | Tombol “Forgot Password”      | Klik tombol “Forgot Password”                            | Membuka halaman “Forgot Password”                | Halaman “Forgot Password” terbuka                | Lulus  |
| B03  | Halaman Login            | Form Username & Password      | Input dengan username & password valid, klik login       | Masuk ke dashboard                               | Masuk ke dashboard                               | Lulus  |

---

### 🔐 Fitur Lupa Password

| No   | Fitur yang Diuji           | Input             | Langkah Uji                                | Hasil Diharapkan                                         | Hasil Aktual                                           | Status |
|------|----------------------------|-------------------|---------------------------------------------|----------------------------------------------------------|--------------------------------------------------------|--------|
| C01  | Halaman Forgot Password    | Klik tombol       | Klik tombol “Send Reset Link”               | Tautan reset dikirim ke email                            | Tautan reset dikirim ke email                          | Lulus  |
| C02  | Halaman Reset Password     | 12345678          | Input form new password                     | Password berhasil diinput dan disimpan                   | Password berhasil diinput dan disimpan                 | Lulus  |

---

### 📊 Fitur Sistem

| Fitur yang Diuji       | Input / Data Uji      | Langkah Uji                                                       | Hasil Diharapkan                                             | Hasil Aktual | Status |
|------------------------|------------------------|--------------------------------------------------------------------|---------------------------------------------------------------|--------------|--------|
| Dashboard              | -                      | Klik menu “Dashboard” setelah login                               | Halaman dashboard tampil dengan daftar film populer           | Sesuai       | ✔️     |
| Profile View           | -                      | Klik menu “Profile”                                               | Halaman profil tampil (nama, username, foto)                 | Sesuai       | ✔️     |
| Edit Profile           | Nama: Padjrin Fauzi    | Klik 'Edit Profile', ubah nama, klik simpan                       | Data diperbarui di profil                                     | Sesuai       | ✔️     |
| Logout                 | -                      | Klik tombol 'Logout'                                              | Kembali ke halaman login                                     | Sesuai       | ✔️     |
| Pencarian Film         | Minecraft              | Ketik "Minecraft" dan tekan tombol search                         | Film "A Minecraft Movie" muncul                              | Sesuai       | ✔️     |
| Pencarian Kosong       | xyzabc                 | Masukkan kata kunci tidak cocok film manapun                      | Tampil "tidak ditemukan"                                     | Sesuai       | ✔️     |
| Rating Film            | Film dengan rating < 6 | Cek tampilan rating (misal: 5.3)                                   | Rating tampil dengan ikon bintang                            | Sesuai       | ✔️     |
| Tahun Film Validasi    | Tahun: 2025            | Cek tampilan tahun film                                           | Tahun rilis ditampilkan di bawah judul                       | Sesuai       | ✔️     |
| Gambar Film            | -                      | Lihat semua poster di dashboard                                   | Semua gambar proporsional dan tampil jelas                   | Sesuai       | ✔️     |
| Gagal Login Redirect   | -                      | Akses `/dashboard.php` tanpa login                                | Dialihkan ke halaman login                                   | Sesuai       | ✔️     |

---

## 📚 2. Equivalence Partitioning (EP)

### 📧 Registrasi - Email Validation

| No | Input                   | Kategori         | Ekspektasi                      | Hasil Aktual                       | Status |
|----|--------------------------|------------------|----------------------------------|------------------------------------|--------|
| E01| `padjrinf@gmail.com`    | Valid Email      | Diterima oleh sistem             | Email diterima                     | Lulus  |
| E02| `padjrinfgmail.com`     | Invalid (tanpa @)| Ditolak oleh sistem              | Muncul pesan “please include an @”| Lulus  |

---

### 🔢 Registrasi - Nomor Telepon

| No | Input         | Kategori           | Ekspektasi                       | Hasil Aktual           | Status |
|----|----------------|--------------------|-----------------------------------|--------------------------|--------|
| E03| `095326163183` | Valid (numeric)    | Diterima oleh sistem              | Nomor diterima           | Lulus  |
| E04| `08abcde123`   | Invalid (alfanumerik)| Ditolak oleh sistem              | Tidak diterima / error   | Lulus  |

---

### 🔑 Registrasi - Password Panjang

| No | Input         | Kategori         | Ekspektasi                             | Hasil Aktual           | Status |
|----|----------------|------------------|-----------------------------------------|--------------------------|--------|
| E05| `12345`        | Valid (cukup panjang) | Diterima                               | Diterima                 | Lulus  |
| E06| `123`          | Invalid (terlalu pendek) | Ditolak                             | Ditolak (minimal char)   | Lulus  |

---




# Registrasi
## Hasil Pengujian Fitur Registrasi

| No   | Fitur yang Diuji        | Input               | Langkah Uji                                | Hasil Diharapkan                         | Hasil Aktual                               | Status |
|------|--------------------------|---------------------|---------------------------------------------|-------------------------------------------|---------------------------------------------|--------|
| A01  | Registrasi - Full Name   | padjrin fauzi       | Memasukkan nama "padjrin"                      | Nama dapat diinput                        | Nama dapat diinput                          | Lulus  |
| A02  | Registrasi - Email       | padjrinf@gmail.com  | Menginput email dengan format benar         | Email dapat diinput                       | Email dapat diinput                         | Lulus  |
| A03  | Registrasi - Email       | padjrinfgmail.com   | Menginput email tanpa simbol “@”            | Tampil pesan email tidak valid            | Sistem merespons “please include an @”      | Lulus  |
| A04  | Registrasi - Address     | Bandung             | Menginput alamat                            | Alamat dapat diinput                      | Alamat dapat diinput                        | Lulus  |
| A05  | Registrasi - Phone Number| 095326163183        | Menginput nomor HP                          | Nomor HP dapat diinput                    | Nomor HP dapat diinput                      | Lulus  |
| A06  | Registrasi - Username    | ajin                | Menginput username                          | Username dapat diinput                    | Username dapat diinput                      | Lulus  |
| A07  | Registrasi - Password    | 12345               | Menginput password                          | Password dapat diinput                    | Password dapat diinput                      | Lulus  |
| A08  | Registrasi - Halaman     | -                   | Memasuki halaman membuat akun               | Halaman membuat akun dapat diakses        | Halaman membuat akun dapat diakses          | Lulus  |



## 📋 Hasil Pengujian Halaman awal Login

| No   | Fitur yang Diuji         | Input                         | Langkah Uji                                             | Hasil Diharapkan                                 | Hasil Aktual                                     | Status |
|------|--------------------------|-------------------------------|----------------------------------------------------------|--------------------------------------------------|--------------------------------------------------|--------|
| B01  | Halaman Login            | Tombol Register               | Klik tombol “Register”                                   | Membuka halaman “Register”                       | Halaman “Register” terbuka                       | Lulus  |
| B02  | Halaman Login            | Tombol “Forgot Password”      | Klik tombol “Forgot Password”                            | Membuka halaman “Forgot Password”                | Halaman “Forgot Password” terbuka                | Lulus  |
| B03  | Halaman Login            | Form Username & Password      | Input dan klik form dengan username & password yang benar | Dapat input form dan membuka halaman dashboard   | Dapat input form dan membuka halaman dashboard   | Lulus  |

## 🔐 Hasil Pengujian Fitur Lupa Password

| No   | Fitur yang Diuji           | Input             | Langkah Uji                                | Hasil Diharapkan                                         | Hasil Aktual                                           | Status |
|------|----------------------------|-------------------|---------------------------------------------|----------------------------------------------------------|--------------------------------------------------------|--------|
| C01  | Halaman Forgot Password    | Klik tombol       | Klik tombol “Send Reset Link”               | Tombol dapat ditekan dan reset link dikirim melalui email | Tombol dapat ditekan dan reset link dikirim melalui email | Lulus  |
| C02  | Halaman Reset Password     | 12345678          | Input form new password                     | Input form new password dapat dilakukan                   | Input form new password dapat dilakukan                 | Lulus  |

## Hasil Pengujian Fitur Sistem

| Fitur yang Diuji       | Input / Data Uji      | Langkah Uji                                                       | Hasil Diharapkan                                             | Hasil Aktual | Status |
|------------------------|------------------------|--------------------------------------------------------------------|---------------------------------------------------------------|--------------|--------|
| Dashboard              | -                      | Klik menu “Dashboard” setelah login                               | Halaman dashboard tampil dengan daftar film populer           | Sesuai       | ✔️     |
| Profile View           | -                      | Klik menu “Profile”                                               | Halaman profil pengguna tampil (nama, username, foto)         | Sesuai       | ✔️     |
| Edit Profile           | Nama: Padjrin Fauzi    | Klik tombol 'Edit Profile', ubah nama, klik simpan                | Data berhasil diperbarui dan tampil di profil                 | Sesuai       | ✔️     |
| Logout                 | -                      | Klik tombol 'Logout'                                              | Pengguna diarahkan ke halaman login                           | Sesuai       | ✔️     |
| Pencarian Film         | Minecraft              | Ketik 'Minecraft' di kolom pencarian, klik tombol 'Search'        | Film 'A Minecraft Movie' ditampilkan                          | Sesuai       | ✔️     |
| Pencarian Kosong       | xyzabc                 | Masukkan input pencarian yang tidak sesuai film manapun           | Tampilkan pesan 'tidak ditemukan' atau hasil kosong           | Sesuai       | ✔️     |
| Rating Film            | Film dengan rating < 6 | Cek tampilan rating (misal: 5.3)                                   | Rating tampil dengan ikon bintang                             | Sesuai       | ✔️     |
| Tahun Film Validasi    | Tahun: 2025            | Periksa apakah semua film menampilkan tahun rilis                 | Tahun rilis film ditampilkan di bawah judul                   | Sesuai       | ✔️     |
| Gambar Film            | -                      | Lihat semua poster film pada dashboard                            | Semua gambar film tampil dengan proporsi yang sesuai          | Sesuai       | ✔️     |
| Gagal Login Redirect   | -                      | Akses URL /dashboard.php tanpa sesi login                         | Dialihkan ke halaman login                                    | Sesuai       | ✔️     |
