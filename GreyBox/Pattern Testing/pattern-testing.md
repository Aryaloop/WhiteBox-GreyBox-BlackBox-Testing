# 🧷 Pattern Testing – Gray Box Testing

✅ Tujuan pengujian ini adalah menguji sistem dengan pola input yang tidak biasa atau edge case untuk melihat seberapa tangguh aplikasi dalam menangani data ekstrem.

## 🎯 Pola yang Diuji:

| TC | movie_title         | poster_path      | Expected Outcome                        |
|----|---------------------|------------------|------------------------------------------|
| 1  | "A"                 | /poster.jpg      | Diterima                                 |
| 2  | "" (kosong)         | /poster.jpg      | Gagal – title wajib                      |
| 3  | "Film Normal"       | NULL             | Diterima – poster_path opsional         |
| 4  | "Injection';--"     | /hack.jpg        | Ditolak / aman dari SQL injection       |
| 5  | "🎬✨💥"             | /emoji.jpg       | Diterima jika UTF-8                      |

## 📸 Screenshot
Lihat folder `/screenshots/` untuk bukti hasil uji.
