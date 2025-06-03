
| ID   | Test Case                                | Input                          | Expected Output                                     | Status |
| ---- | ---------------------------------------- | ------------------------------ | --------------------------------------------------- | ------ |
| GB01 | Register user baru                       | Form isian valid               | Akun terdaftar & email verifikasi terkirim          | ✅      |
| GB02 | Register dengan email/username sudah ada | Duplikat email                 | Pesan error: "Email atau username sudah digunakan." | ✅      |
| GB03 | Login dengan password salah              | Username benar, password salah | Pesan error: "Password salah."                      | ✅      |
| GB04 | Login sebelum verifikasi email           | Username dan password benar    | Pesan error: "Email belum diverifikasi."            | ✅      |
| GB05 | Reset password dengan email valid        | Email terdaftar                | Email reset dikirim                                 | ✅      |
| GB06 | Bookmark film                            | ID user valid & ID film valid  | Data bookmark tersimpan                             | ✅      |
| GB07 | Remove bookmark                          | Klik "hapus bookmark"          | Bookmark dihapus                                    | ✅      |
