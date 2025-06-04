**Kode yang diuji:**

```php
function forgotPassword($conn, $email)
```

| Kondisi Yang Diuji    | Hasil Yang Diharapkan                   | Hasil Aktual | Status |
| --------------------- | --------------------------------------- | ------------ | ------ |
| Email tidak ditemukan | Tampilkan error "Email tidak ditemukan" | Sesuai       | ✅      |
| Email valid           | Kirim email reset password dengan token | Sesuai       | ✅      |

---
