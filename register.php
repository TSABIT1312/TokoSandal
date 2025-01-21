<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi jika password tidak cocok
    if ($password !== $confirm_password) {
        $error = "Password tidak cocok!";
    } else {
        // Periksa apakah username sudah ada
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        
        // Mengikat parameter untuk pengecekan username
        $stmt->bind_param("s", $username);  // "s" untuk parameter bertipe string
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error = "Username sudah terdaftar!";
        } else {
            // Hash password dan simpan ke database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Query untuk memasukkan data ke database
            $insert = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            
            // Mengikat parameter untuk insert
            $insert->bind_param("ss", $username, $hashed_password);  // "ss" untuk 2 parameter bertipe string
            
            if ($insert->execute()) {
                // Redirect ke halaman login setelah sukses
                header("Location: login.php");
                exit();
            } else {
                $error = "Terjadi kesalahan saat mendaftar!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <?php if (!empty($error)): ?>
            <p class="error"><?= $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="register.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
    </div>
</body>
</html>