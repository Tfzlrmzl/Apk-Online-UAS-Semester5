<!DOCTYPE html>
<html>
<head>
    <title>Catatan Aku 📖💖</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>📖 Catatan Aku</h2>

    <?php if (!isset($dataDiary) || mysqli_num_rows($dataDiary) == 0): ?>
        <p style="text-align:center;">Belum ada diary 😭</p>
    <?php else: ?>

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
                <small><?= $row['tanggal']; ?></small>

                <p><?= nl2br(htmlspecialchars($row['isi'])); ?></p>

                <div style="margin-top:10px;">
                    <a href="/diary_gemes/edit/<?= $row['id']; ?>">✏️ Edit</a> |
                    <a href="/diary_gemes/hapus/<?= $row['id']; ?>"
                       onclick="return confirm('Yakin mau hapus diary ini? 😭💔')"
                       style="color:#ff5d8f;">
                       🗑 Hapus
                    </a>
                </div>
            </div>
        <?php endwhile; ?>

    <?php endif; ?>

    <br>
    <a href="/diary_gemes/dashboard" style="text-decoration:none;">⬅ Kembali ke Dashboard</a>
</div>

</body>
</html>
