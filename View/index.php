<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Login</title>
    <link rel="stylesheet" href="../View/Design/halaman.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<body>
    <div class="login-container">
        <div class="login">
            <form action="../Database/login.php" method="POST">
                <h2>Login</h2>
                <label for="">Username</label>
                <br>
                <input type="text" name="username" id="" placeholder="Masukan Username" required>
                <br><br>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="" placeholder="Masukan Password" required>
                <br><br>
                <button type="submit" class="kirim">Login</button>
                <p>Belum ada akun? <a href="form register.php">Daftar dulu</a></p>
            </form>
        </div>
    </div>
</body>
</html>