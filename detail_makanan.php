<!DOCTYPE html>
<html>
<head>
  <title>Detail Makanan</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!-- Tambahan font jika diperlukan -->
  <style>
    /* CSS tambahan sesuai kebutuhan */
  </style>
</head>
<body>
  <header>
    <!-- Header sesuai kebutuhan -->
  </header>

  <section id="detail-content">
    <div class="container">
      <?php
      // Koneksi ke database
      include 'koneksi.php';

      // Ambil ID makanan dari URL
      $id = $_GET['id'];

      // Buat query SQL untuk mengambil informasi makanan berdasarkan ID
      $sql = "SELECT * FROM resep WHERE id = $id";
      $result = $conn->query($sql);

      error_reporting(E_ALL);
      ini_set('display_errors', 1);
      
      if ($result->num_rows > 0) {
          // Output data setiap baris
          while($row = $result->fetch_assoc()) {
              echo "<h2>" . $row["nama"] . "</h2>";
              // Tampilkan gambar
              echo '<img src="' . $row["url_foto"] . '" alt="' . $row["nama"] . '" class="makanan">';
              echo "<p>" . $row["deskripsi"] . "</p>";
              echo "<h3>Cara Membuat:</h3>";
              
              // Pisahkan deskripsi cara membuat
              $langkah = explode("\n", $row["cara_membuat"]);
              foreach ($langkah as $step) {
                  // Jika ada tanda ":", artinya merupakan bagian bahan
                  if (strpos($step, ":") !== false) {
                      echo "<h4>$step</h4>"; // Bagian bahan sebagai judul
                      echo "<ul>"; // Mulai daftar bahan
                  } else {
                      // Jika bukan bagian bahan, tampilkan sebagai paragraf
                      echo "<p>$step</p>";
                  }
              }
              echo "</ul>"; // Selesai daftar bahan
              // Tambahkan video YouTube dengan fitur autoplay
              echo '<iframe width="560" height="315" src="' . $row["url_video"] . '?autoplay=1" frameborder="0" allowfullscreen></iframe>';
          }
      } else {
          echo "Makanan tidak ditemukan";
      }
      $conn->close();
      ?>
    </div>
  </section>
  <footer>
      <div class="container">
        <p>Hak Cipta &copy; Lamongan 2K24</p>
      </div>
    </footer>
</body>
</html>
