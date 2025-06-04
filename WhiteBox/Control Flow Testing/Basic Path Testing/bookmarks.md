## Fungsi bookmarks

```
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
```
## Flow Diagram
```
(1) ──> [session_start()]
  |
  v
(2) Cek session user_id
  |        \
  |         v
  |   (3) Redirect ke login
  v
(4) Tampilkan halaman bookmark
