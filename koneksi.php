<?php
// Check if a session is already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = mysqli_connect("localhost", "root", "", "rplproject");

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your additional code here
?>
