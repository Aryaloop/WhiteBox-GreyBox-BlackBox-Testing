## Fungsi Register

```php
function registerUser($conn, $name, $email, $address, $phone, $username, $password)
```
## Flow Diagram
```
(1) ──> [Start transaksi DB]
  |
  v
(2) Cek duplikat email/username
  |         \
  |          v
  |   (3) Gagal: Email/Username terpakai → Rollback
  v
(4) Hash password + generate kode
  |
  v
(5) Insert user baru
  |
  v
(6) Kirim email verifikasi
  |         \
  |          v
  |   (7) Gagal kirim email → Rollback
  v
(8) Commit + tampilkan pesan sukses
