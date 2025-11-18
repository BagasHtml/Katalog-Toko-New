<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Login</title>
    <link rel="stylesheet" href="../Design/halaman.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<body>
    <div class="login-container">
        <div class="login-admin">
            <form action="../../Database/admin.php" method="POST">
                <h2>Login Sebagai Admin</h2>
                <label for="">Username</label>
                <br>
                <input type="text" name="admin_username" id="" placeholder="Masukan Username" required>
                <br><br>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="" placeholder="Masukan Password" required>
                <br><br>
                <button type="submit" class="kirim">Login</button><br><br>
                <a href="../halaman_utama.php" class="balik">Kembali ke Halaman utama</a>
            </form>
        </div>
    </div>
</body>
</html>