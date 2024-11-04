<?php
$servername = "localhost";
$database = "lpm";
$username = "root";
$pasword = "";

$conn = mysqli_connect ($servername, $username, $pasword, $database);

if (!$conn) {
    die("koneksi gagal:" . mysqli_connect_eror());
}

?>