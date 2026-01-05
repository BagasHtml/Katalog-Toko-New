<?php
session_start(); 
include '../Koneksi/connect.php';

if (isset($_SESSION['sudahLogin'])) {
    header("location: ../View/halaman_utama.php");
}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    try {
        $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['sudahLogin'] = true;
            header("location: ../View/halaman_utama.php");
            exit();
        } else {
            echo "Username / password salah!.";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Server Error!";
    }
}
?>