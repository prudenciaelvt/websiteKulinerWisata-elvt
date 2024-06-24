<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}

if(isset($_POST['submit'])){
    $Id_wisata = mysqli_real_escape_string($conn, $_POST['Id_wisata']);
    $nama_wisata = mysqli_real_escape_string($conn, $_POST['nama_wisata']);
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $lokasi = mysqli_real_escape_string($conn, $_POST['lokasi']);
    $harga_tiket = mysqli_real_escape_string($conn, $_POST['harga_tiket']);
    $garis_lintang = mysqli_real_escape_string($conn, $_POST['garis_lintang']);
    $garis_bujur = mysqli_real_escape_string($conn, $_POST['garis_bujur']);
    $google_maps_url = mysqli_real_escape_string($conn, $_POST['google_maps_url']);

    if(isset($_FILES['image_url'])) {
        $direktori = "img/";
        $file_name = $_FILES['image_url']['name']; // Mengambil nama file gambar yang diunggah
        $temp_file = $_FILES['image_url']['tmp_name']; // Mengambil nama sementara file gambar yang diunggah
        $target_file = $direktori . basename($file_name); // Menentukan path lengkap untuk menyimpan gambar
        
        $file_name_with_path = 'img/' . $file_name;

        // Memindahkan file gambar yang diunggah ke direktori img
        if(move_uploaded_file($temp_file, $target_file)) {
            // Jika pengunggahan berhasil, tampilkan pesan sukses
            $success = "File berhasil diupload.";
        } else {
            // Jika pengunggahan gagal, tampilkan pesan error
            $error = "Gagal mengunggah file.";
        }
    }

    // Simpan data wisata ke dalam database
    $check_query = "SELECT * FROM wisata_tbl WHERE nama_wisata = '$nama_wisata'";
    $check_result = mysqli_query($conn, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Jika nama wisata sudah ada, tampilkan pesan kesalahan
        $error = "Wisata dengan nama tersebut sudah ada dalam database.";
    } else {
        // Jika nama wisata belum ada, lakukan penyisipan data
        $insert = "INSERT INTO wisata_tbl (Id_wisata, nama_wisata, lokasi, harga_tiket, deskripsi, garis_lintang, garis_bujur, google_maps_url, image_url) 
                VALUES ('$Id_wisata', '$nama_wisata', '$lokasi', '$harga_tiket', '$deskripsi', '$garis_lintang', '$garis_bujur', '$google_maps_url', '$file_name_with_path')";
        
        if(mysqli_query($conn, $insert)){
            $success = "Wisata berhasil ditambahkan!";
        } else {
            $error = "Gagal menambahkan wisata: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wisata</title>
    <link rel="stylesheet" href="tambahWisata.css"> <!-- Pastikan jalur ini sesuai dengan struktur folder Anda -->
</head>
<body>
    <div class="form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Tambah Wisata Baru</h3>
            <?php
            if(isset($error)){
                echo '<span class="error-msg">'.$error.'</span>';
            }
            if(isset($success)){
                echo '<span class="success-msg">'.$success.'</span>';
            }
            ?>
            <input type="text" name="Id_wisata" placeholder="Masukakan ID Wisata (ex. W00 + angka)">
            <input type="text" name="nama_wisata" required placeholder="Masukkan nama wisata">
            <input type="text" name="lokasi" required placeholder="Masukkan lokasi">
            <input type="text" name="harga_tiket" required placeholder="Masukkan harga tiket">
            <textarea name="deskripsi" required placeholder="Masukkan deskripsi wisata"></textarea>
            <label for="image_url">Upload Gambar Wisata:</label>
            <input type="file" name="image_url" id="image_url" required>
            <input type="text" name="garis_lintang" required placeholder="Masukkan garis lintang">
            <input type="text" name="garis_bujur" required placeholder="Masukkan garis bujur">
            <input type="text" name="google_maps_url" required placeholder="Masukkan url google Maps">
            <input type="submit" name="submit" value="Tambah Wisata" class="form-btn">
            <a href="tambahWisata.php" class="back-btn">Tambah Lagi</a>
            <a href="admin_page.php" class="back-btn">Kembali</a>
        </form>
    </div>
</body>
</html>
