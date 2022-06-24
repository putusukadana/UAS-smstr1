<?php
include_once("../dbkoneksi2.php");
   $sql = "SELECT KodeDosen, NamaDosen, Jurusan, JK FROM dosen";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);