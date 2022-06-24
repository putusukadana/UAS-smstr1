<?php

    session_start();
    if(isset($_SESSION["login"])){
        
    ?>
        
        <?php
if(isset($_GET["p"])){

    if($_GET["p"]==="mhs"){
        if(isset($_GET["sp"])){
            if($_GET["sp"]=="addnew"){
                $pg="MHS/pagemhsadd.php";
                $TPage = "Menambahkan data Mahasiswa";  
            }
            if($_GET["sp"]=="edit"){
                $pg="MHS/pagemhsedit.php";     
                $TPage = "Edit Data Mahasiswa";
            }
            if($_GET["sp"]=="dele"){
                $pg="MHS/pagemhsdele.php";     
                $TPage="Hapus Data Mahasiswa";
            }
        }else{
            $pg = "MHS/pagemhslist.php";
            $TPage="List Data Mahasiswa";
        }
    }
}else{
}
if(isset($_GET["p"])){

      if($_GET["p"]==="dosen"){
        if(isset($_GET["sp"])){
            if($_GET["sp"]=="addnewdsn"){
                $pg="DSN/pagedsnadd.php";
                $TPage = "Menambahkan data Dosen";
            }
            if($_GET["sp"]=="editdsn"){
                $pg="DSN/pagedsnedit.php";     
                $TPage = "Edit Data Dosen";
            }
            if($_GET["sp"]=="deledsn"){
                $pg="DSN/pagedsndele.php";     
                $TPage="Hapus Data Dosen";
            }
        }else{
            $pg= "DSN/pagedsnlist.php";
            $TPage="List Data Dosen";
        }
      }
}else{
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$TPage;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SIM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="index.php?p=mhs">DataMahasiswa</a>
        <a class="nav-link" href="index.php?p=matakuliah">DataMatakuliah</a>
        <a class="nav-link" href="index.php?p=dosen">DataDosen</a>
      </div>
    </div>
  </div>
</nav>
        Selamat Datang <?=$_SESSION['user'];?>, <a href="loginpage.php?act=logout"> logout </a>
<div class="container">
<?php
  include_once($pg);
?>
</div>
</body>
</html>
<?php
        
}else{
    // echo "Silahkan login terlebih dahulu";
    header("Location: LGN/loginpage.php");
}
?>