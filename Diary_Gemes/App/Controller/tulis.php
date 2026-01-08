<!DOCTYPE html>
<html>
<head>
    <title>Tulis Diary ✍️💖</title>
    <link rel="stylesheet" href="/diary_gemes/public/css/style.css">
</head>
<body>

<div class="card">
    <h2>✍️ Tulis Diary</h2>
    <p>Tuliskan ceritamu hari ini 🌸</p>

    <form method="POST" action="/diary_gemes/tulis">
        <input type="text" name="judul" placeholder="Judul diary ✨" required>

        <textarea name="isi" placeholder="Isi diary kamu di sini 💕" required
        style="width:100%;padding:12px;border-radius:14px;border:1px solid #ddd;margin:10px 0;"></textarea>

        <button type="submit" name="simpan">Simpan Diary 💖</button>
    </form>

    <br>

    <a href="/diary_gemes/dashboard" class="menu-btn">
        🔙 Kembali ke Dashboard
    </a>
</div>

</body>
</html>
