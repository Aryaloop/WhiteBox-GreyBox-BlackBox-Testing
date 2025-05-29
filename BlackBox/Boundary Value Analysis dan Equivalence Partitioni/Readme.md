# Boundary Value Analysis (BVA)

# Registrasi
| **No** | **Fitur yang Diuji**             | **Input**                             | **Langkah Uji**                                     | **Hasil yang Diharapkan**                          | **Hasil Aktual**                                        | **Status**        |
| ------ | -------------------------------- | ------------------------------------- | --------------------------------------------------- | -------------------------------------------------- | ------------------------------------------------------- | ----------------- |
| 1      | Registrasi Pengguna              | Nama, Email, Username, Password, Dll. | Isi semua field dengan data valid dan klik “Daftar” | Akun berhasil dibuat dan disimpan di tabel `users` | Akun tersimpan dengan ID 6                              | Lulus             |
| 2      | Registrasi dengan Email Duplikat | Email: `aryamughni353@gmail.com`      | Gunakan email yang sama seperti data yang ada       | Muncul pesan kesalahan "Email sudah digunakan"     | Sistem menolak input                                    | Lulus             |
| 3      | Login Pengguna                   | Username dan Password valid           | Masukkan `KakaraNugas` dan password benar           | Login berhasil jika `is_verified = 1`              | Login gagal karena `is_verified = 0`                    | Lulus             |
| 4      | Verifikasi Email                 | Kode: `da12ac`                        | Masukkan kode verifikasi yang benar                 | Status `is_verified` menjadi 1                     | Belum diketahui (tergantung implementasi)               | Perlu uji         |
| 5      | Reset Password                   | Email valid                           | Minta reset password melalui email                  | Token reset dan expiry tercatat di DB              | Nilai `reset_token` dan `reset_token_expiry` masih NULL | Gagal/Tidak Diuji |
| 6      | Validasi Nomor Telepon           | Input: `083104480855`                 | Masukkan nomor telepon dengan format Indonesia      | Diterima jika panjang dan format sesuai            | Nomor disimpan                                          | Lulus             |
| 7      | Registrasi Pengguna              | Nama, Email, Username, Password, Dll. | Isi semua field dengan data valid dan klik “Daftar” | Akun berhasil dibuat dan disimpan di tabel `users` | Akun tersimpan dengan ID 6                              | Lulus             |
| 8      | Registrasi dengan Email Duplikat | Email: `aryamughni353@gmail.com`      | Gunakan email yang sama seperti data yang ada       | Muncul pesan kesalahan "Email sudah digunakan"     | Sistem menolak input                                    | Lulus             |
| 9      | Login Pengguna                   | Username dan Password valid           | Masukkan `KakaraNugas` dan password benar           | Login berhasil jika `is_verified = 1`              | Login gagal karena `is_verified = 0`                    | Lulus             |
| 10      | Verifikasi Email                 | Kode: `da12ac`                        | Masukkan kode verifikasi yang benar                 | Status `is_verified` menjadi 1                     | Belum diketahui (tergantung implementasi)               | Perlu uji         |
| 11      | Reset Password                   | Email valid                           | Minta reset password melalui email                  | Token reset dan expiry tercatat di DB              | Nilai `reset_token` dan `reset_token_expiry` masih NULL | Gagal/Tidak Diuji |
| 12      | Validasi Nomor Telepon           | Input: `083104480855`                 | Masukkan nomor telepon dengan format Indonesia      | Diterima jika panjang dan format sesuai            | Nomor disimpan                                          | Lulus             |



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
