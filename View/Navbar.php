<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/halaman_utama.php">
</head>
<body>
     <nav>
        <div class="navbar-container">
            <div class="navbar">
                <a href="../View/Produk/barang elektronik.php" class="barang" title="Barang Elektronik">Barang Elektronik</a>
                <a href="../View/Produk/makanan.php" class="barang" title="Makanan">Makanan</a>
                <a href="../View/Produk/pakaian.php" class="barang" title="Pakaian">Pakaian</a>
                <a href="../View/Produk/metode pembayaran.php" class="barang" title="Metode Pembayaran">Metode Pembayaran</a>
                <form action="../Koneksi/logout.php">
                    <button class="pencet" onclick="pencet()" title="Logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>
</body>
</html>