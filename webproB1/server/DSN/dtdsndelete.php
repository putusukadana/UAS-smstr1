<?php
    include_once("../dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODE=$_POST["kode"];
        
        $sql = "DELETE FROM dosen WHERE KodeDosen='".$KODE."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);