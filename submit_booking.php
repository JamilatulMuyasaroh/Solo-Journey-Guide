<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rplproject";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select Database
if (!$conn->select_db($dbname)) {
    die("Could not select database: " . $conn->error);
}

// SQL untuk CREATE tabel ulasan ke database warungmieela
$sql = "CREATE TABLE ulasan (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    komentar TEXT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table ulasan created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
