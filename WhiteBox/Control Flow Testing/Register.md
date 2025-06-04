**Kode yang diuji:**

```php
function registerUser($conn, $name, $email, $address, $phone, $username, $password)
```

| Kondisi Yang Diuji                  | Hasil Yang Diharapkan                             | Hasil Aktual | Status |
| ----------------------------------- | ------------------------------------------------- | ------------ | ------ |
| Email atau username sudah terdaftar | Gagal register, tampilkan error                   | Sesuai       | ✅      |
| Data valid & unik                   | Kirim email verifikasi dan tampilkan pesan sukses | Sesuai       | ✅      |
| Kegagalan database                  | Rollback transaksi dan tampilkan error            | Sesuai       | ✅      |

---
