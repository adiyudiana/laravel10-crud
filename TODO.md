# TODO Checklist - Perbaikan Code ✅

## Step 1: Fix Migration Files ✅
- [x] Fix `2026_07_21_031749_creat_students_table.php` - tambah kolom name, email, class, phone, address
- [x] Fix `2026_07_21_034150_create_students_table.php` - jadikan migration kosong (no-op)

## Step 2: Fix Controllers ✅
- [x] Fix `app/Http/Controllers/Controller.php` - jadi base Controller class Laravel
- [x] Buat baru `app/Http/Controllers/StudentController.php` - CRUD lengkap (index, create, store, edit, update, destroy)

## Step 3: Fix Routes ✅
- [x] Fix `routes/web.php` - pakai resource route StudentController

## Step 4: Fix Seeders ✅
- [x] Fix `database/seeders/StudentSeeder.php` - typo BD → DB, sesuaikan kolom
- [x] Fix `database/seeders/DatabaseSeeder.php` - panggil StudentSeeder

## Step 5: Fix Views ✅
- [x] Fix `resources/views/index.blade.php` - sesuaikan variabel jadi $students, tambah link route
- [x] Buat baru `resources/views/create.blade.php` - form tambah data siswa
- [x] Fix `resources/views/edit.blade.php` - form edit data siswa
- [x] Hapus `resources/views/creat.blade.php` (typo file)

## Step 6: Add Model ✅
- [x] Buat baru `app/Models/Student.php` - Model Eloquent

## Step 7: Testing ✅
- [x] `composer dump-autoload` - berhasil
- [x] `php artisan migrate:fresh --seed` - berhasil (migrasi + seeder sukses)
- [x] `php artisan serve` - server berjalan di http://127.0.0.1:8000

