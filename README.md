# 📚 Laravel 10 CRUD - Data Siswa

## 👋 Tentang Project

**Laravel 10 CRUD - Data Siswa** adalah aplikasi web sederhana untuk mengelola data siswa dengan fitur **Create, Read, Update, dan Delete (CRUD)**.

Project ini dibuat sebagai bagian dari proses pembelajaran **Pemrograman Perangkat Lunak dan Gim (PPLG)** untuk mempelajari cara membuat aplikasi web menggunakan framework Laravel serta menghubungkannya dengan database MySQL.

---

## 👨‍💻 Identitas Pembuat

| Keterangan | Data                                             |
| ---------- | ------------------------------------------------ |
| 👤 Nama    | **Adi Yudiana**                                  |
| 🏫 Sekolah | **SMK Yadika Soreang**                           |
| 📚 Kelas   | **XII PPLG 3**                                   |
| 💻 Jurusan | **PPLG**                                         |
| 🐙 GitHub  | **[@adiyudiana](https://github.com/adiyudiana)** |

---

## ✨ Fitur

Aplikasi ini memiliki beberapa fitur utama:

* ➕ **Create** — Menambahkan data siswa
* 📋 **Read** — Menampilkan data siswa
* ✏️ **Update** — Mengubah data siswa
* 🗑️ **Delete** — Menghapus data siswa
* 💾 Penyimpanan data menggunakan MySQL
* 🔄 Pengelolaan data menggunakan Laravel Eloquent

---

## 🛠️ Teknologi yang Digunakan

| Teknologi               | Keterangan              |
| ----------------------- | ----------------------- |
| 🟦 **Laravel 10**       | Framework PHP           |
| 🐘 **PHP**              | Bahasa pemrograman      |
| 🗄️ **MySQL**           | Database                |
| 🎨 **HTML & CSS**       | Tampilan website        |
| 📄 **Blade**            | Template engine Laravel |
| 🔧 **Git**              | Version control         |
| 🐙 **GitHub**           | Repository project      |
| 🖥️ **Laragon / XAMPP** | Local development       |

---

## 📂 Struktur Project

```text
laravel10-crud/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php
│   │
│   └── Models/
│       └── Student.php
│
├── database/
│   └── migrations/
│
├── resources/
│   └── views/
│       ├── index.blade.php
│       ├── create.blade.php
│       └── edit.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
└── README.md
```

---

## 🚀 Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/adiyudiana/laravel10-crud.git
```

### 2. Masuk ke Folder Project

```bash
cd laravel10-crud
```

### 3. Install Dependency

```bash
composer install
```

### 4. Buat File `.env`

Salin file `.env.example` menjadi `.env`.

```bash
cp .env.example .env
```

Jika menggunakan Windows dan perintah tersebut tidak bekerja, kamu bisa membuat salinannya secara manual.

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

Buka file `.env`, kemudian sesuaikan konfigurasi database:

```env
DB_DATABASE=laravel10_crud
DB_USERNAME=root
DB_PASSWORD=
```

Buat database dengan nama **laravel10_crud** melalui phpMyAdmin atau MySQL.

### 7. Jalankan Migration

```bash
php artisan migrate
```

### 8. Jalankan Server Laravel

```bash
php artisan serve
```

Kemudian buka browser dan akses:

```text
http://127.0.0.1:8000
```

---

## 📖 Konsep yang Dipelajari

Melalui project ini, beberapa konsep Laravel yang dipelajari antara lain:

### 🔹 MVC

Laravel menggunakan konsep **Model-View-Controller (MVC)**.

* **Model** → Mengatur data dan interaksi dengan database.
* **View** → Menampilkan tampilan kepada pengguna.
* **Controller** → Mengatur logika dan menghubungkan Model dengan View.

### 🔹 Routing

Routing digunakan untuk menentukan halaman atau URL yang dapat diakses oleh pengguna.

### 🔹 Migration

Migration digunakan untuk membuat dan mengatur struktur tabel database.

### 🔹 Eloquent ORM

Eloquent digunakan untuk berinteraksi dengan database menggunakan Model Laravel.

### 🔹 Blade

Blade merupakan template engine Laravel yang digunakan untuk membuat tampilan halaman web.

---

## 🎯 Tujuan Project

Project ini bertujuan untuk:

1. Memahami dasar penggunaan Laravel 10.
2. Memahami konsep MVC.
3. Memahami proses CRUD.
4. Menghubungkan Laravel dengan database MySQL.
5. Memahami penggunaan Migration dan Eloquent.
6. Belajar menggunakan Git dan GitHub untuk menyimpan project.

---

## 📌 Status Project

**Status:** ✅ Selesai / Dalam Pengembangan

Project ini dibuat untuk kebutuhan **pembelajaran dan tugas sekolah PPLG**.

---

## 👨‍🎓 Author

**Adi Yudiana**
XII PPLG 3 — PPLG
SMK Yadika Soreang

🐙 GitHub: [@adiyudiana](https://github.com/adiyudiana)

📁 Repository: [laravel10-crud](https://github.com/adiyudiana/laravel10-crud)

---

⭐ **Terima kasih sudah mengunjungi repository ini!**

> Dibuat dengan ❤️ untuk belajar dan berkembang di bidang pemrograman web.
