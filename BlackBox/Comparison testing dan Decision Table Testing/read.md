# 🧪 Laporan Pengujian Comparison Testing dan Decision Table Testing

## 1. ✅ Comparison Testing  
Comparison Testing digunakan untuk membandingkan output aktual dari fitur terhadap output yang diharapkan untuk setiap skenario penting. Tujuannya adalah memastikan bahwa hasil dari sistem sesuai dengan ekspektasi dalam berbagai kondisi input.

### Tabel Comparison Testing

| No | Fitur           | Skenario                                            | Input                                         | Hasil yang Diharapkan                  | Hasil Aktual           | Status |
|----|------------------|-----------------------------------------------------|----------------------------------------------|----------------------------------------|-------------------------|--------|
| 1  | Login            | Login dengan akun valid                             | Email: `admin@gmail.com`<br>Password: `admin123` | Redirect ke dashboard                  | Redirect ke dashboard  | ✔️     |
| 2  | Login            | Login dengan password salah                         | Email: `admin@gmail.com`<br>Password: `salah123` | Muncul pesan error "Password salah"    | Muncul pesan error     | ✔️     |
| 3  | Register         | Mendaftar dengan email yang sudah terdaftar        | Email: `admin@gmail.com`                     | Muncul error "Email sudah digunakan"   | Muncul error            | ✔️     |
| 4  | Reset Password   | Reset password dengan token valid                  | Token valid via email                        | Form reset password ditampilkan        | Form tampil             | ✔️     |
| 5  | Reset Password   | Reset password dengan token tidak valid            | Token invalid                                | Redirect ke halaman error/expired link | Redirect terjadi        | ✔️     |

---

## 2. 🧾 Decision Table Testing 
Decision Table Testing menguji sistem berdasarkan berbagai kombinasi kondisi dan keputusan. Sangat berguna untuk memverifikasi validasi dan logika sistem, khususnya pada fitur formulir input seperti registrasi dan ganti password.

### Tabel Decision Table – Registrasi Pengguna

| Kondisi Input                  | Email Valid | Password Valid | Nama Lengkap Diisi | Aksi Sistem        | Output yang Diharapkan          | Status |
|--------------------------------|-------------|----------------|---------------------|---------------------|----------------------------------|--------|
| Tidak valid (tanpa `@`)        | ❌          | ✅              | ✅                  | Klik submit         | Error: Email tidak valid         | ✔️     |
| Valid                          | ✅          | ❌ (kurang 6 karakter) | ✅           | Klik submit         | Error: Password tidak valid      | ✔️     |
| Valid                          | ✅          | ✅              | ❌ (kosong)          | Klik submit         | Error: Nama tidak boleh kosong   | ✔️     |
| Valid                          | ✅          | ✅              | ✅                  | Klik submit         | Simpan data & kirim verifikasi   | ✔️     |

### Tabel Decision Table – Ganti Password

| Password Lama Benar | Password Baru Valid | Konfirmasi Cocok | Aksi Sistem         | Output yang Diharapkan         | Status |
|---------------------|---------------------|-------------------|----------------------|----------------------------------|--------|
| ✅                  | ✅                  | ✅                | Klik ubah password   | Password berhasil diubah         | ✔️     |
| ❌                  | ✅                  | ✅                | Klik ubah password   | Error: Password lama salah       | ✔️     |
| ✅                  | ❌ (kurang 6 char)  | ✅                | Klik ubah password   | Error: Password baru tidak valid | ✔️     |
| ✅                  | ✅                  | ❌                | Klik ubah password   | Error: Konfirmasi tidak cocok    | ✔️     |

---

## 📌 Kesimpulan

- Seluruh skenario **berhasil dijalankan dengan hasil sesuai ekspektasi**.
- Tidak ditemukan error fungsional selama pengujian dilakukan.
- Sistem terbukti stabil dan menangani berbagai kondisi input dengan baik, menunjukkan keandalan dalam validasi dan pengambilan keputusan.


