<?php 
session_start();

$username = $_SESSION['username'] ?? 'Tamu';
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
    <link rel="stylesheet" href="../View/Design/halaman.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <?php include 'Navbar.php'; ?>

    <main>
        <div class="dashboard">
            <b> Halo! <?php echo htmlspecialchars($username) ?> </b><br>
            <?php echo $ucapkan . "😊"?> <br>
            <p>selamat datang di Website kami.</p>
            <a href="../View/Admin/admin.php" class="admin">Login Sebagai Admin</a>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer">
                <b>Bagas Tresna Nanda MS &copy;2025</b>
            </div>
        </div>
    </footer>
</body>
</html>