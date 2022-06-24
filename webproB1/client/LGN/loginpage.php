<?php
    session_start();
    $salah = "";

    if(isset($_GET["act"])){
        if($_GET["act"] == "logout"){
            session_destroy();
        }
    }
    if(isset($_SESSION["login"])){
        header("location:../index.php");
    }
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $pwd = md5($_POST["txPASS"]);

        include_once("/server/dbkoneksi2.php");

        $sql = "SELECT username, passkey FROM login Where username='$usr';";
        $hsl = mysqli_query($cnn,$sql);

        if($hsl->num_rows > 0){
            $row = mysqli_fetch_array($hsl);
            $pass = $row["passkey"];

            if($pwd==$pass){
                $_SESSION["login"] = md5($pass);
                $_SESSION["user"]= $usr;
                header("location:../index.php");
            }
        }else{
            $salah = "Username atau password tidak sesuai";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Login Form </title>
</head>
<body>
    <div class="container">
    <h3>Login</h3>
    <?=$salah;?>
    <div class="alert alert-primary" role="alert" id="pesan">
        Login Berhasil
    </div>
    <form action="loginpage.php" method="post">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <br>
        <input type="text" class="form-control" placeholder="Password" aria-label="Password">
        <br>
        <div class="tombol">
            <button type="submit" class="btn btn-primary btn-sm">Login</button>
        </div>
    </form>
    </div>
    <script>
    document.getElementById("pesan").style.display = "none";
    </script>
</body>
</html>