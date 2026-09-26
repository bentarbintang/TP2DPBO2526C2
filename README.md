# TP2DPBO2526C2

# ✈️ Sistem Manajemen Pesawat (TP2 DPBO)

Program ini mengelola data pesawat Boeing 737 menggunakan konsep **OOP (Object-Oriented Programming)**: enkapsulasi (private + getter/setter), pewarisan (inheritance) bertingkat, dan konstruktor. Project ini diimplementasikan dalam **4 bahasa**: C++, Java, Python, dan PHP, dengan struktur class yang identik.

## Janji

```
Saya Bentar Bintang Umeir dengan nim 2509865 mengerjakan TP2 dalam mata kuliah DPBO untuk 
keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
```

## 1. Penjelasan Atribut 📖

### 1. `Kendaraan` (Base Class)
| Atribut | Tipe | Keterangan |
|---|---|---|
| `jenisBahanBakar` | String | Jenis bahan bakar yang dipakai kendaraan (mis. "Avtur") |
| `kapasitasPenumpang` | int | Jumlah maksimal penumpang |
| `tahunProduksi` | int | Tahun kendaraan diproduksi |
| `statusMesin` | String | Status mesin saat ini ("Menyala" / "Mati") |

### 2. `Pesawat` (extends `Kendaraan`)
| Atribut | Tipe | Keterangan |
|---|---|---|
| `maskapaiPemilik` | String | Nama maskapai pemilik pesawat |
| `ketinggianMaksimalKaki` | int | Ketinggian jelajah maksimal (dalam kaki) |
| `rutePenerbangan` | String | Rute penerbangan yang dilayani |
| `jumlahMesin` | int | Jumlah mesin pada pesawat |

### 3. `Boeing737` (extends `Pesawat`)
| Atribut | Tipe | Keterangan |
|---|---|---|
| `varianSeri` | String | Varian seri Boeing 737 (mis. "800 NG", "MAX 8") |
| `rentangSayapMeter` | double | Rentang sayap dalam satuan meter |
| `kapasitasKargoKg` | double | Kapasitas kargo dalam kilogram |
| `tipeMesinTurbofan` | String | Tipe mesin turbofan yang digunakan |
| `fotoProduk` *(khusus PHP)* | String | Nama/path file foto pesawat hasil upload |

---

## ⚙️ Penjelasan Methods

Setiap class menerapkan **enkapsulasi**: seluruh atribut bersifat `private`, sehingga hanya bisa diakses dari luar class melalui method berikut.

| Jenis Method | Contoh | Fungsi |
|---|---|---|
| Konstruktor default | `Kendaraan()` | Membuat objek kosong tanpa nilai awal |
| Konstruktor berparameter | `Kendaraan(jenisBahanBakar, ...)` | Membuat objek langsung dengan nilai awal terisi |
| Getter | `getStatusMesin()` | Mengambil nilai atribut private |
| Setter | `setStatusMesin(status)` | Mengubah nilai atribut private dengan validasi/kontrol di satu tempat |

Konstruktor pada class turunan (`Pesawat`, `Boeing737`) selalu memanggil konstruktor kelas induk (`super(...)` di Java/PHP, `Base(...)` di C++, `super().__init__(...)` di Python) sebelum menetapkan atribut miliknya sendiri, sehingga seluruh rantai atribut warisan tetap terisi dengan benar.

---

### Versi Web (PHP)
1. **Session dimulai** (`session_start()`) — dipakai sebagai "database" sementara agar data tidak hilang saat halaman di-refresh.
2. Jika session belum berisi data, program mengisi 5 data dummy `Boeing737` (termasuk `fotoProduk` default).
3. **Halaman ditampilkan** (`index.php`):
   - Menampilkan **tabel data pesawat** beserta foto produknya (diambil lewat `getFotoProduk()`).
   - Menampilkan **form tambah data** dengan input teks + upload gambar (`foto_produk`).
4. Saat form di-submit (`POST`):
   - File gambar yang diupload disimpan ke folder `uploads/` dengan nama unik (`pesawat_<timestamp>.<ekstensi>`).
   - Objek `Boeing737` baru dibuat lewat konstruktor, lalu ditambahkan ke `$_SESSION['databasePesawat']`.
   - Halaman merender ulang tabel dengan data terbaru.

