
**Kode yang diuji:**

```php
function loginUser($conn, $username, $password)
```

| Kondisi Yang Diuji             | Hasil Yang Diharapkan                   | Hasil Aktual | Status |
| ------------------------------ | --------------------------------------- | ------------ | ------ |
| Username tidak ditemukan       | Muncul pesan "Username tidak ditemukan" | Sesuai       | ✅      |
| Password salah                 | Muncul pesan "Password salah"           | Sesuai       | ✅      |
| Email belum diverifikasi       | Muncul pesan "Email belum diverifikasi" | Sesuai       | ✅      |
| Login berhasil + Captcha benar | Redirect ke dashboard                   | Sesuai       | ✅      |
| Captcha kosong                 | Redirect ke login dengan error          | Sesuai       | ✅      |
| Captcha gagal diverifikasi     | Redirect ke login dengan error          | Sesuai       | ✅      |

---
