<?php
require 'koneksi.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Diet</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFDFE0;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
            font-size: 35px;
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .menu-box {
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 250px;
            text-align: center;
            transition: box-shadow 0.3s;
            overflow: hidden;
        }
        
        .menu-box:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .menu-name {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }
        
        .menu-img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }
        
        .menu-details {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
        }
        
        .menu-actions {
            margin-top: 15px;
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-edit {
            background-color: #9798D8;
            margin-top: 10px;
        }
        
        .btn-hapus {
            background-color: #FF1D1D;
            margin-left: 10px;
        }
        
        .btn-tambah {
            background-color: #ED7575;
            border-radius: 10px;
            padding: 8px 16px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin: 10px 0; 
        }
        
        .btn-logout {
            background-color: black;
            border-radius: 10px;
            padding: 8px 16px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin: 10px 0;
        }
        
        .button-container {
            display: flex; 
            flex-direction: column; 
            justify-content: center; 
            align-items: center; 
        }
        
    </style>
</head>
<body>
    <h2>Daftar Menu Diet</h2>
    
    <div class="container">
        <?php
        // Koneksi ke database warungmieela
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "warungmieela";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM menu_diet";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='menu-box'>";
                echo "<img src='" . $row["gambar"] . "' alt='" . $row["nama"] . "' class='menu-img'>"; 
                echo "<div class='menu-name'>" . $row["nama"] . "</div>";
                echo "<div class='menu-details'>";
                echo "Kalori: " . $row["kalori"] . " kcal<br>";
                echo "Lemak: " . $row["lemak"] . " g<br>";
                echo "Protein: " . $row["protein"] . " g<br>";
                echo "Karbohidrat: " . $row["karbohidrat"] . " g<br>";
                echo "Harga: " . $row["harga"] . " IDR<br>";
                echo "Tipe: " . $row["tipe"];
                echo "</div>";
                echo "<div class='menu-actions'>";
                echo "<a href='update.php?id=" . $row["id"] . "' class='btn btn-edit'>Edit</a>"; 
                echo "<a href='delete.php?id=" . $row["id"] . "' class='btn btn-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus item ini?\")'>Hapus</a>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>Tidak ada data yang tersedia.</p>"; 
        }

        $conn->close();
        ?>
    </div>
        <div class="button-container">
            <a href="create.php" class='btn-tambah'>Tambah Data</a>
            <a href="logout.php" class='btn-logout'>Logout</a>
        </div>
</body>
</html>
