
| Bagian           | Komponen         | Deskripsi Pemeriksaan                                               | Hasil Pemeriksaan                              | Screenshot Code                         | Screenshot Tampilan                   |
|------------------|------------------|---------------------------------------------------------------------|------------------------------------------------|-----------------------------------------|---------------------------------------|
| Autentikasi      | `register()`     | Input disimpan di DB dengan `generate_password_hash()`              | ✔️ Password tersimpan dalam bentuk hash        | ![](regisCode.png)              | ![](regis.jpg)            |
| Autentikasi      | `login()`        | Password diverifikasi dengan `check_password_hash()`                | ✔️ Login berhasil jika password benar          | ![](logincode.png)              | ![](login.jpg)            |
| Auntikasi | `sendVerificationEmail()`     |Email verifikasi dikirim ke user dengan link yang berisi kode verifikasi unik      | ✔️  Email verifikasi berhasil dikirim ke alamat user             | ![](verifCode.png)              | ![](verifikasi.png)            |
| 	Autentikasi | `dashboard.php`  | Memastikan hanya user yang sudah login dan verifikasi dapat akses dashboard. Data user diambil sesuai user_id sesi        | ✔️ Hanya user terautentikasi yang dapat akses dan data tampil sesuai user | ![](Dashboard.png)              | ![](dasCode.png)            |

