<?php
    include_once("../dbkoneksi2.php");

    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODEMK=$_POST["kode"];
        $NAMAMK=$_POST["nama"];
        // $JURUSAN=$_POST["jurusan"];


        $sql = "INSERT INTO mk(KODE_MK, MATAKULIAH) 
            VALUES('$KODEMK', '$NAMAMK');";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);