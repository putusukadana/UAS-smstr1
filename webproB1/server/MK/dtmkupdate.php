<?php
    include_once("../dbkoneksi2.php");
    
    $r["sukses"]=false;

    if(isset($_POST["kode"])){
        $KODE=$_POST["kode"];
        $NAMA=$_POST["nama"];

        $sql="UPDATE mk SET 
                MATAKULIAH='".$NAMA."'
                WHERE KODE_MK='".$KODE."'";

        mysqli_query($cnn,$sql);
        $r["sukses"]=true;
    }
    echo json_encode($r);