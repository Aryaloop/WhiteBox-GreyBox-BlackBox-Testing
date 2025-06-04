## Fungsi bookmarks

```php
function forgotPassword($conn, $email)
```
## Flow Diagram
```
(1) ──> [Cek email di DB]
  |         \
  |          v
  |   (2) Gagal: Email tidak ditemukan
  v
(3) Generate token & expiry
  |
  v
(4) Update token ke DB
  |
  v
(5) Kirim email reset
  |         \
  |          v
  |   (6) Gagal kirim email
  v
(7) Sukses

