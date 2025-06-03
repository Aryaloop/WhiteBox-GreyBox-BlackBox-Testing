# 🧮 Matrix Testing – Gray Box Testing

✅ Tujuan Matrix Testing digunakan untuk menguji kombinasi dari berbagai kondisi input dan status aplikasi, agar dapat mendeteksi interaksi yang dapat menyebabkan bug.

## 🎯 Fitur yang Diuji:
- Status Login (✅ = login, ❌ = belum login)
- Bookmark Exist (✅ = film sudah dibookmark, ❌ = belum)
- Data Valid (✅ = kombinasi user & movie valid, ❌ = rusak/tidak ada)

## 🧪 Matriks Pengujian:

| TC | Login | Bookmark Exist | Data Valid | Hasil yang Diharapkan           |
|----|-------|----------------|------------|----------------------------------|
| 1  | ✅    | ❌             | ✅         | Bookmark ditambahkan             |
| 2  | ✅    | ✅             | ✅         | Ditolak (duplikat)               |
| 3  | ❌    | ❌             | ✅         | Redirect ke login                |
| 4  | ✅    | ❌             | ❌         | Gagal – Data tidak valid         |
| 5  | ✅    | ❌             | ✅         | Bookmark ditambahkan             |
| 6  | ❌    | ✅             | ✅         | Redirect ke login                |
| 7  | ✅    | ❌             | ❌         | Error handling muncul            |
| 8  | ❌    | ❌             | ❌         | Redirect ke login                |

## 📸 Screenshot
Lihat folder `/screenshots/` untuk bukti hasil uji.
