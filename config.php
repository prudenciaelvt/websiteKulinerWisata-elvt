<?php

$conn = mysqli_connect('localhost','root','','kulinerwisatalamongan');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
