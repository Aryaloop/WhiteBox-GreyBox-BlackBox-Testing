**Kode yang diuji:**

```php
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../pages/login.php");
    exit();
}
```

| Kondisi Yang Diuji                  | Hasil Yang Diharapkan                 | Hasil Aktual | Status |
| ----------------------------------- | ------------------------------------- | ------------ | ------ |
| Logout link diklik (`?logout=true`) | Session dihapus dan redirect ke login | Sesuai       | ✅      |

---
