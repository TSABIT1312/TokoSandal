<?php
include 'db.php';
session_start();  // Memulai session

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.php");
    exit();  // Pastikan tidak ada kode lain yang dijalankan setelah ini
}

// Menampilkan daftar layanan
$sql_layanan = "SELECT * FROM layanan";
$result_layanan = $conn->query($sql_layanan);

// Menyimpan order baru
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jenis_sepatu = $_POST['jenis_sepatu'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $alamat = $_POST['alamat'];

    // Dapatkan harga dari layanan yang dipilih
    $sql_harga = "SELECT harga FROM layanan WHERE jenis_layanan='$jenis_layanan'";
    $result_harga = $conn->query($sql_harga);
    $harga = $result_harga->fetch_assoc()['harga'];

    $sql_order = "INSERT INTO orders (nama, jenis_sepatu, jenis_layanan, alamat, harga) 
                  VALUES ('$nama', '$jenis_sepatu', '$jenis_layanan', '$alamat', '$harga')";

    if ($conn->query($sql_order) === TRUE) {
        // Redirect ke halaman index.php setelah sukses
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql_order . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Cuci Sepatu</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php include "navbar.php"; ?>
    <h1>Form Order Cuci Sepatu</h1>
    <form method="POST" action="">
        <label>Nama: </label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jenis Sepatu: </label><br>
        <input type="text" name="jenis_sepatu" required><br><br>

        <label>Jenis Layanan: </label><br>
        <select name="jenis_layanan" required>
            <?php while ($row = $result_layanan->fetch_assoc()) { ?>
                <option value="<?= $row['jenis_layanan']; ?>"><?= $row['jenis_layanan']; ?> (Rp <?= number_format($row['harga'], 0, ',', '.'); ?>)</option>
            <?php } ?>
        </select><br><br>

        <label>Alamat: </label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit">Pesan</button>
    </form>
</body>
</html>