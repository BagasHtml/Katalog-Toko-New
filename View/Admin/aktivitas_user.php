<?php
session_start();
include '../../Koneksi/connect.php';

$data = $conn->query("SELECT username, password FROM register ORDER BY username DESC");
$user = $data->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas - User</title>
    <link rel="stylesheet" href="../Design/halaman.css">
    <style>
        body {
            color: white;
            overflow: auto;
            overflow-y: auto;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="judul">
        <h2>Akun User</h2>
        <div class="garis"></div>
    </div>


    <div class="aktivitas-container">
        <div class="aktivitas">
            <table border="3">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php if (count($user) === 0): ?>;
                            <tr>
                                <td colspan="2">Belum ada user</td>
                            </tr>
                        <?php else: ?>
                             <?php foreach ($user as $u): ?>
                        <tr>
                            <td><?= htmlspecialchars($u['username']) ?></td>
                            <td><?= htmlspecialchars($u['password']) ?></td>
                        </tr>
                        <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
            </table>
        </div>
    </div>

    <div>
        <div>
            <form action="../Admin/dashboard_admin.php">
                <a href="" class="tombols"><button type="submit" class="tombol2">Kembali ke dashboard</button></a>
            </form>
        </div>
    </div>
</body>
</html>
