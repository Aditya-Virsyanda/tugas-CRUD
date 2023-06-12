<?php
include 'koneksi.php';

var_dump($_POST);
$id = $_POST['id'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$sql = "UPDATE data SET nisn='$nisn', nama='$nama', kelas='$kelas' WHERE id=$id";

if (mysqli_query($koneksi, $sql)) {
    header('Location: http://localhost/CRUDTABEL/dashboard.php');
} else {
  echo "Error updating record: " . mysqli_error($koneksi);
}