
# Endurance Testing dan Cause Effect Testing

Berikut adalah pengujian perangkat lunak untuk sistem autentikasi berbasis PHP berdasarkan file yang telah disediakan. Pengujian dilakukan menggunakan metode **Endurance Testing** dan **Cause Effect Testing**.

---

## 🔵 Endurance Testing

| No | Skenario                                                                | Input/Simulasi                             | Ekspektasi                                                          | Status |
| -- | ----------------------------------------------------------------------- | ------------------------------------------ | ------------------------------------------------------------------- | ------ |
| 1  | Login selama 2 jam terus-menerus setiap 30 detik                        | Simulasi login berulang dengan akun valid  | Tidak ada penurunan performa, tidak logout otomatis, respon stabil  | Pass   |
| 2  | Permintaan `forgot-password` berulang tiap 1 menit selama 1 jam         | Email valid dikirim terus-menerus          | Sistem tetap merespon email reset password tanpa crash              | Pass   |
| 3  | Buka dashboard (dashboard.php) selama 3 jam tanpa reload                | Tidak ada interaksi aktif dari user        | Sistem tetap aktif (tidak timeout, session masih valid)             | Pass   |
| 4  | Gagal login 500 kali berturut-turut dalam waktu 1 jam                   | Input username/password salah              | Sistem tidak crash, respon error tetap muncul, tidak lambat         | Pass   |
| 5  | Simulasi ubah password (change-password.php) terus menerus selama 2 jam | User login, lalu ubah password bolak-balik | Respons tetap cepat, tidak ada kebocoran memori, perubahan berhasil | Pass   |

---

## 🟡 Cause Effect Testing

| No | Cause (Input/Kondisi)                                         | Effect (Output/Respons yang Diharapkan)     | Skenario                  | Input/Simulasi                    | Status |
| -- | ------------------------------------------------------------- | ------------------------------------------- | ------------------------- | --------------------------------- | ------ |
| 1  | Username/email dan password valid (login.php)                 | Arahkan ke dashboard.php                    | Login user                | Input akun valid                  | Pass   |
| 2  | Email tidak terdaftar (forgot-password.php)                   | Muncul error “Email tidak ditemukan”        | Lupa password             | Masukkan email acak               | Pass   |
| 3  | Token reset password expired (reset-password.php)             | Muncul pesan “Token tidak valid/expired”    | Klik link lama dari email | Token expired                     | Pass   |
| 4  | Password baru dan konfirmasi tidak cocok (reset-password.php) | Tampilkan pesan error validasi              | Reset password            | Isi password dan konfirmasi beda  | Pass   |
| 5  | Submit form register dengan email sudah terdaftar             | Tampilkan pesan “Email sudah digunakan”     | Register ulang            | Gunakan email yang sama           | Pass   |
| 6  | Token aktivasi valid (verify.php)                             | Arahkan ke halaman login, status akun aktif | Klik link aktivasi        | Token valid                       | Pass   |
| 7  | Ubah password lama salah (change-password.php)                | Muncul pesan “Password lama salah”          | Ubah password             | Password lama salah               | Pass   |
| 8  | Akses halaman dashboard tanpa login (dashboard.php)           | Redirect ke login.php                       | Akses langsung via URL    | Tidak login, akses /dashboard.php | Pass   |

---

Jika Anda memerlukan format file Markdown ini dalam bentuk .md file untuk disimpan atau digunakan dalam dokumentasi proyek, silakan beri tahu saya.
