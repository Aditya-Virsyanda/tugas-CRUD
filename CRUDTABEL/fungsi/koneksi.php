<?php

$server = "localhost";
$email = "root";
$password = "";
$dbname = "CRUDTABEL";

$koneksi = mysqli_connect($server, $email, $password, $dbname) or die ("koneksi gagal");