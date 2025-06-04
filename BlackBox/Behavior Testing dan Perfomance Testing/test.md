# Pengujian Behavior Testing dan Performance testing 

## 1. Behavior Testing 
Behavioral testing, atau pengujian berbasis perilaku, adalah pendekatan pengujian perangkat lunak yang fokus pada bagaimana perangkat lunak berperilaku di bawah berbagai kondisi dan skenario. Ini sering disebut juga sebagai pengujian black box karena penguji tidak perlu melihat struktur kode internal perangkat lunak. 

| No | Fitur               | BDD (Given - When - Then)                                                                 |Flowchart |
|----|---------------------|--------------------------------------------------------------------------------------------|---|
| 1  | Registrasi Akun     | Given pengguna belum memiliki akun, When pengguna mengisi form dan submit, Then data disimpan dan email verifikasi dikirim |![Image](https://github.com/user-attachments/assets/d1b0cd90-6b75-4dfe-bc20-693e1239b6d9)|
| 2  | Verifikasi Email    | Given pengguna menerima email verifikasi, When pengguna klik link, Then status akun menjadi terverifikasi |![Image](https://github.com/user-attachments/assets/52174c4c-abcb-41fd-befe-4b9af77a289d)|
| 3  | Login               | Given pengguna telah terverifikasi, When login dengan email dan password valid, Then pengguna masuk ke dashboard |![Image](https://github.com/user-attachments/assets/8eaf3bdd-6e01-4b29-8fb8-665213c0e3a0)|
| 4  | Logout              | Given pengguna sudah login, When klik tombol logout, Then sesi dihancurkan dan diarahkan ke halaman login |![Image](https://github.com/user-attachments/assets/e01b60fe-7be5-4b29-a9ce-cfb309be5fa0)|
| 5  | Tambah Bookmark     | Given pengguna di dashboard, When mengisi form bookmark dan submit, Then data disimpan ke database |![Image](https://github.com/user-attachments/assets/9d15bd23-1eab-4a35-bb83-e860ca5dcc0c)|
| 6  | Lihat Bookmark      | Given pengguna di dashboard, When halaman dimuat, Then tampilkan semua bookmark dari user tersebut |![Image](https://github.com/user-attachments/assets/5622bb79-8e64-4703-8b71-936901f6797c)|
| 7  | Hapus Bookmark      | Given bookmark tersedia, When pengguna klik hapus, Then bookmark dihapus dari database |![Image](https://github.com/user-attachments/assets/0083b8c5-bdb4-416a-befe-ae04cf98a14d)|



## 2. Performance Testing
Performance testing adalah jenis pengujian perangkat lunak yang bertujuan untuk mengevaluasi kinerja, stabilitas, dan skalabilitas sistem di bawah beban kerja tertentu. Pengujian ini membantu mengidentifikasi botol leher, mengukur responsivitas sistem, dan memastikan bahwa aplikasi dapat menangani jumlah pengguna yang diharapkan tanpa penurunan performa yang signifikan. 

| No. | Fitur               | Performance Testing                                                                                   |
|-----|---------------------|--------------------------------------------------------------------------------------------------------|
| 1   | Registrasi Pengguna | ![Image](https://github.com/user-attachments/assets/d3e7cb0a-c82d-4e3b-be04-b233d925b1d8) |
| 2   | Login Pengguna      |![image](https://github.com/user-attachments/assets/35b340ed-113a-4467-88ec-e953bfce4927)|
| 3   | Dashboard           |![image](https://github.com/user-attachments/assets/8ea8df6d-21bf-4eac-bd53-2457a51f5017)|
| 4   | Bookmark        | ![image](https://github.com/user-attachments/assets/2707e117-2fa3-4837-98d6-abe5cd16e2e5)|
| 5   | Profile  |  |
| 6   | Change Password  |  |
| 7   | Forgot Password  |  |
| 8   | Reset Password  |  |





