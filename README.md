# Apk-Online-UAS-Semester5
Apk_DiaryOnline_-UAS-
Nama : Muhammad Tafzil Rimzal_312310529

Kelas : TI.24.A.4

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

<img width="478" height="745" alt="image" src="https://github.com/user-attachments/assets/b8f57346-cc52-46f7-9c37-2bcda561dba1" />



🗄️ Database

Nama database: diary_db

Tabel users

Field	Keterangan
id	Primary Key
nama	Nama pengguna
email	Email
password	Password
role	admin / user
<img width="1013" height="521" alt="image" src="https://github.com/user-attachments/assets/fc5080dc-3150-49e3-8234-f2da9d067d5c" />



Tabel diary

Field	Keterangan
id	Primary Key
user_id	Relasi user
judul	Judul diary
isi	Isi diary
tanggal	Tanggal
<img width="1016" height="499" alt="image" src="https://github.com/user-attachments/assets/4cc3d8f4-7e86-414e-b413-9723a91e772e" />



🔐 Sistem Login & Role

Tampilan Saat Login

<img width="1013" height="503" alt="image" src="https://github.com/user-attachments/assets/8a37da9d-f02f-4457-b13a-38d7616f5bde" />



Aplikasi memiliki dua role:

User → menulis, melihat, mengedit, dan menghapus diary pribadi
<img width="721" height="422" alt="image" src="https://github.com/user-attachments/assets/bba1b04f-bf8f-4d86-9dcd-f945f9856bad" />



Admin → melihat seluruh diary dari semua user



Session digunakan untuk menyimpan data login dan role pengguna.

📌 Fitur Aplikasi (CRUD)

✍️ Create – Tulis Diary

User dapat menulis diary dengan judul dan isi.

<img width="1014" height="497" alt="image" src="https://github.com/user-attachments/assets/60e819c5-ad94-43bf-a533-6f087d82824f" />



📖 Read – Lihat Diary

User dapat melihat daftar diary miliknya.

<img width="644" height="479" alt="image" src="https://github.com/user-attachments/assets/15d2b21e-a9e5-442b-8642-0d5d5054b35a" />



✏️ Update – Edit Diary

User dapat mengedit diary yang sudah dibuat.

<img width="1017" height="506" alt="image" src="https://github.com/user-attachments/assets/a8a0cdc7-9959-4528-b1f0-217855cf7df6" />



🗑️ Delete – Hapus Diary

User dapat menghapus diary dengan konfirmasi.

<img width="1006" height="481" alt="image" src="https://github.com/user-attachments/assets/8d5e776b-b12c-417e-a612-17f4bc2b03d7" />



👑 Halaman Admin

Admin memiliki halaman khusus untuk melihat seluruh diary dari semua user.

<img width="973" height="471" alt="image" src="https://github.com/user-attachments/assets/aad6400b-14e6-4f5f-853d-b50aa5df3b54" />



<img width="1004" height="508" alt="image" src="https://github.com/user-attachments/assets/8590cd6d-5ac0-4afe-ac5b-b7e23e281e73" />



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
