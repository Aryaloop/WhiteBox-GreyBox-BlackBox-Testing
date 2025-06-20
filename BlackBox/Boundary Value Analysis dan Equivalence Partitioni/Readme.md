Dokumentasi ini berisi pengujian terhadap fitur-fitur utama sistem, terdiri dari dua metode:

- **Boundary Value Analysis** – menguji input, min input max input setiap form.
- **Equivalence Partitioning** – menguji input berdasarkan kelas valid/invalid.

---

## ✅ 1. Boundary Value Analysis dan Equivalence Partitioning

### 🔐 Registrasi

|NO|Fitur yang Diuji   | Input             | Langkah Uji           | Hasil Diharapkan              | Hasil Aktual                               | Status |Screenshot|
|--|-------------------|-------------------|-----------------------|-------------------------------|--------------------------------------------|--------|--|
|A01| Registrasi - Full Name|Name > 25 karakter| Memasukkan nama > 25 Karakter  | Nama harus 1 - 25 karakter     | Tampil Pesan     Nama harus 1 - 25 karakter                      | Lulus  | ![Image](https://github.com/user-attachments/assets/cd9daeda-7556-49f8-96c8-8c8128c960d7)|
|A02| Registrasi - Full Name|-| -  | Nama harus 1 - 25 karakter     | Tampil Pesan     Nama harus 1 - 25 karakter                      | Lulus  | ![Image](https://github.com/user-attachments/assets/cd9daeda-7556-49f8-96c8-8c8128c960d7)|
| A03  | Registrasi - Email       | padjrinf  | Menginput email tanpa @         | tolong gunakan @                       | email tidak dapat diinput                        | Lulus  | ![Image](https://github.com/user-attachments/assets/4f4de585-17c4-4d24-9721-3454d2f73f4d)|
| A04  | Registrasi - Email       | padjrinf@gmail.com  | Menginput email       | pendaftaran berhasil                       | email berhasil dapat diinput                        | Lulus  | ![Image](https://github.com/user-attachments/assets/ea4f48ac-1f97-41aa-b64a-2ce314fc9e9f)|
| A05  | Registrasi - Address     | Ba             | Menginput alamat                            | Alamat harus 5 - 100 karakter                      | alamat tidak dapat di input| Lulus  |![Image](https://github.com/user-attachments/assets/6f1d9738-b6e7-48e3-b7af-40844d9e8bea)|
| A06  | Registrasi - Address| Bandung     | Menginput Alamat| Alamat dapat diinput                    | Alamat dapat diinput        | Lulus  |![Image](https://github.com/user-attachments/assets/ea4f48ac-1f97-41aa-b64a-2ce314fc9e9f)|
| A07  | Registrasi - Nomor Telepon| 08977360331    | Menginput nomor telpon sesuai sistem | Nomer telepon diinput                   | Nomer telepon dapat diinput         | Lulus  |![Image](https://github.com/user-attachments/assets/ea4f48ac-1f97-41aa-b64a-2ce314fc9e9f)
| A08  | Registrasi - Nomor Telepon| 0897   | Menginput nomor < 8 karakter  | Nomer telepon tidak dapa diinput                   | Nomer telepon tidak dapat diinput         | Lulus  |![Image](https://github.com/user-attachments/assets/af9c2932-6984-4853-97ee-7a1d3275b524)
| A09  | Registrasi - Username    | ajin                | Menginput username                          | Username dapat diinput                    | Username dapat diinput                      | Lulus  |![Image](https://github.com/user-attachments/assets/ea4f48ac-1f97-41aa-b64a-2ce314fc9e9f)|
| A10  | Registrasi - Username    |              | Menginput username < 20 karakter         | Username tidak dapat diinput                    | Username tidak dapat diinput                      | Lulus  | ![Image](https://github.com/user-attachments/assets/002837c3-4237-42f7-b93c-4c2961750045) |
| A11  | Registrasi - Password    | Ajin123@               | Menginput password                          | Password dapat diinput                    | Password dapat diinput                      | Lulus  | ![Image](https://github.com/user-attachments/assets/ea4f48ac-1f97-41aa-b64a-2ce314fc9e9f) |
| A12  | Registrasi - Password    | ajin123              | Menginput password harus mengandung huruf besar, angka, dan simbol.         | Password tidak dapat diinput                    | Password tidak dapat diinput                      | Lulus  |![Image](https://github.com/user-attachments/assets/92cab1b6-b7c0-4649-95c8-665568701f0c) |


---

### 🔑 Halaman Login

| No   | Fitur yang Diuji         | Input                         | Langkah Uji                                             | Hasil Diharapkan                                 | Hasil Aktual | Status | Screenshot |
|------|--------------------------|-------------------------------|----------------------------------------------------------|--------------------------------------------------|--------------------------------------------------|--------|---|
| B01  | Halaman Login            | Username dan password valid               | Input username dan password valid                                   | Membuka halaman “Register”                       | Halaman “Register” terbuka                       | Lulus  |![Image](https://github.com/user-attachments/assets/b1534d38-c372-48a2-b804-99833df1414e) | 
| B02  | Halaman Login            | Username dan password invalid     | Memasuk form isi yang salah                           | Gagal password salah                | Salah memasukkan password              | Lulus  | ![Image](https://github.com/user-attachments/assets/0090efa6-8079-489d-98e6-3f04aa53e170)
| B03  | Halaman Login            | Tidak Mengisi capcha    | Menginput capcha       | Mengisi form tanpa mengklik capcha                               |      Mohon mengklik capcha sebelum mengsubmit                         | Lulus  | ![Image](https://github.com/user-attachments/assets/d0981105-0e4e-401e-8bb6-b321cb709dfb)

---

### 🔐 Fitur Lupa Password

| No   | Fitur yang Diuji           | Input             | Langkah Uji                                | Hasil Diharapkan                                         | Hasil Aktual                                           | Status |
|------|----------------------------|-------------------|---------------------------------------------|----------------------------------------------------------|--------------------------------------------------------|--------|
| C01  | Halaman Forgot Password    | Klik tombol       | Klik tombol “Send Reset Link”               | Tautan reset dikirim ke email                            | Tautan reset dikirim ke email                          | Lulus  |
| C02  | Halaman Reset Password     | 12345678          | Input form new password                     | Password berhasil diinput dan disimpan                   | Password berhasil diinput dan disimpan                 | Lulus  |

---
---
---
---
---
---
---
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

# ✅ Hasil Pengujian Fitur Sistem

Pengujian ini dilakukan untuk memastikan seluruh fitur utama sistem bekerja sesuai dengan yang diharapkan berdasarkan spesifikasi. Pengujian dilakukan menggunakan pendekatan black-box (berbasis perilaku pengguna), dengan memverifikasi output terhadap input dan tindakan pengguna.

## 📋 Tabel Pengujian

| **Fitur yang Diuji**    | **Input / Data Uji**     | **Langkah Uji**                                                     | **Hasil Diharapkan**                                               | **Hasil Aktual** | **Status** |
|-------------------------|--------------------------|----------------------------------------------------------------------|--------------------------------------------------------------------|------------------|------------|
| Dashboard               | -                        | Klik menu “Dashboard” setelah login                                 | Halaman dashboard tampil dengan daftar film populer               | Sesuai           | ✔️         |
| Profile View            | -                        | Klik menu “Profile”                                                 | Halaman profil pengguna tampil (nama, username, foto)             | Sesuai           | ✔️         |
| Edit Profile            | Nama: Padjrin Fauzi      | Klik tombol 'Edit Profile', ubah nama, klik simpan                  | Data berhasil diperbarui dan tampil di profil                     | Sesuai           | ✔️         |
| Logout                  | -                        | Klik tombol 'Logout'                                                | Pengguna diarahkan ke halaman login                               | Sesuai           | ✔️         |
| Pencarian Film          | Minecraft                | Ketik 'Minecraft' di kolom pencarian, klik tombol 'Search'          | Film 'A Minecraft Movie' ditampilkan                              | Sesuai           | ✔️         |
| Pencarian Kosong        | xyzabc                   | Masukkan input pencarian yang tidak sesuai film manapun             | Tampilkan pesan 'tidak ditemukan' atau hasil kosong               | Sesuai           | ✔️         |
| Rating Film             | Film dengan rating < 6   | Cek tampilan rating (misal: 5.3)                                     | Rating tampil dengan ikon bintang                                 | Sesuai           | ✔️         |
| Tahun Film Validasi     | Tahun: 2025              | Periksa apakah semua film menampilkan tahun rilis                   | Tahun rilis film ditampilkan di bawah judul                       | Sesuai           | ✔️         |
| Gambar Film             | -                        | Lihat semua poster film pada dashboard                              | Semua gambar film tampil dengan proporsi yang sesuai              | Sesuai           | ✔️         |
| Gagal Login Redirect    | -                        | Akses URL `/dashboard.php` tanpa sesi login                         | Pengguna diarahkan otomatis ke halaman login                      | Sesuai           | ✔️         |

---

## 📝 Penjelasan

- **Metode Pengujian**: Menggunakan pendekatan *Black-box testing* untuk mengevaluasi respons sistem terhadap masukan dari pengguna.
- **Lingkungan Uji**:
  - Browser: Google Chrome (versi terbaru)
  - Backend: PHP & MySQL
  - Koneksi: Stabil, pengujian dilakukan di localhost / server pengembangan
- **Tujuan**: Untuk mengecek apakah fitur frontend & backend saling terintegrasi dengan baik dan respons sistem sesuai ekspektasi pengguna.
- **Hasil Umum**: Seluruh fitur utama telah diuji dan **berhasil dijalankan tanpa error atau gangguan.**
- **Kesimpulan**: Sistem **lulus uji fungsional** dan siap digunakan untuk skenario penggunaan nyata.


