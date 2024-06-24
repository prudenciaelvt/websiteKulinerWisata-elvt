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

if ($op == 'delete') {
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rundown Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- memasukan data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                    <?php
                    header("refresh:2;url=panduan_wisata.php"); //2 detik
                }
                ?>
                <?php
                if ($sukses) {
                    ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <?php
                    header("refresh:2;url=panduan_wisata.php"); //2 detik
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="waktu" class="col-sm-2 col-form-label">Waktu/Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="waktu" name="waktu"
                                value="<?php echo $waktu ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kegiatan" class="col-sm-2 col-form-label">Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                value="<?php echo $kegiatan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat" name="tempat"
                                value="<?php echo $tempat ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>