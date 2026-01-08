<?php
session_start();

require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/DiaryController.php';

// ambil URL dari .htaccess
$url = isset($_GET['url']) ? $_GET['url'] : 'login';

// ================= LOGIN =================
if ($url == 'login') {

    $auth = new AuthController();
    $auth->login();
    require_once 'app/views/login.php';

// ================= DASHBOARD =================
} elseif ($url == 'dashboard') {

    if (!isset($_SESSION['user'])) {
        header("Location: /diary_gemes/login");
        exit;
    }

    require_once 'app/views/dashboard.php';

// ================= TULIS DIARY =================
} elseif ($url == 'tulis') {

    if (!isset($_SESSION['user'])) {
        header("Location: /diary_gemes/login");
        exit;
    }

    $diary = new DiaryController();
    $diary->simpan();

    require_once 'app/views/tulis.php';

// ================= CATATAN USER =================
} elseif ($url == 'catatan') {

    if (!isset($_SESSION['user'])) {
        header("Location: /diary_gemes/login");
        exit;
    }

    $diary = new DiaryController();
    $dataDiary = $diary->getDiaryUser();

    require_once 'app/views/catatan.php';

// ================= EDIT =================
} elseif (strpos($url, 'edit/') === 0) {

    if (!isset($_SESSION['user'])) {
        header("Location: /diary_gemes/login");
        exit;
    }

    $id = str_replace('edit/', '', $url);

    $diary = new DiaryController();
    $result = $diary->getDiaryById($id);
    $data = mysqli_fetch_assoc($result);

    $diary->update($id);

    require_once 'app/views/edit.php';

// ================= HAPUS =================
} elseif (strpos($url, 'hapus/') === 0) {

    if (!isset($_SESSION['user'])) {
        header("Location: /diary_gemes/login");
        exit;
    }

    $id = str_replace('hapus/', '', $url);

    $diary = new DiaryController();
    $diary->hapus($id);

// ================= ADMIN: SEMUA DIARY =================
} elseif ($url == 'admin/diary') {

    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'admin') {
        header("Location: /diary_gemes/dashboard");
        exit;
    }

    $diary = new DiaryController();
    $dataDiary = $diary->getAllDiary();

    require_once 'app/views/admin_diary.php';

// ================= LOGOUT =================
} elseif ($url == 'logout') {

    session_destroy();
    header("Location: /diary_gemes/login");
    exit;

// ================= DEFAULT =================
} else {
    echo "<h2 style='text-align:center;'>Halaman tidak ditemukan 😭</h2>";
}
