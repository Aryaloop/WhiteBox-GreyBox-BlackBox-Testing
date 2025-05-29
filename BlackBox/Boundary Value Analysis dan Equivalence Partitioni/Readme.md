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
