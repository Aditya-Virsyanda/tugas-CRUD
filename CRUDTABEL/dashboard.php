<?php

require_once('fungsi/koneksi.php');
$query="SELECT * FROM data";
$sql=mysqli_query($koneksi, $query);
$no =0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditttt</title>
    <link rel="stylesheet" href="http://localhost/CRUDTABEL/login/hal1.css">
</head>
<body>

    <div class="topbar">
        <h3 class="text-topbar">HALO SELAMAT DATANG</h3>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">

         <!-- NAVIGATION MENUS -->
        <div class="menu">

        <li><a href="http://localhost/CRUDTABEL/dashboard.php">Home</a></li>
        <li><a href="http://localhost/CRUDTABEL/tambahdata.php">Tambah Data</a></li>
        <li><a href="http://localhost/CRUDTABEL/index.php">Exit</a></li>
        </div>
    </ul>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffa500" fill-opacity="2" d="M0,224L24,218.7C48,213,96,203,144,170.7C192,139,240,85,288,64C336,43,384,53,432,69.3C480,85,528,107,576,96C624,85,672,43,720,58.7C768,75,816,149,864,154.7C912,160,960,96,1008,112C1056,128,1104,224,1152,266.7C1200,309,1248,299,1296,282.7C1344,267,1392,245,1416,234.7L1440,224L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
   <h2 class="down">DATA SISWA</h2>
    
    <table border="1" cellpadding="5" width="100%">
        <tr bgcolor="orange">
            <th>NO</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
        <?php 
         while ($result=mysqli_fetch_assoc($sql)){
        ?>
        <tr>
            <th><?php echo ++$no;?></th>
            <td><?php echo $result ['nama'];?></td>
            <td><?php echo $result ['kelas'];?></td>
            <td><a href="edit.php?id=<?php echo $result['id'];?>"><button>Edit</button></a><a href="fungsi/proses.php?hapus=<?php echo $result['id'];?>"><button>Delete</button></a><a href="detail.php?id=<?= $result['id'];?>"><button>Detail</button></a></td>
        </tr>
        <?php
         }
         ?>
       
    </table>

</body>

</html>