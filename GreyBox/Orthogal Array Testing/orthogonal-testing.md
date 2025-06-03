# 🧩 Orthogonal Array Testing – Gray Box Testing

✅ Tujuan pengujian ini adalah meminimalkan kombinasi dengan tetap mencakup cakupan maksimal dari kondisi penting aplikasi.

## 🎯 Faktor yang Diuji:
- Login Status (Login / Logout)
- Validitas User ID (Valid / Invalid)
- Bookmark Exist (Ya / Tidak)

## 🧪 Pengujian (4 Kombinasi Representatif):

| TC | Login Status | User ID Valid | Bookmark Exist | Expected Result             |
|----|--------------|----------------|----------------|-----------------------------|
| 1  | Login        | Valid          | Tidak          | Bookmark berhasil disimpan  |
| 2  | Login        | Valid          | Ya             | Duplikat ditolak            |
| 3  | Login        | Invalid        | Tidak          | Gagal – user tidak ditemukan|
| 4  | Logout       | Valid          | Tidak          | Gagal – harus login         |

## 📸 Screenshot
Lihat folder `/screenshots/` untuk bukti hasil uji.
