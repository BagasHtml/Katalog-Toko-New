<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Login</title>
    <link rel="stylesheet" href="../View/Design/halaman.css">
</head>
<body>
    <div class="login-container">
        <div class="login">
            <form action="../Database/register.php" method="POST">
                <h2>Daftar</h2>
                <label for="">Username</label>
                <br>
                <input type="text" name="username" id="" required>
                <br><br>
                <label for="">Password</label>
                <br>
                <input type="password" name="password" id="" required>
                <br><br>
                <button type="submit" class="kirim" name="register">Daftar</button>
                <p>Udah punya akun <a href="../index.php">Login yuk</a></p>
            </form>
        </div>
    </div>
</body>
</html>