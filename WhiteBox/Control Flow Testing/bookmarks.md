**Kode yang diuji:**

```php
// bookmarks.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// bookmark_handler.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['title']) || empty($_POST['url'])) {
        $_SESSION['error'] = 'Semua field harus diisi.';
        header('Location: ../pages/bookmarks.php');
        exit();
    }
    // Proses simpan ke database
}
```

| Kondisi Yang Diuji                     | Hasil Yang Diharapkan           | Hasil Aktual | Status |
| -------------------------------------- | ------------------------------- | ------------ | ------ |
| User login (akses bookmarks.php)       | Tampilkan daftar bookmark       | Sesuai       | ✅      |
| User belum login (akses bookmarks.php) | Redirect ke login               | Sesuai       | ✅      |
| Submit form bookmark kosong            | Tampilkan pesan error           | Sesuai       | ✅      |
| Submit form bookmark valid             | Tambahkan bookmark dan redirect | Sesuai       | ✅      |
