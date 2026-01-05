<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/halaman_utama.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
     <nav>
        <div class="navbar-container">
            <div class="navbar">
                <a href="../View/Produk/barang elektronik.php" class="barang" title="Barang Elektronik"><i class="bi bi-bag-fill"></i>Barang Elektronik</a>
                <a href="../View/Produk/makanan.php" class="barang" title="Makanan"><i class="bi bi-fork-knife"></i>Makanan</a>
                <a href="../View/Produk/pakaian.php" class="barang" title="Pakaian"><i class="fa-solid fa-shirt"></i>Pakaian</a>
                <a href="../View/Produk/metode pembayaran.php" class="barang" title="Metode Pembayaran"><i class="fa-solid fa-filter-circle-dollar"></i>Metode Pembayaran</a>
                <form action="../Koneksi/logout.php">
                    <button class="pencet" onclick="pencet()" title="Logout">Logout</button>
                </form>
            </div>
        </div>
    </nav>
</body>
</html>