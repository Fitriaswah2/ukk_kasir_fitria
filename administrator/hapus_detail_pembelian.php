<?php

include '../koneksi.php';

$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];

mysqli_query($koneksi,"delete from detailpenjualan where DetailID='$DetailID'");

header("detail_pembelian.php?PelangganID=$PelangganID");

?>