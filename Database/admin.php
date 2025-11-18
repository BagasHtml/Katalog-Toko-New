<?php 
include '../Koneksi/connect.php';
session_start();

$username = mysqli_real_escape_string($conn, $_POST['admin_username']) ;
$password = mysqli_real_escape_string($conn, $_POST['password']);

$querry = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$gabung = mysqli_query($conn, $querry);

if (mysqli_num_rows($gabung) > 0) {
    $_SESSION['admin_username'] = $username;
    header("location: ../View/Admin/dashboard_admin.php");
    exit();
} else {
    header("location: ../Koneksi/gagal admin.php");
}
?>