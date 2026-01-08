<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Diary 💖</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>Diary Gemes 💖</h2>

    <p>
        Hai, <b><?= $_SESSION['user']['nama']; ?></b> 🌸<br>
        Kamu login sebagai <b><?= $_SESSION['user']['role']; ?></b>
    </p>

    <hr style="margin:15px 0;">

    <!-- MENU USER -->
    <a href="/diary_gemes/tulis" class="menu-btn">
        ✍️ Tulis Diary
    </a>

    <a href="/diary_gemes/catatan" class="menu-btn">
    📋 Catatan Aku
</a>


    <!-- MENU ADMIN -->
    <?php if ($_SESSION['user']['role'] == 'admin'): ?>
        <a href="/diary_gemes/admin/diary" class="menu-btn">
            👑 Semua Diary (Admin)
        </a>
    <?php endif; ?>

    <a href="/diary_gemes/logout" class="menu-btn logout">
        🚪 Logout
    </a>
</div>

</body>
</html>
