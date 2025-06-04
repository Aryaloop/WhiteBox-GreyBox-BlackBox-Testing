## Fungsi bookmarks_handler

```
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['title']) || empty($_POST['url'])) {
        $_SESSION['error'] = 'Semua field harus diisi.';
        header('Location: ../pages/bookmarks.php');
        exit();
    }
    // Proses simpan ke database
}
```
Flow Diagram
```
(1) ──> [Cek request method == POST]
  |
  v
(2) Validasi field title dan url
  |        \
  |         v
  |   (3) Error: Semua field wajib → Redirect
  v
(4) Simpan ke DB
  |
  v
(5) Redirect kembali ke halaman
