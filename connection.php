<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "kulinerwisatalamongan";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $db_name);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "";
}
