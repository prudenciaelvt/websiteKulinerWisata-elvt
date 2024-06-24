<!DOCTYPE html>
<html>
<head>
    <title>Detail Wisata</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="detailWisata.css">
</head>
<body>
<?php include_once 'header.php'; ?>

<?php
require_once 'connection.php';
  
if (isset($_GET['nama'])) {
    $nama_wisata = $_GET['nama'];
    $sql = "SELECT * FROM wisata_tbl WHERE nama_wisata = '$nama_wisata'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <div class="detail-card">
            <h2><?php echo $row['nama_wisata']; ?></h2>
            <img src="<?php echo $row['image_url']; ?>" alt="">
            <p class="alamat"><?php echo $row['lokasi']; ?></p>
            <p class="harga_tiket">Harga Tiket: <?php echo $row['harga_tiket']; ?></p>
            <p class="deskripsi"><?php echo $row['deskripsi']; ?></p>
            <p class="garis_lintang">Garis Lintang: <?php echo $row['garis_lintang']; ?></p>
            <p class="garis_bujur">Garis Bujur: <?php echo $row['garis_bujur']; ?></p>
            <hr class="horizontal-line">
            <h2> Info Lokasi</h2>
            <div class="map-container">
                <iframe src="<?php echo $row['google_maps_url']; ?>" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <?php
    } else {
        echo "<p>Wisata tidak ditemukan.</p>";
    }
} else {
    echo "<p>Wisata tidak disediakan.</p>";
}
?>
</body>
</html>
