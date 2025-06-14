# 🧪 Endurance Testing dan Cause Effect Testing

Laporan ini merupakan bagian dari pengujian perangkat lunak untuk sistem autentikasi dan pengelolaan akun berbasis PHP yang telah dibangun. Pengujian difokuskan pada dua aspek penting, yaitu **Endurance Testing** dan **Cause-Effect Testing**, guna memastikan sistem tidak hanya berfungsi dengan benar dalam kondisi normal, tetapi juga tetap stabil dan responsif dalam kondisi ekstrim atau tidak biasa.

---

## 🔵 Endurance Testing

**Definisi:**  
Endurance Testing (atau Soak Testing) adalah pengujian non-fungsional yang dilakukan untuk mengevaluasi performa sistem saat digunakan secara terus-menerus dalam periode waktu yang lama. Tujuannya adalah untuk menemukan masalah seperti kebocoran memori, crash, atau penurunan performa yang tidak muncul dalam pengujian jangka pendek.

**Manfaat:**  
- Menilai stabilitas sistem dalam jangka panjang.  
- Mengidentifikasi efek samping dari penggunaan berulang (loop form, session, memory leak).  
- Memastikan session management dan fitur-fitur kritis tetap responsif.

### Hasil Pengujian:

| No | Skenario                                                                | Input/Simulasi                             | Ekspektasi                                                          | Status         |
|----|-------------------------------------------------------------------------|--------------------------------------------|---------------------------------------------------------------------|----------------|
| 1  | Login selama 2 jam terus-menerus setiap 30 detik                        | Simulasi login berulang dengan akun valid  | Tidak ada penurunan performa, tidak logout otomatis, respon stabil  | ❗ Perlu diuji  |
| 2  | Permintaan `forgot-password` berulang tiap 1 menit selama 1 jam         | Email valid dikirim terus-menerus          | Sistem tetap merespon email reset password tanpa crash              | ❗ Perlu diuji  |
| 3  | Buka dashboard (dashboard.php) selama 3 jam tanpa reload                | Tidak ada interaksi aktif dari user        | Sistem tetap aktif (tidak timeout, session masih valid)             | ✅ Pass         |
| 4  | Gagal login 500 kali berturut-turut dalam waktu 1 jam                   | Input username/password salah              | Sistem tidak crash, respon error tetap muncul, tidak lambat         | ❗ Perlu diuji  |
| 5  | Simulasi ubah password (change-password.php) terus menerus selama 2 jam | User login, lalu ubah password bolak-balik | Respons tetap cepat, tidak ada kebocoran memori, perubahan berhasil | ❗ Perlu diuji  |

---

## 🟡 Cause Effect Testing

**Definisi:**  
Cause-Effect Testing adalah teknik pengujian berbasis logika yang memetakan hubungan antara *penyebab* (input atau kondisi tertentu) dan *akibat* (respon atau output sistem). Teknik ini digunakan untuk memastikan bahwa semua kemungkinan kombinasi input ditangani dengan benar oleh sistem.

**Manfaat:**  
- Menjamin validasi input berjalan dengan baik.  
- Memastikan logika kondisi dan percabangan sistem bekerja sebagaimana mestinya.  
- Menemukan bug pada form dan alur logika yang kompleks.

### Hasil Pengujian:

| No | Cause (Input/Kondisi)                                         | Effect (Output/Respons yang Diharapkan)     | Skenario                  | Input/Simulasi                    | Status |
|----|---------------------------------------------------------------|---------------------------------------------|---------------------------|-----------------------------------|--------|
| 1  | Username/email dan password valid (login.php)                 | Arahkan ke dashboard.php                    | Login user                | Input akun valid                  | ✅ Pass |
| 2  | Email tidak terdaftar (forgot-password.php)                   | Muncul error “Email tidak ditemukan”        | Lupa password             | Masukkan email acak               | ✅ Pass |
| 3  | Token reset password expired (reset-password.php)             | Muncul pesan “Token tidak valid/expired”    | Klik link lama dari email | Token expired                     | ✅ Pass |
| 4  | Password baru dan konfirmasi tidak cocok (reset-password.php) | Tampilkan pesan error validasi              | Reset password            | Isi password dan konfirmasi beda  | ✅ Pass |
| 5  | Submit form register dengan email sudah terdaftar             | Tampilkan pesan “Email sudah digunakan”     | Register ulang            | Gunakan email yang sama           | ✅ Pass |
| 6  | Token aktivasi valid (verify.php)                             | Arahkan ke halaman login, status akun aktif | Klik link aktivasi        | Token valid                       | ✅ Pass |
| 7  | Ubah password lama salah (change-password.php)                | Muncul pesan “Password lama salah”          | Ubah password             | Password lama salah               | ✅ Pass |
| 8  | Akses halaman dashboard tanpa login (dashboard.php)           | Redirect ke login.php                       | Akses langsung via URL    | Tidak login, akses /dashboard.php | ✅ Pass |

---

## ✅ Kesimpulan

- Sistem autentikasi berjalan **dengan baik secara logis** berdasarkan hasil Cause-Effect Testing.
- Namun, perlu dilakukan **uji endurance secara langsung** menggunakan simulasi traffic dan waktu yang lebih lama untuk memastikan tidak terjadi bottleneck, memory leak, atau crash.
- Pengujian lanjutan dapat menggunakan tools seperti Apache JMeter, Locust, atau simulasi manual melalui skrip loop PHP/JS + cron job.

---

