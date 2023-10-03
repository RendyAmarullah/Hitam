<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <img src="download.jpg">



    <?php
    session_start();
    echo "<br>";
    if(isset($_SESSION['info'])){
        echo $_SESSION['info'];
        
    }

    ?> <form action="" method="post">
        <input type="text" name="npm" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit"> Login</button>
    </form>
    <?php
        
        if (isset($_POST['npm'])){
            //cek apakah username = jamal dan password = 123

            if($_POST['npm'] == "2226250065" && $_POST ['password'] == 123){
                session_start();
                $_SESSION ['npm'] = $_POST['npm'];
                
                header("Location: dashboard.php");
            }else {
                echo "Salah";
            }
        }
        
    ?>
</body>


</html>