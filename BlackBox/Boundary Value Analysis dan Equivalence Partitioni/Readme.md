# Boundary Value Analysis (BVA)

## **Fitur yang Diuji**: [Registrasi, login, dan add task.]  

### **Parameter Input**:
| Parameter | Tipe Data | Batas Valid | Batas Invalid      |
|-----------|-----------|-------------|--------------------|
| -  | -    | - | - |
| -  | -    | - | - |
# Boundary Value Analysis (BVA)

## 1. Fitur Registrasi
| ID   | Parameter | Nilai Input      | Kategori       | Expected Result | Actual Result | Status (✔/✖) | Catatan |
|------|-----------|------------------|----------------|------------------|---------------|-------------|---------|
| - | -  | -      | -  |      -       |    -      |              |         |
| - | -  | -              | -    |      -      |    -     |              |         |
| - | -  | -        | -    |        -    |       -        |         |         |
| - | -  | -        | -    |      -      |       -        |        |         |
| - | -  | -      | -  |        -     |       -        |             |         |
| - | -  | -              | -    |      -      |        -       |             |         |
| - | -  | -             | -    |       -     |        -       |             |         |
| - | -  | -        | -   |         -   |          -     |             |         |
| - | -  | -        | -    |         -   |               |             |         |

## 2. Fitur Login
| ID   | Parameter | Nilai Input      | Kategori       | Expected Result | Actual Result | Status (✔/✖) | Catatan |
|------|-----------|------------------|----------------|------------------|---------------|-------------|---------|
| - |  - |    -   |  - |      -       | -             |    -        |         |
| - |  - |     -          |   -  | -  |  -             |   -         |         |
| - |  - |    -   | -  |       -      |       -        |     -        |         |
| - |  - |    -           |  -   | -  | -              |     _        |         |

### **Parameter Input**:
| Parameter | Tipe Data | Batas Valid | Batas Invalid      |
|-----------|-----------|-------------|--------------------|
| -  | -    | - | - |
| -  | -    | - | -  |

## 3. Fitur Add Task
| ID   | Parameter    | Nilai Input      | Kategori       | Expected Result | Actual Result | Status (✔/✖) | Catatan |
|------|--------------|------------------|----------------|------------------|---------------|-------------|---------|
| - | -        | "" (kosong)      | Batas Invalid  | Error            | Error         |           |         |
| - | -        | "a"              | Batas Valid    | Sukses           | Sukses        |             |         |
| - | -        | 12 chars        | Batas Valid    | Sukses           |  Sukses             |             |         |
| - | -        | 13 chars        | Batas Invalid  | Error            |  Sukses             |            |         |
| - | -  | "" (kosong)      | Batas Valid*   | Sukses           | Sukses              |             |         |
| - | -  | 1 char           | Batas Valid    | Sukses           | Sukses              |            |         |
| - | -  | 13 chars       | Batas Invalid    | Error           |     Sukses          |              |         |
---

# Equivalence Partitioning (EP) Test Cases

## Fitur yang Diuji: Register, Login, dan Add Task

### 1. Fitur Register
**Deskripsi**: Pendaftaran user baru dengan username, email, dan password.

#### Partisi Input:
| Input     | Partisi Valid               | Partisi Invalid                 |
|-----------|-----------------------------|----------------------------------|
| Username  | String unik (≥1 karakter)   | Kosong/sudah ada di database    |
| Email     | Format valid & unik         | Format invalid/sudah terdaftar  |
| Password  | String (≥1 karakter)        | Kosong                          |

#### Test Case:
| ID  | Input                                   | Partisi  | Expected Result                  | Catatan               |
|-----|-----------------------------------------|----------|-----------------------------------|-----------------------|
| -  | ``|  -   | -                 | -     |
| -  | ``       | -  | -          | -       |
| -  | ``   | -  | -            | -    |
| -  | ``        | -  | -          | -      |

---

### 2. Fitur Login
**Deskripsi**: Autentikasi user dengan username dan password.

#### Partisi Input:
| Input     | Partisi Valid               | Partisi Invalid                 |
|-----------|-----------------------------|----------------------------------|
| Username  | Terdaftar di database       | Tidak terdaftar/kosong          |
| Password  | Sesuai dengan database      | Salah/kosong                    |

#### Test Case:
| ID  | Input                     | Partisi  | Expected Result          | Catatan               |
|-----|---------------------------|----------|---------------------------|-----------------------|
| EP1  | `("admin", "123")`  | Valid    | Login sukses              | Credential valid      |
| EP2  | `("", "123")`       | Invalid  | Error: "Username kosong"  | Username kosong       |
| EP3  | `("admin", "")`           | Invalid  | Error: "Password kosong"  | Password kosong       |
| EP4  | `("admin", "321")`      | Invalid  | Error: "Password salah"   | Password tidak match  |

---

### 3. Fitur Add Task
**Deskripsi**: Menambahkan task baru dengan title dan description.

#### Partisi Input:
| Input        | Partisi Valid          | Partisi Invalid       |
|--------------|------------------------|-----------------------|
| Title        | String (≥1 karakter)   | Kosong                |
| Description  | String (boleh kosong)  | -                     |

#### Test Case:
| ID  | Input                              | Partisi  | Expected Result               | Catatan               |
|-----|------------------------------------|----------|--------------------------------|-----------------------|
| EP1  | `("Task valid", "Deskripsi")`     | Valid    | Task berhasil ditambahkan      | Semua input valid     |
| EP2  | `("", "Deskripsi")`               | Invalid  | Error: "Title kosong"          | Title kosong          |
| EP3  | `("Task", "")`                    | Valid    | Task berhasil ditambahkan      | Description boleh kosong |
