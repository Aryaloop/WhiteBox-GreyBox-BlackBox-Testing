# Pengujian Behavior Testing dan Performance testing 

## 1. Behavior Testing 
Behavioral testing, atau pengujian berbasis perilaku, adalah pendekatan pengujian perangkat lunak yang fokus pada bagaimana perangkat lunak berperilaku di bawah berbagai kondisi dan skenario. Ini sering disebut juga sebagai pengujian black box karena penguji tidak perlu melihat struktur kode internal perangkat lunak. 

|No| Fitur | BDD (Given - When - Then)|Flowchart|
|---|------|-------------------------------------|
|1|  | BDD (Given - When - Then)|Flowchart|


| Fitur yang Diuji       | Input / Data Uji      | Langkah Uji                                                       | Hasil Diharapkan                                             | Hasil Aktual | Status |
|------------------------|------------------------|--------------------------------------------------------------------|---------------------------------------------------------------|--------------|--------|
| Dashboard              | -                      | Klik menu “Dashboard” setelah login                               | Halaman dashboard tampil dengan daftar film populer           | Sesuai       | ✔️     |
| Profile View           | -                      | Klik menu “Profile”                                               | Halaman profil tampil (nama, username, foto)                 | Sesuai       | ✔️     |
| Edit Profile           | Nama: Padjrin Fauzi    | Klik 'Edit Profile', ubah nama, klik simpan                       | Data diperbarui di profil                                     | Sesuai       | ✔️     |
| Logout                 | -                      | Klik tombol 'Logout'                                              | Kembali ke halaman login                                     | Sesuai       | ✔️     |
| Pencarian Film         | Minecraft              | Ketik "Minecraft" dan tekan tombol search                         | Film "A Minecraft Movie" muncul                              | Sesuai       | ✔️     |
| Pencarian Kosong       | xyzabc                 | Masukkan kata kunci tidak cocok film manapun                      | Tampil "tidak ditemukan"                                     | Sesuai       | ✔️     |
| Rating Film            | Film dengan rating < 6 | Cek tampilan rating (misal: 5.3)                                   | Rating tampil dengan ikon bintang                            | Sesuai       | ✔️     |
| Tahun Film Validasi    | Tahun: 2025            | Cek tampilan tahun film                                           | Tahun rilis ditampilkan di bawah judul                       | Sesuai       | ✔️     |
| Gambar Film            | -                      | Lihat semua poster di dashboard                                   | Semua gambar proporsional dan tampil jelas                   | Sesuai       | ✔️     |
| Gagal Login Redirect   | -                      | Akses `/dashboard.php` tanpa login                                | Dialihkan ke halaman login                                   | Sesuai       | ✔️     |

## 2. Performance Testing
Performance testing adalah jenis pengujian perangkat lunak yang bertujuan untuk mengevaluasi kinerja, stabilitas, dan skalabilitas sistem di bawah beban kerja tertentu. Pengujian ini membantu mengidentifikasi botol leher, mengukur responsivitas sistem, dan memastikan bahwa aplikasi dapat menangani jumlah pengguna yang diharapkan tanpa penurunan performa yang signifikan. 

| No. | Fitur               | Performance Testing                                                                                   |
|-----|---------------------|--------------------------------------------------------------------------------------------------------|
| 1   | Registrasi Pengguna |  |
| 2   | Login Pengguna      |  |
| 3   | Dashboard           |  |
| 4   | Detail Tugas        |  |
| 5   | Daftar Semua Tugas  |  |




