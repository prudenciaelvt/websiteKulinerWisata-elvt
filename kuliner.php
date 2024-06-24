<?php
include 'koneksi.php';

// Mengambil data dari tabel resep
$sql = "SELECT nama, url_foto, deskripsi FROM resep";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lamongan Wonderful</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
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

    <section id="page-tittle">
        <div class="container">
            <h1>KULINER KHAS LAMONGAN</h1>
        </div>
    </section>

    <section id="back">
        <div class="container">
            <?php
            if ($result->num_rows > 0) {
                // Output data dari setiap row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<img src="' . $row["url_foto"] . '" alt="gambar ' . $row["nama"] . '">';
                    echo '<div class="card-body">';
                    echo '<h1 class="food-name">' . $row["nama"] . '</h1>';
                    echo '<p class="food-info">' . $row["deskripsi"] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>Hak Cipta &copy; Lamongan 2K24</p>
        </div>
    </footer>
</body>
</html>
