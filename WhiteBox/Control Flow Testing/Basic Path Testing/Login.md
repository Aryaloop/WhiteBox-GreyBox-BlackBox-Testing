## Fungsi login

```php
function loginUser($conn, $username, $password)
```
## Flow Diagram
```
(1) ──> [Cek username di DB]
  |           |
  |           v
  |   [Username ditemukan?]
  |       |           \
  |       |            v
  |       |     (2) Gagal: Username tidak ditemukan
  |       v
  | [Cek password valid?]
  |       |           \
  |       |            v
  |       |     (3) Gagal: Password salah
  |       v
  | [Sudah verifikasi email?]
  |       |           \
  |       |            v
  |       |     (4) Gagal: Belum verifikasi
  |       v
  | (5) Set session + Redirect dashboard
  v
(6) End
