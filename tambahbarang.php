<?php
include "koneksi.php";

$barang = $_POST["barang"];
$jumlah= $_POST["jumlah"];

$data = mysqli_query($koneksi, "insert into barang values(null,'$barang','$jumlah')");
if($data){
    header("location:inventory.php");
}
?>
