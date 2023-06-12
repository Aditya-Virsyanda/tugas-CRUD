<?php

include 'fungsi/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM data WHERE id=$id";
$result = $result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
    <link rel="stylesheet" href="http://localhost/CRUDTABEL/login/hal2.css">
</head>
<body>
    <div>
    <form action="fungsi/update.php" method="POST">
        <fieldset class="totoo">
            <input type="number" name="id" value="<?=$id?>" hidden>
        <p class="i">EDIT DATA SIMPANAN</p>
        <p>
            <label>NISN :</label>
            <input class="tum" type="text" min="10" max="90" name="nisn" value="<?= $data['nisn']?>"/>
        </p>
        <p>
            <label>NAMA :</label>
            <input class="tum" type="text" min="10" max="90" name="nama" value="<?= $data['nama']?>"/>
        </p>
        <p>
            <label>KELAS :</label>
            <input class="tum" type="text" min="10" max="90" name="kelas" value="<?= $data['kelas']?>"/>
        </p>
        <p>
            <label>GAMBAR :</label>
            <input class="tum" type="file" min="10" max="90" name="gambar"value="<?= $data['gambar']?>" />
        </p>
        <p>
            <button class="submit" type="submit" name="aksi" value="edit">Simpan</button>
        </p>
        </fieldset>
    </form>
    </div>
</body>
</html>