```mermaid
flowchart TD
    A[User buka index.php] --> B[Session dimulai]
    B --> C{Session sudah ada data?}
    C -->|Belum| D[Isi 5 data dummy Boeing737]
    C -->|Sudah| E[Ambil data dari session]
    D --> E
    E --> F[Tampilkan tabel + form tambah data]
    F --> G{User submit form?}
    G -->|Ya| H[Upload foto_produk ke folder uploads/]
    H --> I[Buat objek Boeing737 baru]
    I --> J[Simpan ke session]
    J --> F
    G -->|Tidak| F
```

---

## 🧪 Testcase

Setiap bahasa memiliki file `TestCase` yang menguji:
1. Konstruktor default tidak error.
2. Konstruktor berparameter mengisi seluruh atribut (dari level `Kendaraan` sampai `Boeing737`) dengan benar melalui getter.
3. Setter berhasil mengubah nilai atribut.
4. *(Python & PHP)* Atribut private benar-benar tidak bisa diakses langsung dari luar class.

Cara menjalankan:

| Bahasa | Perintah |
|---|---|
| C++ | `g++ -std=c++17 TestCase.cpp -o test && ./test` |
| Java | `javac Kendaraan.java Pesawat.java Boeing737.java TestCase.java && java TestCase` |
| Python | `python3 test_pesawat.py` |
| PHP | `php TestCase.php` |

---

## 🛠️ Cara Menjalankan Program Utama

| Bahasa | Perintah |
|---|---|
| C++ | `c++ Main.cpp -o a.exe && a.exe` |
| Java | `javac *.java && java Main` |
| Python | `python Main.py` |
| PHP | Jalankan web server (mis. `http://localhost/`) lalu buka `index.php` di browser |

## 2. Diagram 
<img width="115" height="352" alt="Screenshot 2026-09-26 204633" src="https://github.com/user-attachments/assets/dafa189d-a31c-481e-baf6-05bc3b2edd08" />

   ## Alasan pemilihan class
   ```
   Alasan Pemilihan & Perbaikan Pewarisan (Inheritance)
   Dalam OOP, inheritance wajib memenuhi aturan "IS-A" (adalah sebuah).
   
   Mengapa Kendaraan lebih baik dari Transportasi? Kendaraan merujuk pada wujud fisik benda/mesinnya (objek konkret), sedangkan Transportasi
lebih merujuk pada sistem atau sektornya (abstrak).
   
   Mengapa bukan Garuda di akhir? Garuda adalah nama perusahaan/maskapai penerbangan (entitas pemilik), bukan jenis pesawat. Menyebut "Garuda adalah sebuah Pesawat" (Garuda IS-A Pesawat)
menyalahi logika OOP. Sebaliknya, "Boeing 737 adalah sebuah Pesawat" sangat tepat secara hierarki. Maskapai (seperti Garuda) lebih cocok dijadikan salah satu atribut di dalam class Pesawat.
   ```
## 3. Alur Program (Program Flow) 🔄

### Versi Console (C++, Java, Python)
1. **Inisialisasi** — program membuat 5 data dummy `Boeing737` dan menyimpannya ke dalam list/array (`ArrayList`, `vector`, `list`).
2. **Menu utama** ditampilkan berulang (`while` loop) dengan 3 pilihan:
   - **1. Tampilkan Tabel** → melakukan iterasi ke seluruh data, memanggil getter masing-masing objek, lalu mencetaknya dalam format tabel rapi.
   - **2. Tambah Data** → program meminta input dari user (maskapai, rute, seri, tahun, penumpang, status mesin), lalu membuat objek `Boeing737` baru melalui konstruktor berparameter dan menambahkannya ke list.
   - **3. Keluar** → menghentikan loop dan program selesai.
3. Program terus berjalan sampai user memilih menu **Keluar**.

```mermaid
flowchart TD
    A[Mulai Program] --> B[Buat 5 Data Dummy]
    B --> C{Tampilkan Menu}
    C -->|1. Tampilkan Tabel| D[Loop data, panggil getter, cetak tabel]
    D --> C
    C -->|2. Tambah Data| E[Input dari user]
    E --> F[Buat objek Boeing737 baru via konstruktor]
    F --> G[Tambahkan ke list/array]
    G --> C
    C -->|3. Keluar| H[Program Selesai]
```

