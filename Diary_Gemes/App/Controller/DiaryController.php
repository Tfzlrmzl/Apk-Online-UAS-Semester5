<?php

require_once 'config/Database.php';

class DiaryController extends Database
{
    // ================= SIMPAN =================
    public function simpan()
    {
        if (isset($_POST['simpan'])) {

            $judul   = $_POST['judul'];
            $isi     = $_POST['isi'];
            $tanggal = date('Y-m-d');
            $user_id = $_SESSION['user']['id'];

            mysqli_query(
                $this->conn,
                "INSERT INTO diary (user_id, judul, isi, tanggal)
                 VALUES ('$user_id', '$judul', '$isi', '$tanggal')"
            );

            header("Location: /diary_gemes/catatan");
            exit;
        }
    }

    // ================= AMBIL DIARY USER =================
    public function getDiaryUser()
    {
        $user_id = $_SESSION['user']['id'];

        return mysqli_query(
            $this->conn,
            "SELECT * FROM diary
             WHERE user_id = '$user_id'
             ORDER BY id DESC"
        );
    }

    // ================= AMBIL SEMUA DIARY (ADMIN) =================
    public function getAllDiary()
    {
        return mysqli_query(
            $this->conn,
            "SELECT diary.*, users.nama
             FROM diary
             JOIN users ON diary.user_id = users.id
             ORDER BY diary.id DESC"
        );
    }

    // ================= AMBIL BY ID =================
    public function getDiaryById($id)
    {
        return mysqli_query(
            $this->conn,
            "SELECT * FROM diary WHERE id = '$id'"
        );
    }

    // ================= UPDATE =================
    public function update($id)
    {
        if (isset($_POST['update'])) {

            $judul = $_POST['judul'];
            $isi   = $_POST['isi'];

            mysqli_query(
                $this->conn,
                "UPDATE diary SET judul='$judul', isi='$isi' WHERE id='$id'"
            );

            header("Location: /diary_gemes/catatan");
            exit;
        }
    }

    // ================= HAPUS =================
    public function hapus($id)
    {
        mysqli_query(
            $this->conn,
            "DELETE FROM diary WHERE id = '$id'"
        );

        header("Location: /diary_gemes/catatan");
        exit;
    }
}
