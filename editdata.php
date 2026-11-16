<?php
include "koneksi.php";
$id = $_POST["id"];
$jumlah = $_POST["jumlahbarang"];
$data = mysqli_query($koneksi, "UPDATE barang SET jumlah = '$jumlah' WHERE id = '$id'");

if ($data) {
    header("location:laporan.php");
} else {
    header("location:laporan.php");
}
?>