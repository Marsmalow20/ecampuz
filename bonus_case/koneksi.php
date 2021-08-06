<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "ecampuz";

    $con = mysqli_connect($host, $username, $password, $database);
    if(!$con) {
        die("Gagal Koneksi!" . mysqli_connect_error());
    }
?>
