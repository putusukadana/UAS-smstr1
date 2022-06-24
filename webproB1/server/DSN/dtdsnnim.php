<?php
    $output["error"] = true;
   
    if(isset($_GET["kode"])){
        $KODE = $_GET["kode"];

        include_once("../dbkoneksi2.php");
        $sql = "SELECT KodeDosen, NamaDosen, Jurusan, JK FROM dosen WHERE KodeDosen='".$KODE."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);