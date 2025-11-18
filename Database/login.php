<?php 
include '../Koneksi/connect.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$querry = "SELECT * FROM register WHERE username = '$username' and password = '$password'";
$perintah = mysqli_query($conn, $querry);

if (mysqli_num_rows($perintah) > 0) {
    $_SESSION['username'] = $username;
    header("Location: ../View/halaman_utama.php");
} else {
    header("Location: ../Koneksi/gagal.php");
}
?>