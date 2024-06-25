<?php
require 'koneksi.php';
session_start(); // Pastikan session_start() dipanggil untuk mengakses session

// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true || !isset($_SESSION["id"])) {
    header("Location: login.php"); // Redirect ke halaman login jika tidak login
    exit;
}

// Ambil data user dari tabel user
$sql_user = "SELECT * FROM user";
$result_user = mysqli_query($conn, $sql_user);

// Ambil data pesanan dari tabel pesanan
$sql_pesanan = "SELECT * FROM user";
$result_pesanan = mysqli_query($conn, $sql_pesanan);

// Ambil ID dari GET parameter
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Menggunakan prepared statement untuk menghapus data berdasarkan ID
    $stmt = $conn->prepare("DELETE FROM user WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'admin.php';</script>"; // Kembalikan ke halaman utama setelah dihapus
    } else {
        echo "Kesalahan saat menghapus data: " . $conn->error;
    }

    $stmt->close(); // Menutup statement
} else {
    echo "ID tidak valid.";
}

$conn->close();
?>
