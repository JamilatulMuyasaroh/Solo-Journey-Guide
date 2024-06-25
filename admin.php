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
        }

        .sidebar {
            width: 250px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            height: 100vh;
        }

        .sidebar img {
            width: 100px;
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
            padding: 20px;
        }

        .header {
            background-image: url('img/balaikota.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Full height */
            color: white;
            text-align: center;
            position: relative;
        }

        .header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity as needed */
            z-index: 1;
        }

        .header h1,
        .header img {
            position: relative;
            z-index: 2;
        }

        .header img {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 3; /* Make sure it is above the overlay */
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
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="img/logooo.png" alt="Logo"> 
        <a href="admin.php?page=dashboard">Dashboard</a>
        <a href="admin.php?page=data_pesanan">Data Pesanan</a>
        <a href="admin.php?page=data_user">Data User</a>
        <a href="admin.php?page=ulasan">Ulasan Customer</a>
        <a href="admin.php?page=profile">Profile</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>
    
    <div class="main-content">
    <div class="header">
        <img src="img/logooo.png" alt="Logo"> 
        <h1>Profile</h1>
        <div class="container">
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
            
            switch($page) {
                case 'dashboard':
                    include 'dashboard.php';
                    break;
                case 'datapesanan':
                    include 'datapesanan.php';
                    break;
                case 'datauser':
                    include 'datauser.php';
                    break;
                case 'profile':
                    include 'profile.php';
                    break;
                case 'ulasan':
                    include 'ulasan.php';
                    break;
                default:
                    include 'dashboard.php';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
