<!DOCTYPE html>
<html>
<head>
    <title>Diary Gemes 📔💖</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>Diary Gemes 📔💖</h2>
    <p>Haiii~ selamat datang di diary kamu 🌸</p>

    <form method="POST" action="/diary_gemes/diary">
        <input type="text" name="judul" placeholder="Judul diary ✨" required>

        <textarea name="isi" placeholder="Isi diary kamu di sini 💕" required
        style="width:100%;padding:12px;border-radius:12px;border:1px solid #ddd;margin:10px 0;"></textarea>

        <button type="submit" name="simpan">Simpan Diary 💖</button>
    </form>

    <hr style="margin:25px 0;">

    <h3>📋 Catatan Kamu</h3>

    <?php if (mysqli_num_rows($dataDiary) == 0): ?>
        <p>Belum ada diary 💭</p>
    <?php endif; ?>

    <?php while ($row = mysqli_fetch_assoc($dataDiary)): ?>
        <div style="
            background:#ffffffcc;
            padding:15px;
            border-radius:15px;
            margin-bottom:12px;
            text-align:left;
        ">
            <strong><?= $row['judul']; ?></strong><br>
            <small><?= $row['tanggal']; ?></small>

            <p><?= nl2br($row['isi']); ?></p>

            <a href="/diary_gemes/hapus/<?= $row['id']; ?>"
               onclick="return confirm('Yakin mau hapus diary ini? 😭');"
               style="color:#ef4444;text-decoration:none;">
                🗑️ Hapus
            </a>
        </div>
    <?php endwhile; ?>

    <br>

    <a href="/diary_gemes/logout" style="
        display:inline-block;
        text-decoration:none;
        padding:10px 20px;
        border-radius:12px;
        background:linear-gradient(135deg,#f9a8d4,#86efac);
        color:white;
    ">
        Logout 🚪
    </a>
</div>

</body>
</html>
