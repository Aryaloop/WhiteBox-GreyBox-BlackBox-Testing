# Boundary Value Analysis (BVA)

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
