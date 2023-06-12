<?php

require_once ('../fungsi/koneksi.php');

$email = $_POST['email'];
$password = md5 ($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

if (mysqli_num_rows($query) != 0){
    $row = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id'] = $row['id'];
    header("location: " . 'http://localhost/CRUDTABEL/dashboard.php');
} else {
    header("location: " . 'http://localhost/CRUDTABEL/index.php');
} 