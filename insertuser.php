<?php
include "koneksi.php";

if (isset($_POST["submituser"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES ('null','$username', '$password')");
}
