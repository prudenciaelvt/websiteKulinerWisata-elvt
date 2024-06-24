<?php

@include 'connection.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="login.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="index.php" class="btn">Telusuri Kuliner dan Wisata</a>
      <a href="tambahWisata.php" class="btn">Tambah Wisata</a>
      <a href="hapusWisata.php" class="btn">Hapus Wisata</a>
      <a href="editWisata.php" class="btn">Edit Wisata</a>
      <a href="logout.php" class="btn">logout</a>

   </div>

   

</div>

</body>
</html>