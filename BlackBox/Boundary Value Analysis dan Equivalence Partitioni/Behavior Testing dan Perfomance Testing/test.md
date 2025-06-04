# Pengujian Behavior Testing dan Performance testing 

## 1. Behavior Testing 
Behavioral testing, atau pengujian berbasis perilaku, adalah pendekatan pengujian perangkat lunak yang fokus pada bagaimana perangkat lunak berperilaku di bawah berbagai kondisi dan skenario. Ini sering disebut juga sebagai pengujian black box karena penguji tidak perlu melihat struktur kode internal perangkat lunak. 

| No | Fitur               | BDD (Given - When - Then)                                                                 |Flowchart |
|----|---------------------|--------------------------------------------------------------------------------------------|---|
| 1  | Registrasi Akun     | Given pengguna belum memiliki akun, When pengguna mengisi form dan submit, Then data disimpan dan email verifikasi dikirim |![Image](https://github.com/user-attachments/assets/d1b0cd90-6b75-4dfe-bc20-693e1239b6d9)|
| 2  | Verifikasi Email    | Given pengguna menerima email verifikasi, When pengguna klik link, Then status akun menjadi terverifikasi |
| 3  | Login               | Given pengguna telah terverifikasi, When login dengan email dan password valid, Then pengguna masuk ke dashboard |
| 4  | Logout              | Given pengguna sudah login, When klik tombol logout, Then sesi dihancurkan dan diarahkan ke halaman login |
| 5  | Tambah Bookmark     | Given pengguna di dashboard, When mengisi form bookmark dan submit, Then data disimpan ke database |
| 6  | Lihat Bookmark      | Given pengguna di dashboard, When halaman dimuat, Then tampilkan semua bookmark dari user tersebut |
| 7  | Hapus Bookmark      | Given bookmark tersedia, When pengguna klik hapus, Then bookmark dihapus dari database |



## 2. Performance Testing
Performance testing adalah jenis pengujian perangkat lunak yang bertujuan untuk mengevaluasi kinerja, stabilitas, dan skalabilitas sistem di bawah beban kerja tertentu. Pengujian ini membantu mengidentifikasi botol leher, mengukur responsivitas sistem, dan memastikan bahwa aplikasi dapat menangani jumlah pengguna yang diharapkan tanpa penurunan performa yang signifikan. 

| No. | Fitur               | Performance Testing                                                                                   |
|-----|---------------------|--------------------------------------------------------------------------------------------------------|
| 1   | Registrasi Pengguna |  |
| 2   | Login Pengguna      |  |
| 3   | Dashboard           |  |
| 4   | Bookmark        |  |
| 5   | Profile  |  |
| 6   | Change Password  |  |
| 7   | Forgot Password  |  |
| 8   | Reset Password  |  |




