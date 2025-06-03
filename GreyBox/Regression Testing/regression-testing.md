| ID  | Fitur Lama     | Fitur Baru                | Regression Test                             | Status |
| --- | -------------- | ------------------------- | ------------------------------------------- | ------ |
| R01 | Login user     | Tambah verifikasi email   | Login tetap jalan bila verifikasi selesai   | ✅      |
| R02 | Bookmark film  | Tambah verifikasi session | Bookmark masih bekerja jika user login      | ✅      |
| R03 | Reset password | Tambah token expiry       | Reset gagal jika token kadaluarsa           | ✅      |
| R04 | Register       | Tambah email verifikasi   | User tidak bisa login jika belum verifikasi | ✅      |
