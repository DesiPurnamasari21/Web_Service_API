<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ws_api";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>