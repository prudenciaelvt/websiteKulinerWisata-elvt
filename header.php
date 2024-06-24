<?php
  require_once 'connection.php';
  $sql_wisata_tbl = "SELECT * FROM wisata_tbl";
  $all_wisata_tbl = $conn->query($sql_wisata_tbl);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
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
            <li><a href="kuliner.php">Kuliner</a></li>
            <div class="info">
              <p id="informasi">informasi</p>
            </div>
            <div class="dropdown-kategori">
              <ul>
                <li class="a"><a href="FP informasi/map_lamongan.html">map lamongan</a></li>
                <br>
                <li class="b"><a href="FP informasi/panduan_wisata.php">panduan wisata</a></li>
              </ul>
            </div>
          </ul>
        </nav>
      </div>
</header>
</body>
</html>
