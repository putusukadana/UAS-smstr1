<?php
    $output["error"] = true;
   
    if(isset($_GET["kode"])){
        $KODEMK = $_GET["kode"];

        include_once("../dbkoneksi2.php");
        $sql = "SELECT KODE_MK, MATAKULIAH FROM mk WHERE KODE_MK='".$KODEMK."';";
        $hsl = mysqli_query($cnn, $sql);
        $output["isi"] = mysqli_fetch_all($hsl);
        $output["error"] = false;
    } 
   
    echo json_encode($output);