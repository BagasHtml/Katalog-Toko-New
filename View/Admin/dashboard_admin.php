<?php 
session_start();

if (!isset($_SESSION['admin_username'])) {
    header("Location: ../form login.php");
    exit;
}

$username = $_SESSION['admin_username'];

date_default_timezone_set('Asia/Jakarta');
$jam = date('H');

if ($jam >= 5 && $jam < 12) {
    $salam = "Selamat Pagi";
} else if ($jam >= 12 && $jam < 15) {
    $salam = "Selamat Siang";
} else if ($jam >= 15 && $jam < 18) {
    $salam = "Selamat Sore";
} else {
    $salam = "Selamat Malam";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" href="../../View/Design/halaman.css">
</head>
<body>
    <nav>
        <div class="navbar-container">
            <div class="navbar">
                <a href="aktivitas_user.php" class="barang" title="Aktivitas User">Aktivitas user</a>
                <form action="../halaman_utama.php">
                    <button class="pencet-admin" onclick="pencet()" title="Kembali ke Dashboard">Kembali</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="dashboard-utama" >
        <b><?php echo "Halo Admin! " . htmlspecialchars($username) ?></b>
        <?php echo $salam ?>
    </div>

    <div class="profil">
        <?php 
        if ($username === "bagas_tresnaa_") {
            echo '<a href="#"  onclick="showProfileAlert()"><img class="profil" 
            src="../Design/Assets/rosieee.jpg" 
            width="50px" 
            height="50px"
            style="border-radius: 50%;
            position: relative;
            top: -174px;
            box-shadow: 0px 0px 10px black;
            right: -179vh;
            overflow: hidden;"
            ></a>';
        } else {
            echo "Hai Antek-antek asing";
        }
        ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function showProfileAlert() {
    Swal.fire({
      title: "Selamat pagi sayang~",
      text: "Bukankah ini My Istri..",
      imageUrl: "../Design/Assets/rosie.jpg",
      imageWidth: 150,
      imageHeight: 150,
      customClass: {
        image: 'swal-img'
      },
      imageAlt: "Custom image"
    });
}
</script>
</body>
</html>
