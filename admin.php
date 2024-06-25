<?php
require 'koneksi.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Periksa apakah pengguna telah login sebagai admin
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true || !isset($_SESSION["id"])) {
    header("Location: login.php"); // Redirect ke halaman login jika tidak login
    exit;
}

// Ambil data user dari tabel user
$sql_user = "SELECT * FROM user";
$result_user = mysqli_query($conn, $sql_user);

// Ambil data pesanan dari tabel pesanan
$sql_pesanan = "SELECT * FROM pesanan";
$result_pesanan = mysqli_query($conn, $sql_pesanan);
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
            padding: 20px;
            background: #f1f1f1;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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

        .btn-hapus {
            background-color: #ff4d4d; /* Red background */
            border: none; /* Remove border */
            color: white; /* White text */
            padding: 10px 20px; /* Padding */
            text-align: center; /* Center text */
            text-decoration: none; /* Remove underline */
            display: inline-block; /* Inline block */
            font-size: 16px; /* Font size */
            margin: 4px 2px; /* Margin */
            cursor: pointer; /* Pointer cursor on hover */
            border-radius: 8px; /* Rounded corners */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        .btn-hapus:hover {
            background-color: #ff1a1a; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data User</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <?php
            if (mysqli_num_rows($result_user) > 0) {
                while ($row = mysqli_fetch_assoc($result_user)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td><a href='deleteuser.php?id=" . $row["id"] . "' class='btn btn-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus item ini?\")'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Tidak ada data user.</td></tr>";
            }
            ?>
        </table>

        <h1>Data Pesanan</h1>
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
                    echo "<td><img src='path/to/your/uploads/" . $row['transfer_proof'] . "' style='max-width: 100px;' /></td>";
                    echo "<td><a href='delete.php?id=" . $row["id"] . "' class='btn btn-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus item ini?\")'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Tidak ada data pesanan.</td></tr>"; // Sesuaikan colspan menjadi 8
            }
            ?>
        </table>


        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
