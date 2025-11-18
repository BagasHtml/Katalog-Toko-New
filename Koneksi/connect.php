<?php 
$local = "localhost";
$username = "root";
$password = "";
$db = "login";

$conn = mysqli_connect($local, $username, $password, $db);

if(!$conn) {
    die("Koneksi gagal" . mysqli_connect_error());
}
?>