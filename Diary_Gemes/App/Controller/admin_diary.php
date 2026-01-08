<!DOCTYPE html>
<html>
<head>
    <title>Admin - Semua Diary 👑</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>👑 Semua Diary</h2>
    <p>Halaman khusus admin 💼</p>

    <?php if (mysqli_num_rows($dataDiary) == 0): ?>
        <p>Belum ada diary 😭</p>
    <?php endif; ?>

    <?php while ($row = mysqli_fetch_assoc($dataDiary)): ?>
        <div style="
            text-align:left;
            margin:15px 0;
            padding:15px;
            border-radius:15px;
            background:#ffffff;
            box-shadow:0 5px 10px rgba(0,0,0,0.05);
        ">
            <h4><?= htmlspecialchars($row['judul']); ?></h4>
            <small>
                oleh <b><?= htmlspecialchars($row['nama']); ?></b> |
                <?= $row['tanggal']; ?>
            </small>

            <p><?= nl2br(htmlspecialchars($row['isi'])); ?></p>
        </div>
    <?php endwhile; ?>

    <br>
    <a href="/diary_gemes/dashboard">⬅ Kembali ke Dashboard</a>
</div>

</body>
</html>
