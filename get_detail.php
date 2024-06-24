<?php
include 'koneksi.php';

// Ambil ID dari parameter GET
$id = $_GET['id'];

// Query untuk mengambil detail makanan berdasarkan ID
$sql = "SELECT * FROM resep WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  echo "<h1 class='food-name'>" . $row['nama'] . "</h1>";
  echo "<img src='" . $row['url_foto'] . "' alt='gambar " . $row['nama'] . "'>";
  echo "<p class='food-info'>" . $row['deskripsi'] . "</p>";
} else {
  echo "Data tidak ditemukan";
}
$conn->close();

