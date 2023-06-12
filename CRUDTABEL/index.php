<?php

require_once('fungsi/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditttt</title>
    <link rel="stylesheet" href="http://localhost/CRUDTABEL/login/style.css">
</head>
<body>
    <div class="topbar">
        <h3 class="text-topbar">Silahkan Login</h3>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ff5500" fill-opacity="1.2" d="M0,160L60,144C120,128,240,96,360,112C480,128,600,192,720,208C840,224,960,192,1080,170.7C1200,149,1320,139,1380,133.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">
                    Silahkan Login
                </div>
                <div class="card-body">
                    <form class="form-login" method="POST" action="http://localhost/CRUDTABEL/proses/login.php">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-input" name="email">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-input" name="password">
                        <button type="submit" class="btn btn-login">LOGIN</button>
                    </form>
                    <p style="text-align: center;">Belum punya akun? <span><a href="#">Daftar disini!!</a></span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>