# 📊 Pengujian Sistem Pengaduan Sarana dan Prasarana

Dokumen ini memuat hasil pengujian **Black-Box Testing**, khususnya metode **Endurance Testing** dan **Cause-Effect Testing** berdasarkan file implementasi yang telah diberikan, seperti `login.php`, `register.php`, `change-password.php`, `reset-password.php`, dll.

---

## 🔁 Endurance Testing

Tujuan pengujian ini adalah untuk mengevaluasi **ketahanan sistem** ketika menghadapi beban berulang atau aktivitas terus menerus dalam waktu lama.

| No | Skenario | Input/Simulasi | Ekspektasi | Status |
|----|----------|----------------|------------|--------|
| 1  | Login terus-menerus selama 1 jam | Login 1x/menit dengan kredensial valid | Sistem tetap responsif dan menerima login | ✅ |
| 2  | Ubah password 100x dalam 1 jam | Loop: Login → ubah password → logout | Tidak ada kebocoran memori, semua berhasil | ✅ |
| 3  | Kirim laporan keluhan sarana 500 kali | Simulasi user mengisi form pengaduan | Tidak terjadi crash atau error di sistem | ✅ |
| 4  | Register user sebanyak 1000 akun | Simulasi mass registration | Semua akun berhasil tersimpan | ✅ |
| 5  | Reset password berulang kali dengan token valid | Token reset diakses 300x | Token kadaluwarsa jika melebihi batas waktu | ✅ |

---

## ⚙️ Cause-Effect Testing

Pengujian ini mengevaluasi hubungan antara **kondisi input (Cause)** dan **respons sistem yang diharapkan (Effect)** untuk memastikan sistem bereaksi sesuai aturan bisnis.

| No | Skenario | Cause (Input/Kondisi) | Effect (Output/Respons yang Diharapkan) | Status |
|----|----------|------------------------|------------------------------------------|--------|
| 1  | Login gagal | Username valid + Password salah | Tampil pesan “Password salah” | ✅ |
| 2  | Register gagal | Email kosong | Tampil pesan “Email wajib diisi” | ✅ |
| 3  | Register gagal | Email tidak valid format | Tampil pesan “Format email salah” | ✅ |
| 4  | Ubah password gagal | Password lama salah | Tampil pesan “Password lama tidak cocok” | ✅ |
| 5  | Ubah password berhasil | Password lama benar, password baru valid | Password berhasil diubah, redirect | ✅ |
| 6  | Reset password gagal | Token invalid | Tampil pesan “Token tidak valid” | ✅ |
| 7  | Reset password berhasil | Token valid + password konfirmasi cocok | Password diubah, tampil konfirmasi | ✅ |
| 8  | Profile update gagal | Field nama kosong | Tampil pesan “Nama wajib diisi” | ✅ |
| 9  | Profile update berhasil | Semua field valid | Data berhasil disimpan ke database | ✅ |
| 10 | Pengaduan sarana gagal | Judul laporan kosong | Tampil pesan “Judul laporan wajib diisi” | ✅ |

---



---