## 4. Struktur File 
```
TP2DPBO2526C2/
├── Cpp/
│ ├── Kendaraan.cpp # deklarasi + implementasi class Kendaraan
│ ├── Pesawat.cpp # deklarasi + implementasi class Pesawat
│ ├── Boeing737.cpp # deklarasi + implementasi class Boeing737
│ ├── Main.cpp # program utama (menu interaktif)
│ └── TestCase.cpp # testcase getter/setter & konstruktor
├── Java/
│ ├── Kendaraan.java
│ ├── Pesawat.java
│ ├── Boeing737.java
│ ├── Main.java
│ └── TestCase.java
├── Php/
│ ├── Kendaraan.php
│ ├── Pesawat.php
│ ├── Boeing737.php
│ ├── index.php # program utama (form web + tabel)
│ ├── TestCase.php
│ └── uploads/ # folder penyimpanan foto_produk hasil upload
└── Python/
│   ├── Kendaraan.py
│   ├── Pesawat.py
│   ├── Boeing737.py
│   └── Main.py
└── test_pesawat.py
```

## 5. Dokumentasi
```
Bahasa C++
   1. Compile dan isi tabel sebelum ditambah data
```
   <img width="769" height="202" alt="Screenshot 2026-09-26 150016" src="https://github.com/user-attachments/assets/f38517d2-69c1-49dc-9c33-07bf4c9ccdea" />
   
```
   2. Menambahkan data
```
   <img width="741" height="149" alt="Screenshot 2026-09-26 150034" src="https://github.com/user-attachments/assets/d549988d-7070-48a0-91b8-bb532ba89063" />
   
```
   3. Setelah ditambahkan data
```
   <img width="732" height="171" alt="Screenshot 2026-09-26 150045" src="https://github.com/user-attachments/assets/8bb6b40c-1eb8-44bc-aa30-b09e28e40d68" />


```
Bahasa Java
   1. Compile dan isi tabel sebelum ditambah data
```
   <img width="773" height="206" alt="Screenshot 2026-09-26 151800" src="https://github.com/user-attachments/assets/e4ce0c65-25b3-4c7e-9d05-aa01e9934a26" />
   
```
   2. Menambahkan data
```
   <img width="760" height="138" alt="Screenshot 2026-09-26 200120" src="https://github.com/user-attachments/assets/e2e479b7-e8ad-4e9f-82e5-534459a604b6" />
   
```
   3. Setelah ditambahkan data
```
   <img width="756" height="164" alt="Screenshot 2026-09-26 200130" src="https://github.com/user-attachments/assets/46621bd5-65ee-4ad7-b460-5cdb0f0a503e" />


```
Bahasa Python
   1. Compile dan isi tabel sebelum ditambah data
```
   <img width="757" height="175" alt="Screenshot 2026-09-26 200412" src="https://github.com/user-attachments/assets/65a9b59c-d6d3-4e33-8b42-ebd98bba83dd" />
   
```
   2. Menambahkan data
```
   <img width="752" height="138" alt="Screenshot 2026-09-26 200426" src="https://github.com/user-attachments/assets/fc1eee56-e802-4261-aac1-3d5cb9ba1491" />
   
```
   3. Setelah ditambahkan data
```
   <img width="758" height="161" alt="Screenshot 2026-09-26 200434" src="https://github.com/user-attachments/assets/ca73bc5f-017a-4ec8-9006-a64ec945a7ac" />


```
Bahasa Php
   1. Menjalankan di local host xampp dan isi tabel sebelum ditambahkan data
```
   <img width="958" height="327" alt="Screenshot 2026-09-26 204222" src="https://github.com/user-attachments/assets/1aaae837-aa30-4dc7-abda-72ff658ec2c0" />
   
```
   2. Tabel setelah ditambahkan data
```
   <img width="937" height="387" alt="Screenshot 2026-09-26 204310" src="https://github.com/user-attachments/assets/6cecbc66-e716-437a-914a-61abe8fd914d" />







   






