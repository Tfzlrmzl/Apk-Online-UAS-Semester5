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

<img width="393" height="743" alt="image" src="https://github.com/user-attachments/assets/fc4d6287-f975-469c-bb94-2d21b0422503" />


🗄️ Database

Nama database: diary_db

Tabel users

Field	Keterangan
id	Primary Key
nama	Nama pengguna
email	Email
password	Password
role	admin / user
<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/d4348c7b-13fd-47c3-8e78-6cae6941886b" />


Tabel diary

Field	Keterangan
id	Primary Key
user_id	Relasi user
judul	Judul diary
isi	Isi diary
tanggal	Tanggal
<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/68fff2ff-cf15-42d2-b23c-dc48ccbe07d8" />


🔐 Sistem Login & Role

Tampilan Saat Login

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/156bd27c-334c-4693-8a92-a7fc5e34f460" />


Aplikasi memiliki dua role:

User → menulis, melihat, mengedit, dan menghapus diary pribadi
<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/c8ff122b-a215-4988-b682-58783b37f9b4" />


Admin → melihat seluruh diary dari semua user
<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/d77380e7-bc31-4bf8-8167-7d65ee62c427" />


Session digunakan untuk menyimpan data login dan role pengguna.

📌 Fitur Aplikasi (CRUD)

✍️ Create – Tulis Diary

User dapat menulis diary dengan judul dan isi.

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/ee3dcb78-3d54-49e8-a7c4-708184a972f1" />


📖 Read – Lihat Diary

User dapat melihat daftar diary miliknya.

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/ae4c35d6-cb1e-43e7-97ef-6327bc203988" />


✏️ Update – Edit Diary

User dapat mengedit diary yang sudah dibuat.

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/75b407db-b353-4400-919a-6453938b2295" />


🗑️ Delete – Hapus Diary

User dapat menghapus diary dengan konfirmasi.

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/e0e5a99b-c5ff-4507-a80f-272dfdee1ca2" />


👑 Halaman Admin

Admin memiliki halaman khusus untuk melihat seluruh diary dari semua user.

<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/94bd54d1-55d7-4fee-bb24-38084d9e6190" />


<img width="1374" height="776" alt="image" src="https://github.com/user-attachments/assets/84ea716c-19f5-40d8-843c-63aeb12122c3" />


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
