<?php 
include '../Koneksi/connect.php';

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    try {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql)) {
            echo "Daftar berhasil, silahkan login kembali <a href='../index.php'>Disini<a>";
        } else {
            echo "Login gagal";
        }
    } catch (mysqli_sql_exception $e) {
        echo "Register gagal!, server error.";
    }
}
?>