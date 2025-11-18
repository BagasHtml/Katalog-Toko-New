<?php 
include '../Koneksi/connect.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$perintah = "INSERT INTO register (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $perintah)) {
    header("location: ../View/index.php");
    exit;
} else {
    header("location: ../Koneksi/gagal.php");
}
?>

