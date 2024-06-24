<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kuliner_pemweb";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];
    $cara_membuat = $_POST["cara_membuat"];
    $url_video = $_POST["url_video"];

    // Tangani unggahan file
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check jika file gambar valid atau tidak
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check jika file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check ukuran file
    if ($_FILES["foto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Izinkan beberapa format file
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check jika $uploadOk bernilai 0
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // Jika semua kondisi terpenuhi, coba upload file
    } else {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES["foto"]["name"]). " has been uploaded.";

            // Simpan informasi resep beserta URL file gambar ke database
            $sql = "INSERT INTO resep (nama, url_foto, deskripsi, cara_membuat, url_video) VALUES ('$nama', '$target_file', '$deskripsi', '$cara_membuat', '$url_video')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close();
}
