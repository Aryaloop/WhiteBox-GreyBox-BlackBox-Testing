Menguji semua kombinasi user_id dan movie_id untuk validasi constraint dan logika sistem

| Test Case | user\_id | movie\_id | Expected Outcome             |
| --------- | -------- | --------- | ---------------------------- |
| TC1       | 36       | 574475    | Data diterima (sudah ada)    |
| TC2       | 36       | 123456    | Data baru diterima           |
| TC3       | 99999    | 574475    | Gagal – user\_id tidak valid |
| TC4       | NULL     | 574475    | Gagal – user\_id kosong      |
| TC5       | 36       | NULL      | Gagal – movie\_id kosong     |
