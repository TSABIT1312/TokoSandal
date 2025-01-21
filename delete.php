<?php
include 'db.php';

// Cek apakah ID order diterima di URL
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];

    // Hapus data order dari database
    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->bind_param("i", $order_id);

    if ($stmt->execute()) {
        header("Location: read.php"); // Redirect kembali ke daftar order
        exit();
    } else {
        echo "Gagal menghapus order!";
    }
} else {
    echo "ID order tidak ditemukan!";
}
?>
