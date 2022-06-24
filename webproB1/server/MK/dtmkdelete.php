<?php
    include_once("../dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODEMK=$_POST["kode"];
        
        $sql = "DELETE FROM mk WHERE KODE_MK='".$KODEMK."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);