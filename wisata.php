<?php
  require_once 'connection.php';

  $sql = "SELECT * FROM wisata_tbl";
  $all_wisata_tbl = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Lamongan Wonderful</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="content.css" />
    <script src="script.js"></script>
  </head>
  <body>
  <header>
      <div class="container">
        <img src="img/logo_lamongan.png" />
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
    </header>

    <h1>WISATA LAMONGAN</h1> 
    
    <main>
    
      <?php include 'content.php';?>
    </main>

    <footer>
      <div class="container">
        <p>Hak Cipta &copy; Lamongan 2K24</p>
      </div>
    </footer>
</body>

</html>