<?php

// cara membuat cookie
    setcookie("user", "rendy", time() + (86400 * 30));
//cara panggil cookie

    if(isset($_COOKIE['user'])){
        echo "Cookie: ".$_COOKIE['user'];
    }else{
        echo "Coba refresh lagi browsernya.";
    }
?>