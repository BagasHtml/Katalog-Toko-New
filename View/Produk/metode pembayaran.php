<?php
session_start();

$jumlah_item = $_SESSION['jumlah_item'] ?? 0;
$jumlah_makanan = $_SESSION['jumlah_makanan'] ?? 0;
$jumlah_pakaian = $_SESSION['jumlah_pakaian'] ?? 0;

$hargaItem = 33000000;
$hargaMakanan = 15000;
$hargaPakaian = 32000;

$totalItem = $jumlah_item * $hargaItem;
$totalMakanan = $jumlah_makanan * $hargaMakanan;
$totalPakaian = $jumlah_pakaian * $hargaPakaian;

$alert = "";

if(isset($_POST['bayar'])) {
    $alert = "<script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Terimakasih sudah berbelanja.',
            icon: 'success'
        });
    </script>";

unset($_SESSION['jumlah_item']);
unset($_SESSION['jumlah_makanan']); 
unset($_SESSION['jumlah_pakaian']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Pembayaran</title>
    <link rel="stylesheet" href="../Design/halaman.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="bayar">
        <div class="pembayaran">
            <h2>Form Pembayaran</h2>
        </div>

        <?php if ($jumlah_item > 0): ?>
            <p>Jumlah Item: <?= $jumlah_item ?></p>
            <p>Total bayar: Rp <?= number_format($totalItem, 0, ',', '.') ?></p>
        <?php endif; ?>

        <?php if ($jumlah_makanan > 0): ?>
            <p>Jumlah Item: <?= $jumlah_makanan ?></p>
            <p>Total Bayar: Rp <?= number_format($totalMakanan, 0, '.', ',') ?></p>
        <?php endif; ?>

        <?php if ($jumlah_pakaian > 0): ?>
            <p>Jumlah Item: <?= $jumlah_pakaian ?></p>
            <p>Total Bayar: Rp <?= number_format($totalPakaian, 0, '.', ',') ?></p>
        <?php endif; ?>

        <form method="post">
            <button type="submit" name="bayar" class="yar">Bayar</button>
        </form>

        <form action="../halaman_utama.php">
            <button type="submit" class="kem">Kembali</button>
        </form>
    </div>

    <?= $alert ?>
</body>
</html>