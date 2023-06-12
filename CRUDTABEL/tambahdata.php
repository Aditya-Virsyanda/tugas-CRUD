<?php
    require_once('fungsi/koneksi.php');

    $nisn = '';
    $nama = '';
    $kelas = '';
    $gambar = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
    <link rel="stylesheet" href="http://localhost/CRUDTABEL/login/hal2.css">
</head>
<body>
    <div>
    <form action="fungsi/proses.php" method="POST" enctype="multipart/form-data">
        <fieldset class="totoo">
        <p class="i">MASUKKANN DATA</p>
        <p>
            <label>NISN :</label>
            <input class="tum" type="text" min="10" max="90" name="nisn" />
        </p>
        <p>
            <label>NAMA :</label>
            <input class="tum" type="text" min="10" max="90" name="nama" />
        </p>
        <p>
            <label>KELAS :</label>
            <input class="tum" type="text" min="10" max="90" name="kelas" />
        </p>
        <p>
            <label>GAMBAR :</label>
            <input class="tum" type="file" min="10" max="90" name="gambar" />
        </p>
        <?php
            if (isset($_GET['ganti'])){
        ?>
        <p>
            <button class="submit" type="submit" name="aksi" value="edit">Simpan</button>
        </p>
        <?php
            } else {
            ?>
             <p>
            <button class="submit" type="submit" name="aksi" value="add">Tambah</button>
        </p>
        <?php
            }
            ?>
        </fieldset>
    </form>
    </div>
</body>
</html>