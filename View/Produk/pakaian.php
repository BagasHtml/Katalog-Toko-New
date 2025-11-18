<?php 
session_start();

if (!isset($_SESSION['jumlah_item'])) $_SESSION['jumlah_item'] = 0;

if (isset($_POST['tambah'])) {
    $_SESSION['jumlah_item'] += 1;

$harga = 33000000;
$total = $_SESSION['jumlah_item'] * $harga;

$alert = "<script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Pesanan ditambahkan.',
            icon: 'success'
        });
    </script>";
} else {
    $alert = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang - Elektronik</title>
    <link rel="stylesheet" href="../Design/halaman.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <main>
        <div class="penjelasan-container">
            <div class="gambar">
                <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/242/2024/10/28/Oversized-848197833.jpg" alt="" class="gambar">
            </div>
            <div class="penjelasan">
                <h2>Baju Trend 2025</h2>
            </div>
                <p>Keterangan: </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet repudiandae tenetur laborum expedita, voluptatum dolorem dignissimos, provident, maiores odio quo impedit quisquam vitae totam quam necessitatibus in voluptatem nobis ut.</p>
        </div>
        <div class="pesan">
            <form method="post">
                <input type="hidden" name="jumlah_item" value="<?= $_SESSION['jumlah_item'] ?? 0 ?>">
                <button type="submit" name="tambah" class="pesans">33.000.000</button>
            </form>
        </div>
        <form action="../halaman_utama.php" class="utama">
            <button type="submit" class="utamas">Kembali ke halaman utama</button>
        </form>
    </main>

    <?= $alert ?>
</body>
</html>