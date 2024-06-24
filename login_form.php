<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['username'];
         header('location:admin_page.php');
      } elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['username'];
         header('location:user_page.php');
      }
   } else {
      $error[] = 'Email atau kata sandi salah!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Login</title>
   <link rel="stylesheet" href="login.css">
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Login Sekarang</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="email" name="email" required placeholder="Masukkan email Anda">
      <input type="password" name="password" required placeholder="Masukkan kata sandi Anda">
      <input type="submit" name="submit" value="Login Sekarang" class="form-btn">
      <p>Belum punya akun? <a href="register_form.php">Daftar sekarang</a></p>
   </form>

</div>

</body>
</html>
