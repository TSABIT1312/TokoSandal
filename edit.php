<?php
include 'db.php';

// Cek apakah ID order diterima di URL
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Ambil data order berdasarkan ID
    $stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $order = $result->fetch_assoc();
    } else {
        die("Order tidak ditemukan!");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $jenis_sepatu = $_POST['jenis_sepatu'];
    $jenis_layanan = $_POST['jenis_layanan'];
    $alamat = $_POST['alamat'];
    $harga = $_POST['harga'];

    // Update data order
    $stmt = $conn->prepare("UPDATE orders SET nama = ?, jenis_sepatu = ?, jenis_layanan = ?, alamat = ?, harga = ? WHERE id = ?");
    $stmt->bind_param("ssssdi", $nama, $jenis_sepatu, $jenis_layanan, $alamat, $harga, $order_id);

    if ($stmt->execute()) {
        header("Location: read.php"); // Redirect kembali ke daftar order
        exit();
    } else {
        echo "Gagal mengupdate order!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php include "navbar.php"; ?>

    <h1>Edit Order Cuci Sepatu</h1>

    <form method="POST" action="edit_order.php?id=<?= $order_id; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($order['nama']); ?>" required>

        <label for="jenis_sepatu">Jenis Sepatu:</label>
        <input type="text" name="jenis_sepatu" value="<?= htmlspecialchars($order['jenis_sepatu']); ?>" required>

        <label for="jenis_layanan">Jenis Layanan:</label>
        <input type="text" name="jenis_layanan" value="<?= htmlspecialchars($order['jenis_layanan']); ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($order['alamat']); ?>" required>

        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="<?= htmlspecialchars($order['harga']); ?>" required>

        <button type="submit">Update Order</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
