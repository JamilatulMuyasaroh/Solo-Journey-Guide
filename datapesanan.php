<?php
require 'koneksi.php';

// Periksa apakah pengguna telah login dan memiliki peran admin
// if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true || !isset($_SESSION["id"]) || !isset($_SESSION["role"]) || $_SESSION["role"] !== 'admin') {
//     header("Location: login.php"); // Redirect ke halaman login jika tidak login atau bukan admin
//     exit;
// }

// Ambil data user dari tabel user
$sql_user = "SELECT * FROM user";
$result_user = mysqli_query($conn, $sql_user);

// Ambil data pesanan dari tabel pesanan
$sql_pesanan = "SELECT * FROM pesanan";
$result_pesanan = mysqli_query($conn, $sql_pesanan);

$targetDir = "uploads/"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin - Data User dan Pesanan</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background: #f1f1f1;
        display: flex;
        background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url('img/balaikota.jpg');
        background-size: cover;
        background-position: center;
    }

    .sidebar {
        width: 250px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        box-sizing: border-box;
        height: 1000px;
    }

    .sidebar img {
        width: 150px;
        display: block;
        margin: 0 auto 20px;
    }

    .sidebar a {
        text-decoration: none;
        color: #333;
        display: block;
        padding: 10px 15px;
        margin: 10px 0;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .sidebar a:hover {
        background-color: #f2f2f2;
    }

    .main-content {
        flex-grow: 1;
        padding: 30px;
        color: white;
    }

    .main-content h1 {
        font-size: 40px;
        padding: 0px;
    }

    .container {
        max-width: 1000px;
        /* margin: 20px auto; */
        background: rgba(255, 255, 255, 1); /* White background */
        padding: 20px;
        border-radius: 10px;
        border: 1px solid white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 3; /* Make sure it is above the overlay */
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        /* margin-top: 20px; */
    }

    table, th, td {
        /* border: 1px solid #14141F; */
    }

    th, td {
        padding: 10px;
        text-align: left;
        color: #14141F;
    }

    th {
        background-color: #ffffff;
        color: black;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #F9E8D9;
    }

    tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .btn-hapus {
        background-color: #ff4d4d;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    .btn-hapus:hover {
        background-color: #ff1a1a;
    }

    .logout {
        text-align: center;
        margin-top: 20px;
    }

    .logout a {
        text-decoration: none;
        background-color: #527853;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .logout a:hover {
        background-color: #333;
    }

    .homepage {
        text-align: center;
        margin-top: 20px;
    }

    .homepage a {
        text-decoration: none;
        background-color: #EE7214;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    .homepage a:hover {
        background-color: #F7B787;
    }

    .menu-item {
        display: flex;
        align-items: center;
        margin: 10px 0;
        padding: 10px 10px;
        }

    .menu-item img {
        width: 20px; 
        margin-right: 10px;
        align-items: center;
        padding: 25px 0px 5px 10px;

    }

    .menu-item a {
        text-decoration: none;
        color: #527853;
        flex-grow: 1;
        font-weight:bold;
        display: block;
        padding: 10px 10;
        transition: background 0.3s ease;

    }

    .menu-item:hover {
        border-radius :10px;
        background-color: #f2f2f2;
    }

    .menuu{
        margin-top:50px;
    }
    
</style>
</head>
<body>
<div class="sidebar">
        <img src="img/logooo.png" alt="Logo"> 
        <div class="menuu">
        <div class="menu-item">
            <img src="img/dashboard.png" alt="Dashboard Logo">
            <a href="admin.php">Dashboard</a>
        </div>
        <div class="menu-item">
            <img src="img/pesanan.png" alt="Dashboard Logo">
            <a href="datapesanan.php">Data Pesanan</a>
        </div>
        <div class="menu-item">
            <img src="img/datauser.png" alt="Dashboard Logo">
            <a href="datauser.php">Data User</a>
        </div>
        <div class="menu-item">
            <img src="img/ulasan.png" alt="Dashboard Logo">
            <a href="ulasan.php">Ulasan User</a>
        </div>
        <div class="menu-item">
            <img src="img/profilee.png" alt="Dashboard Logo">
            <a href="profile.php">Profile</a>
        </div>
        <div class="menu-item">
            <img src="img/logout.png" alt="Dashboard Logo">
            <a href="logout.php">Logout</a>
        </div>
        <div class ="homepage">
            <a href="index.php">Back to HomePage</a>
        </div>
        </div>
    </div>
    
    <div class="main-content">
    <div class="header">
        <h1>Data Pesanan User</h1>
        <p>Check Out lastest updates</p>
        <div class="container">
        <table>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Pesanan</th>
                <th>Paket</th>
                <th>Pesan</th>
                <th>Bukti Transfer</th>
                <th>Aksi</th> <!-- Tambahkan kolom untuk aksi -->
            </tr>
            <?php
            if (mysqli_num_rows($result_pesanan) > 0) {
                while ($row = mysqli_fetch_assoc($result_pesanan)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['datetime'] . "</td>";
                    echo "<td>" . $row['package'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "<td><img src='" . $row["transfer_proof"] . "' alt='" . $row["name"] . "'style='max-width: 100px;'>"; 
                    echo "<td><a href='delete.php?id=" . $row["id"] . "' class='btn btn-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus item ini?\")'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data pesanan.</td></tr>"; // Sesuaikan colspan menjadi 8
            }
            ?>
        </table>
        </div>
        
    </div>
</div>
</body>
</html>
