<?php
@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

$error = "";
$success = "";
$row = [];

if (isset($_POST['search'])) {
    $Id_wisata = mysqli_real_escape_string($conn, $_POST['Id_wisata']);
    $select = "SELECT * FROM wisata_tbl WHERE Id_wisata = '$Id_wisata'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        $error = "ID wisata tidak ditemukan.";
    }
}

if (isset($_POST['update'])) {
    $Id_wisata = mysqli_real_escape_string($conn, $_POST['Id_wisata']);
    $nama_wisata = mysqli_real_escape_string($conn, $_POST['nama_wisata']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $harga_tiket = mysqli_real_escape_string($conn, $_POST['harga_tiket']);
    $garis_lintang = mysqli_real_escape_string($conn, $_POST['garis_lintang']);
    $garis_bujur = mysqli_real_escape_string($conn, $_POST['garis_bujur']);
    $google_maps_url = mysqli_real_escape_string($conn, $_POST['google_maps_url']);

    if (isset($_FILES['image_url']) && $_FILES['image_url']['size'] > 0) {
        $direktori = "img/";
        $file_name = $_FILES['image_url']['name'];
        $temp_file = $_FILES['image_url']['tmp_name'];
        $target_file = $direktori . basename($file_name);

        $file_name_with_path = 'img/' . $file_name;

        if (move_uploaded_file($temp_file, $target_file)) {
            $success = "File berhasil diupload.";
        } else {
            $error = "Gagal mengunggah file.";
        }
    } else {
        $file_name_with_path = $_POST['existing_image_url'];
    }

    $update = "UPDATE wisata_tbl SET nama_wisata='$nama_wisata', lokasi='$lokasi', harga_tiket='$harga_tiket', deskripsi='$deskripsi', garis_lintang='$garis_lintang', garis_bujur='$garis_bujur', google_maps_url='$google_maps_url', image_url='$file_name_with_path' WHERE Id_wisata='$Id_wisata'";

    if (mysqli_query($conn, $update)) {
        $success = "Wisata berhasil diperbarui!";
    } else {
        $error = "Gagal memperbarui wisata: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wisata</title>
    <link rel="stylesheet" href="editWisata.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Cari Wisata</h3>
            <?php
            if (!empty($error)) {
                echo '<span class="error-msg">' . $error . '</span>';
            }
            if (!empty($success)) {
                echo '<span class="success-msg">' . $success . '</span>';
            }
            ?>
            <input type="text" name="Id_wisata" placeholder="Masukkan ID Wisata">
            <input type="submit" name="search" value="Cari Wisata" class="form-btn">
            <a href="admin_page.php" class="back-btn">Kembali</a>
        </form>

        <?php if (!empty($row)) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Edit Wisata</h3>
            <input type="hidden" name="Id_wisata" value="<?php echo $row['Id_wisata']; ?>">
            <input type="hidden" name="existing_image_url" value="<?php echo $row['image_url']; ?>">
            <input type="text" name="nama_wisata" value="<?php echo $row['nama_wisata']; ?>" required placeholder="Masukkan nama wisata">
            <input type="text" name="lokasi" value="<?php echo $row['lokasi']; ?>" required placeholder="Masukkan lokasi">
            <input type="text" name="harga_tiket" value="<?php echo $row['harga_tiket']; ?>" required placeholder="Masukkan harga tiket">
            <textarea name="deskripsi" required placeholder="Masukkan deskripsi wisata"><?php echo $row['deskripsi']; ?></textarea>
            <label for="image_url">Upload Gambar Wisata (biarkan kosong jika tidak ingin mengganti gambar):</label>
            <input type="file" name="image_url" id="image_url">
            <input type="text" name="garis_lintang" value="<?php echo $row['garis_lintang']; ?>" required placeholder="Masukkan garis lintang">
            <input type="text" name="garis_bujur" value="<?php echo $row['garis_bujur']; ?>" required placeholder="Masukkan garis bujur">
            <input type="text" name="google_maps_url" value="<?php echo $row['google_maps_url']; ?>" required placeholder="Masukkan URL Google Maps">
            <input type="submit" name="update" value="Update Data" class="form-btn">
            <a href="admin_page.php" class="back-btn">Kembali</a>
        </form>
        <?php } ?>
    </div>
</body>
</html>
