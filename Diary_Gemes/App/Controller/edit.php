<!DOCTYPE html>
<html>
<head>
    <title>Edit Diary ✏️💖</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>Edit Diary ✏️</h2>

    <form method="POST">
        <input type="text" name="judul" value="<?= $data['judul']; ?>" required>

        <textarea name="isi" required
        style="width:100%;padding:12px;border-radius:12px;border:1px solid #ddd;margin:10px 0;"><?= $data['isi']; ?></textarea>

        <button type="submit" name="update">Update Diary 💖</button>
    </form>

    <br>
    <a href="/diary_gemes/catatan">⬅ Kembali</a>
</div>

</body>
</html>
