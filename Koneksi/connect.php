<?php 
$local = "localhost";
$username = "root";
$password = "";
$db = "login";

$conn = mysqli_connect($local, $username, $password, $db);

if($conn->connect_error) {
    die("Koneksi gagal");
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>