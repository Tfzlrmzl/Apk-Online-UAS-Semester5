# Apk-Online-UAS-Semester5
Apk_DiaryOnline_-UAS-
Nama : Nadhia Shafira_312410498

Kelas : TI.24.A.5

Matkul : Pemograman Web 1

Dosen Pengampu : Agung Nugroho, S.Kom., M.Kom.

📝 Deskripsi Proyek

Aplikasi Diary Online adalah aplikasi web berbasis PHP dan MySQL yang digunakan untuk mencatat diary harian secara digital. Aplikasi ini dibuat untuk memenuhi tugas Ujian Akhir Semester (UAS) Pemrograman Web dengan menerapkan konsep CRUD, OOP, Session, dan Role Admin & User.

🎯 Tujuan Pembuatan

Menerapkan pemrograman web menggunakan PHP & MySQL

Mengimplementasikan sistem login dengan role admin dan user

Mengimplementasikan fitur CRUD (Create, Read, Update, Delete)

Menggunakan konsep Object Oriented Programming (OOP)

🛠️ Teknologi yang Digunakan

PHP

MySQL

HTML

CSS

Apache (XAMPP)

📂 Struktur Folder

diary_gemes/ ├── app/

│ ├── controllers/

│ │ ├── AuthController.php

│ │ └── DiaryController.php

│ └── views/

│ ├── login.php

│ ├── dashboard.php

│ ├── tulis.php

│ ├── catatan.php

│ ├── edit.php

│ └── admin_diary.php

├── config/

│ └── Database.php

├── public/

│ └── css/

│ └── style.css

├── screenshots/

├── index.php

└── README.md

foto

🗄️ Database

Nama database: diary_db

Tabel users

Field	Keterangan
id	Primary Key
nama	Nama pengguna
email	Email
password	Password
role	admin / user
foto

Tabel diary

Field	Keterangan
id	Primary Key
user_id	Relasi user
judul	Judul diary
isi	Isi diary
tanggal	Tanggal
foto

🔐 Sistem Login & Role

Tampilan Saat Login

foto

Aplikasi memiliki dua role:

User → menulis, melihat, mengedit, dan menghapus diary pribadi
foto

Admin → melihat seluruh diary dari semua user
foto

Session digunakan untuk menyimpan data login dan role pengguna.

📌 Fitur Aplikasi (CRUD)

✍️ Create – Tulis Diary

User dapat menulis diary dengan judul dan isi.

foto

📖 Read – Lihat Diary

User dapat melihat daftar diary miliknya.

foto

✏️ Update – Edit Diary

User dapat mengedit diary yang sudah dibuat.

foto

🗑️ Delete – Hapus Diary

User dapat menghapus diary dengan konfirmasi.

foto

👑 Halaman Admin

Admin memiliki halaman khusus untuk melihat seluruh diary dari semua user.

foto

foto

🧪 Pengujian

Aplikasi diuji menggunakan metode black box.

Fitur	Status
Login	Berhasil
Session	Berjalan
CRUD	Berhasil
Role Admin & User	Berfungsi
Logout	Berhasil
🚀 Cara Menjalankan Aplikasi

Jalankan Apache & MySQL pada XAMPP

Simpan folder project di htdocs

Import database diary_db

Akses melalui browser:

📌 Akun Uji Coba

Admin

Email : admin@gmail.com Password : 12345

User

Email : user@gmail.com Password : 12345 Nama : User Cantik

🧾 Kesimpulan

Aplikasi Diary Online ini telah berhasil menerapkan sistem login dengan role admin dan user serta fitur CRUD menggunakan PHP dan MySQL sesuai dengan ketentuan UAS.

❤️ Penutup

Proyek ini dibuat untuk memenuhi tugas UAS Pemrograman Web dan diharapkan dapat menjadi dasar pengembangan aplikasi web sederhana.
