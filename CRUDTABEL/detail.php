<?php

    require_once('fungsi/koneksi.php');
    $id = $_GET['id'];

    $query="SELECT * FROM data WHERE id = '$id'";
    $sql=mysqli_query($koneksi, $query);
    $data = mysqli_fetch_object($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>DETAIL DATA</h1>
        <p>
            NISN :
        </p>
        <p>
            <?=$data->nisn?>
        </p>
        <p>
            Nama :
        </p>
        <p>
            <?=$data->nama?>
        </p>
        <p>
            Kelas :
        </p>
        <p>
            <?=$data->kelas?>
        </p>
        <p>
            FOTO SISWA :
        </p>
        <p>
        <img src="img/<?= $data->gambar?>" style="width: 100px;">
        </p>
        
        
    </div>
</body>
</html>