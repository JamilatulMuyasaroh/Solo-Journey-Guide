<?php
require 'koneksi.php'; // Include your connection file

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true || !isset($_SESSION["id"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit;
}

// Fetch data from database
$sql_user = "SELECT COUNT(*) AS total_users FROM user";
$result_user = mysqli_query($conn, $sql_user);
$row_user = mysqli_fetch_assoc($result_user);
$total_users = $row_user['total_users'];

$sql_pesanan = "SELECT COUNT(*) AS total_pesanan FROM pesanan";
$result_pesanan = mysqli_query($conn, $sql_pesanan);
$row_pesanan = mysqli_fetch_assoc($result_pesanan);
$total_pesanan = $row_pesanan['total_pesanan'];

// Static value for total ulasan
$sql_ulasan= "SELECT COUNT(*) AS total_ulasan FROM ulasan";
$result_ulasan = mysqli_query($conn, $sql_ulasan);
$row_ulasan = mysqli_fetch_assoc($result_ulasan);
$total_ulasan = $row_ulasan['total_ulasan'];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Admin - Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <style>
        /* CSS untuk tampilan dashboard */
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
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            color: #527853;
            /* margin: 20px auto;  */
        }

        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            flex-grow: 1;
            margin: 0 20px; /* Memberikan jarak antara kotak */
            display: flex;
            align-items: center;
        }

        .box img {
            width: 50px; /* Ukuran gambar disesuaikan */
            margin-right: 20px; /* Jarak antara gambar dan teks */
        }

        .box h2 {
            font-size: 23px;
            text-align: right;
        }

        .box p {
            font-size: 28px;
            margin: 0;
            text-align: right;
            font-weight: bold;
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
        }

        .menu-item a {
            text-decoration: none;
            color: #527853;
            flex-grow: 1;
            font-weight: bold;
            display: block;
            padding: 10px 10;
            transition: background 0.3s ease;
        }

        .menu-item:hover {
            border-radius: 10px;
            background-color: #f2f2f2;
        }

        .menuu {
            margin-top: 50px;
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
            <div class="homepage">
                <a href="index.php">Back to HomePage</a>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Welcome, Admin!</h1>
            <p>Check Out lastest updates</p>
        </div>
        
        <div class="container">
            <div class="box">
                <img src="img/pesanan_admin.png" alt="Pesanan Admin Logo">
                <div>
                    <h2>Jumlah Pesanan</h2>
                    <p><?php echo $total_pesanan; ?></p>
                </div>
            </div>
            <div class="box">
                <img src="img/user_admin.png" alt="User Admin Logo">
                <div>
                    <h2>Jumlah User</h2>
                    <p><?php echo $total_users; ?></p>
                </div>
            </div>
            <div class="box">
                <img src="img/ulasan_admin.png" alt="Ulasan Admin Logo">
                <div>
                    <h2>Jumlah Ulasan</h2>
                    <p><?php echo $total_ulasan; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
