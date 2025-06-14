**Kode yang diuji:**

```php
// dashboard.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
```

| Kondisi Yang Diuji         | Hasil Yang Diharapkan       | Hasil Aktual | Status |
| -------------------------- | --------------------------- | ------------ | ------ |
| User login (session aktif) | Tampilkan halaman dashboard | Sesuai       | ✅      |
| User belum login           | Redirect ke login           | Sesuai       | ✅      |

---
