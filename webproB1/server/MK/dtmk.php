<?php
include_once("../dbkoneksi2.php");
   $sql = "SELECT KODE_MK, MATAKULIAH FROM mk";
   $hsl = mysqli_query($cnn, $sql);
   $output = mysqli_fetch_all($hsl);
   echo json_encode($output);