<?php
    include_once("../dbkoneksi2.php");
    
    $r["sukses"]=false;
    if(isset($_POST["kode"])){
        $KODE=$_POST["kode"];
        $NAMA=$_POST["nama"];
        $JURUSAN=$_POST["jurusan"];
        $JK=$_POST["jkel"];

        $sql = "UPDATE dosen SET 
            NamaDosen='".$NAMA."',
            Jurusan='".$JURUSAN."',
            JK='".$JK."'
            WHERE KodeDosen='".$KODE."'";
        
        mysqli_query($cnn, $sql);
        $r["sukses"]= true;
    }
    echo json_encode($r);