<?php
//halaman ini bisa diakses jika session npm = 2226250065

session_start();
if (isset ($_SESSION['npm']) and $_SESSION['npm'] == 2226250065){
    echo "Selamat datang, ".$_SESSION
    ['npm'];
    echo "<br> <a href='logout.php'> Logout </a>";
}else {
    $_SESSION['info'] = "Anda tidak diizinkan";
    header("Location: login.php");
} 