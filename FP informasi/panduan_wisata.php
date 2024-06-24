<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "panduan_wisata";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  die("tidak bisa terkoneksi");
}

$waktu = "";
$kegiatan = "";
$tempat = "";
$sukses = "";
$error = "";

if (isset($_GET['op'])) { // untuk update
  $op = $_GET['op'];
} else {
  $op = "";
}

if ($op == 'delete') { //untuk delete
  $id = $_GET['id'];
  $sql1 = "delete from rundown where id = '$id'";
  $q1 = mysqli_query($koneksi, $sql1);
  if ($q1) {
    $sukses = "Berhasil hapus data";
  } else {
    $error = "Gagal menghapus data";
  }
}

if ($op == 'update') {
  $id = $_GET['id'];
  $sql1 = "select * from rundown where id = '$id'";
  $q1 = mysqli_query($koneksi, $sql1);
  $r1 = mysqli_fetch_array($q1);
  $waktu = $r1['waktu'];
  $kegiatan = $r1['kegiatan'];
  $tempat = $r1['tempat'];

  if ($waktu == '') {
    $error = "Data tidak ada";
  }
}

if (isset($_POST['simpan'])) { //untuk create
  $waktu = $_POST['waktu'];
  $kegiatan = $_POST['kegiatan'];
  $tempat = $_POST['tempat'];

  if ($waktu) {
    if ($op == 'update') { //untuk update
      $sql1 = "update rundown set waktu = '$waktu', kegiatan = '$kegiatan', tempat = '$tempat' where id = '$id'";
      $q1 = mysqli_query($koneksi, $sql1);
      if ($q1) {
        $sukses = "Data berhasil diupdate";
      } else {
        $error = "Data gagal diupdate";
      }
    } else { //untuk insert
      $sql1 = "insert into rundown(waktu,kegiatan,tempat) values ('$waktu','$kegiatan','$tempat')";
      $q1 = mysqli_query($koneksi, $sql1);
      if ($q1) {
        $sukses = "Berhasil memasukan data baru";
      } else {
        $error = "Gagal memasukan data";
      }
    }
  } else {
    $error = "Silahkan masukan data";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <title>Informasi</title>
  <link rel="stylesheet" type="text/css" href="style_pw.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .mx-auto {
      width: 800px
    }

    .card {
      margin-top: 10px
    }

    * {
      font-family: 'Times New Roman';
    }
  </style>

</head>

<body>
  <header style="max-width:2000px; height:85px">
    <div class="container" style="margin:-12px 0px 0px 155px">
    <img style="margin-left:-167px; margin-bottom:-38px; width: 12%; height: 12%;" src="img/logo_lamongan.png" />
      <nav>
        <div class="menu-toggle" onclick="toggleMenu()"></div>
        <ul class="navbar" id="navbar" style="margin-left:13px">
          <li style="margin-right:3px"><a href="../index.php">Home</a></li>
          <li style="margin-right:3px"><a href="../wisata.php">Wisata</a></li>
          <li><a href="../kuliner.html">Kuliner</a></li>
        </ul>
        <div class="info">
          <p style="position:absolute; margin:-48px 0px 0px 292px">informasi</p>
        </div>
        <div class="dropdown-kategori" style="width:200px">
          <ul style="margin:-30px 0px 0px -90px">
            <li class="a"><a href="map_lamongan.html">map lamongan</a></li>
            <li class="b"><a href="panduan_wisata.php">panduan wisata</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <div class="main">
    <h1 style="text-align:center; font-weight:bold; font-size:32px">PANDUAN WISATA</h1>
  </div>
  <!-- menampilkan data -->
  <div class="card" style="margin-top:20px">
    <div class="card-header text-white bg-secondary">
      Rundown Kegiatan
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Waktu/Tanggal</th>
            <th scope="col">Kegiatan</th>
            <th scope="col">Tempat</th>
            <th scope="col">Aksi</th>
          </tr>
        <tbody>
          <?php
          $sql2 = "select * from rundown order by id asc";
          $q2 = mysqli_query($koneksi, $sql2);
          $urut = 1;
          while ($r2 = mysqli_fetch_array($q2)) {
            $id = $r2['id'];
            $waktu = $r2['waktu'];
            $kegiatan = $r2['kegiatan'];
            $tempat = $r2['tempat'];

            ?>
            <tr>
              <th scope="row">
                <?php echo $urut++ ?>
              </th>
              <td scope="row">
                <?php echo $waktu ?>
              </td>
              <td scope="row">
                <?php echo $kegiatan ?>
              </td>
              <td scope="row">
                <?php echo $tempat ?>
              </td>
              <td scope="row">
                <a href="create_update.php?op=update&id=<?php echo $id ?>"><button type="button"
                    class="btn btn-warning">Update</button></a>
                <a href="panduan_wisata.php?op=delete&id=<?php echo $id ?>"
                  onclick="return confirm('Apakah anda yakin untuk menghapus data?')"><button type="button"
                    class="btn btn-danger">Delete</button></a>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
        </thead>
      </table>
    </div>
  </div>

  <div class="create" style="margin-top:10px; margin-left:10px">
    <a href="create_update.php" class="btn btn-success">Create</a>
  </div>

  <div style=" margin-top:70px; background-image:url(img/svg.png); background-size:contain; max-height:1200px">
    <div class="wrapper" style="display:flex; gap:50px; justify-content:center; padding-top:140px">
      <div class="find">
        <h3 style="margin-bottom:0px; margin-top:35px; font-weight:bold; font-size:20px">FIND US</h3>
        <br />

        <p style="margin-top:-10px">Jl. Rungkut Madya No.1, Gn. Anyar, Kec. Gn. Anyar, <br />Surabaya, Jawa Timur 60294
        </p>
        <br />

        <div class="item">
          <div class="item_a">
            <i class="fa-brands fa-facebook" style="margin-top:-22px"></i>
            <p style="margin-top:-26px;">lamongan megilan</p>
          </div>

          <div class="item_b">
            <i class="fa-brands fa-instagram" style="margin-top:-22px"></i>
            <p style="margin-top:-26px;">lamoganmegilan</p>
          </div>
        </div>
      </div>

      <div class="contact">
        <h3 style="margin-bottom:0px; margin-top:35px; font-weight:bold; font-size:20px">CONTACT US</h3>
        <br />

        <p style="margin-top:-10px">
          Dinas Kebudayaan, Kepemudaan dan Olahraga <br />
          serta Pariwisata Kabupaten Lamongan
        </p>
        <br />

        <div class="conten">
          <div class="conten_a">
            <i class="fa-solid fa-location-dot" style="margin-top:-22px"></i>
            <p style="margin-top:-26px;">
              Jl. Sunan Giri, Tumenggungbaru, Tumenggungan, <br />
              Kec. Lamongan, Kabupaten Lamongan, Jawa Timur 62214
            </p>
          </div>
          <div class="conten_b">
            <i class="fa-solid fa-phone" style="margin-top:-22px;"></i>
            <p style="margin-top:-26px;">08573332196</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer style="height:72px">
    <div class="container">
      <p>Hak Cipta &copy; Lamongan 2K23</p>
    </div>
  </footer>
</body>

</html>