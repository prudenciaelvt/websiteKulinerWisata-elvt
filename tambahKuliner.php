<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_name'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: login_form.php");
    exit; // Pastikan kode setelah redirect tidak dijalankan
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Tambah Resep</h2>
    <form action="koneksi.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Resep" required><br>
        <input type="file" name="foto" accept="image/*" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi" required></textarea><br>
        <textarea name="cara_membuat" placeholder="Cara Membuat" required></textarea><br>
        <input type="text" name="url_video" placeholder="URL Video"><br>
        <button type="submit" name="submit">Tambah Resep</button>
    </form>
    <footer>
        <div class="container">
          <p>Hak Cipta &copy; Lamongan 2K24</p>
        </div>
    </footer>
</body>
</html>
