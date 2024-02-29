<?php
$koneksi = mysqli_connect("localhost","root","","ukk_kasir");


if (mysqli_connect_errno()){
 echo "koneksi database gagggal : " . mysqli_connect_error();
}

?>