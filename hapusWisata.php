<?php
@include 'connection.php';

session_start();

// Pastikan pengguna sudah login sebagai admin
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
    exit; 
}

// Inisialisasi variabel
$error = "";
$success = "";
$nama_wisata = "";
$Id_wisata="";

// Periksa apakah ID wisata telah diterima
if(isset($_GET['id']) && !empty($_GET['id'])){
    $Id_wisata = $_GET['id'];

    // Query untuk mendapatkan informasi wisata berdasarkan ID
    $get_wisata_query = "SELECT * FROM wisata_tbl WHERE Id_wisata = '$Id_wisata'";
    $result = mysqli_query($conn, $get_wisata_query);

    if(mysqli_num_rows($result) > 0) {
        $wisata = mysqli_fetch_assoc($result);
        $nama_wisata = $wisata['nama_wisata'];

        // Jika konfirmasi penghapusan diterima
        if(isset($_GET['confirm'])){
            // Query untuk menghapus data wisata dari tabel berdasarkan ID
            $delete_query = "DELETE FROM wisata_tbl WHERE Id_wisata = '$Id_wisata'";

            // Eksekusi query untuk menghapus data
            if(mysqli_query($conn, $delete_query)){
                $success = "Wisata berhasil dihapus!";
            } else {
                $error = "Gagal menghapus wisata: " . mysqli_error($conn);
            }
        }
    } else {
        $error = "Wisata tidak ditemukan.";
    }
} else {
   /* $error = "ID Wisata tidak valid atau kosong.";*/
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Wisata</title>
    <link rel="stylesheet" href="hapusWisata.css"> <!-- Pastikan jalur ini sesuai dengan struktur folder Anda -->
</head>
<body>
    <div class="container">
        <h2>Hapus Wisata</h2>
        <?php
        if(isset($error)){
            echo '<span class="error-msg">'.$error.'</span>';
        }
        if(isset($success)){
            echo '<span class="success-msg">'.$success.'</span>';
        }
        ?>
        <form action="hapusWisata.php" method="get">
            <input type="text" name="id" value="<?php echo $Id_wisata; ?>" placeholder="Masukkan ID Wisata" required>
            <input type="text" name="nama_wisata" value="<?php echo $nama_wisata; ?>" placeholder="Masukkan Nama Wisata" required>
            <button type="submit" name="confirm" class="confirm-btn">Hapus</button>
            <a href="admin_page.php" class="cancel-btn">Kembali</a>
        </form>
    </div>
</body>
</html>
