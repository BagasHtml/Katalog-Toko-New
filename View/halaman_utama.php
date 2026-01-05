<?php 
session_start();

if (!isset($_SESSION['sudahLogin'])) {
    header("location: ../index.php");
    exit();
}

function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$username = $_SESSION['username'];

date_default_timezone_set('Asia/Jakarta');
$jam = date('H');

if ($jam >= 5 && $jam < 12) {
    $ucapkan = "Selamat Pagi";
} else if ($jam >= 12 && $jam < 15) {
    $ucapkan = "Selamat Siang";
} else if ($jam >= 15 && $jam < 18) {
    $ucapkan = "Selamat Sore";
} else {
    $ucapkan = "Selamat Malam";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <!-- Design Css -->
    <link rel="stylesheet" href="../View/Design/halaman.css">

    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <?php include 'Navbar.php'; ?>

    <main>
        <div class="dashboard">
            <b> Halo! <?php echo e($username) ?> </b><br>
                <?php echo e($ucapkan) . "😊"?> <br>
                <p>selamat datang di Website kami.</p>
            <a href="../View/Admin/admin.php" class="admin">Login Sebagai Admin</a>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <script>
        feather.replace();
    </script>
</body>
</html>