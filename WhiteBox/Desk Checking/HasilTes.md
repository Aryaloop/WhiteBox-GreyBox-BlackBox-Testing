| **File**              | **Validasi Input** | **SQL Aman?** | **Session Dicek?** | **Token/Password Aman?** | **Output Aman?** | **Catatan**                         |
| --------------------- | ------------------ | ------------- | ------------------ | ------------------------ | ---------------- | ----------------------------------- |
| `login.php`           | ❌                  | ❌             | ❌                  | ✅ password\_verify       | ⚠️               | Brute-force rentan                  |
| `register.php`        | ❌                  | ❌             | ❌                  | ✅ password\_hash         | ✅                | Email tidak dicek                   |
| `forgot-password.php` | ❌                  | ❌             | ❌                  | ⚠️ token dibuat          | ✅                | Tidak ada expired token             |
| `reset-password.php`  | ❌                  | ❌             | ❌                  | ⚠️ token tidak dihapus   | ✅                | Confirm password tidak ada          |
| `change-password.php` | ❌                  | ❌             | ⚠️ (implicit)      | ✅ password\_verify/hash  | ✅                | Tidak validasi password baru        |
| `profile.php`         | ⚠️                 | ❌             | ❌                  | -                        | ❌                | Tidak ada sanitasi                  |
| `dashboard.php`       | ✅                  | ✅             | ❌                  | -                        | ❌                | Tidak ada redirect jika belum login |
