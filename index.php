<?php
require_once 'connection.php';

// Fetch data from sejarah_tbl
$sql_sejarah_tbl = "SELECT * FROM sejarah_tbl";
$result = $conn->query($sql_sejarah_tbl);

// Check if the query was successful and data was fetched
if ($result && $result->num_rows > 0) {
    // Fetch the first row from the result set
    $row = $result->fetch_assoc();

    // Check if the 'deskripsi' key exists in the fetched row
    if (isset($row['deskripsi'])) {
        $deskripsi = $row['deskripsi'];
    } else {
        // Handle case where 'deskripsi' key is not found
        $deskripsi = ''; // Set default value
    }
} else {
    // Handle query failure or empty result set
    $row = []; // Set empty array if no data is fetched
    $deskripsi = ''; // Set default value for 'deskripsi'
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Lamongan Wonderful</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
    <script src="script.js"></script>
  </head>

  <body>
    <header>
      <div class="container">
        <img src="img/logo_lamongan.png">
        <nav>
          <div class="menu-toggle" onclick="toggleMenu()"></div>
          <ul class="navbar" id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="wisata.php">Wisata</a></li>
            <li><a href="kuliner.html">Kuliner</a></li>
          </ul>
          <div class="info">
            <p id="informasi">informasi</p>
          </div>
          <div class="dropdown-kategori">
            <ul>
              <li class="a"><a href="FP informasi/map_lamongan.html">map lamongan</a></li>
              <li class="b"><a href="FP informasi/panduan_wisata.php">panduan wisata</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="akun">
        <button class="logo-button" onclick="location.href='pengguna.php'"></button>
        <div class="dropdown-kategori">
          <ul>
            <li class="b"><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>


    </header>

    <section id="hero">
      <div class="container">
        <h2>L A M O N G A N</h2>
        <p>Selamat Datang di Lamongan, Negeri Cerita yang Menawan!</p>
        <a href="#" class="btn">Explore Now </a>
      </div>
    </section>

    <section id="tentangLamongan">
      <h2>Tentang Lamongan</h1>
      <p>Beberapa contoh wisata dan kuliner yang menjadi ikonik dari Kabupaten Lamongan</p>
    </section>
    
    <div class="flex-container">
        <section id="wisata">
            <div class="container">
                <div class="ttg-item">
                    <h2>Wisata di Lamongan</h2>
                    <img src="img/wbl.jpg" alt="Destinasi 1" />
                    <h3>Wisata Bahari Lamongan</h3>
                    <p>WBL merupakan wisata bahari yang terletak di Kecamatan Paciran, Kabupaten Lamongan, Jawa Timur. WBL sangat rekomendasi untuk wisatawan yang ingin menikmati wahana, wisata keluarga, dan pantai dalam satu kawasan dengan fasilitas yang memadai.</p>
                    <a href="wisata.php" class="btn-2">Selengkapnya</a>
                </div>
            </div>
        </section>

        <section id="kuliner">
            <div class="container">
                <div class="ttg-item">
                    <h2>Kuliner di Lamongan</h2>
                    <img src="img/soto.jpg" alt="Destinasi 2" />
                    <h3>Soto Lamongan</h3>
                    <p>Soto lamongan dikenal sebagai salah satu soto paling gurih lantaran memiliki ciri khas taburan koya udang yang tidak dimiliki oleh soto lainnya. Bisa jadi cita rasa seperti ini yang menjadikan soto lamongan disukai banyak orang di Indonesia.</p>
                    <a href="kuliner.php" class="btn-2">Selengkapnya</a>
                </div>
            </div>
        </section>
    </div>

    <section id="ttg-2">
        <h2><?php echo $row['judul']; ?></h2>
        <div class="ttg-item1">
            <img src="img/sejarah.jpg" alt="Sejarah" />
            <h4><?php echo $row['image_name']; ?></h4>
            <p class="deskripsi"><?php echo $row['deskripsi']; ?></p>
        </div>
    </section>


    <script>
      function toggleMenu() {
        var navbar = document.getElementById("navbar");
        navbar.classList.toggle("active");
      }
    </script>
    <script>
      function toggleReadMore() {
        var moreText = document.getElementById("more-text");
        var readMoreBtn = document.getElementById("read-more-btn");

        if (moreText.style.display === "none") {
          moreText.style.display = "inline";
          readMoreBtn.innerText = "Baca lebih sedikit";
        } else {
          moreText.style.display = "none";
          readMoreBtn.innerText = "Baca selengkapnya";
        }
      }
    </script>
    <footer>
      <div class="container">
        <p>Hak Cipta &copy; Lamongan 2K24</p>
      </div>
    </footer>
  </body>
</html>
