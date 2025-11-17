# Badmintime – Platform Pemesanan Lapangan Badminton Berbasis Web

2. Deskripsi Singkat
Jelaskan fungsi proyek secara ringkas.

3. Daftar Fitur
Tulis fitur apa saja yang kamu buat.
## ✨ Fitur
- Register & Login (Authentication)
- Role-based Access: User & Admin
- CRUD Laporan Sampah (Admin)
- User membuat laporan
- Status laporan (Pending → Diproses → Selesai)
- Upload gambar laporan
- Session & Middleware untuk proteksi halaman

4. Arsitektur / Tech Stack
Tuliskan teknologi yang digunakan.
## 🔧 Tech Stack
- PHP / Laravel 11
- MySQL
- Bootstrap / Tailwind (opsional)
- Blade Template (jika Laravel)
- MVC Architecture

5. Skema Database (Wajib sesuai PDF)
Buat tabel relasi. Bisa berupa teks atau gambar.
## 🗂️ Skema Database

### Tabel users
- id
- name
- email
- password
- role

### Tabel reports
- id
- user_id (FK)
- category_id (FK)
- title
- description
- image
- status

### Tabel categories
- id
- name

6. Cara Install / Cara Menjalankan
## 🚀 Cara Menjalankan

a. Clone repository
git clone https://github.com/username/nama-projek.git

b. Masuk Folder
cd nama-projek

c. Install Dependencies
composer install

d. Copy env
php artisan key:generate

e. Generate Key
php artisan key:generate

f. Setup database di .env

g. Jalankan migrasi
php artisan migrate

h. Jalankan web
php artisan serve

7. List Endpoint / Route (Wajib sesuai PDF)
## 📌 List Endpoint / Route

### Auth
- GET /login
- POST /login
- GET /register
- POST /register
- GET /logout

### User
- GET /reports
- GET /reports/create
- POST /reports
- GET /reports/{id}

### Admin
- GET /admin/reports
- POST /admin/reports/{id}/update
- DELETE /admin/reports/{id}

8. Screenshots UI
## 🖼️ Screenshots
![Login Page](screenshots/login.png)
![Dashboard Admin](screenshots/dashboard.png)

9. Anggota Kelompok
## 👥 Anggota Kelompok
- Ihsan – Backend
- Teman 1 – Frontend
- Teman 2 – Database

10. Catatan Tambahan / License (Opsional)
Misal ada fitur bonus, atau link demo.
