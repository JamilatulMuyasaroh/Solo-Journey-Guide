<?php
require 'koneksi.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirect jika pengguna sudah login
if (!empty($_SESSION["id"])) {
    header("Location: index.php");
    exit;
}

// Cek cookie untuk login otomatis
if (isset($_COOKIE["user_id"])) {
    $_SESSION["id"] = $_COOKIE["user_id"];
    header("Location: index.php");
    exit;
}

$error_messages = [];

if (isset($_POST["submit"])) {
    $usernameemail = trim($_POST["usernameemail"]);
    $password = $_POST["password"];
    
    // Validasi input
    if (empty($usernameemail)) {
        $error_messages[] = "Username atau email tidak boleh kosong.";
    }
    
    if (empty($password)) {
        $error_messages[] = "Kata sandi tidak boleh kosong.";
    }
    
    if (empty($error_messages)) {
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) { 
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                
                // Mengambil role dari hasil query
                $role = $row["role"];
                
                // Redirect berdasarkan role
                if ($role == "admin") {
                    header("Location: admin.php");
                } else {
                    header("Location: index.php");
                }
                exit;
            } else {
                $error_messages[] = "Kata sandi salah.";
            }
        } else {
            $error_messages[] = "Pengguna tidak terdaftar.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #F9E8D9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url('img/balaikota.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-size: cover;
        }

        .split {
            display: flex;
            width: 80%;
            height: 60vh;
            border : 1px solid white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .left {
            flex: 1;
            background: linear-gradient(to right, rgb(238, 114, 20,0.9),  rgb(247, 183, 135,0.9)); 
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .right {
            flex: 1;
            background: rgb(255,255,255, 0.9);
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 35px;
        }
        
        p {
            text-align: center;
            color: white;
            font-size: 20px;
        }

        .errors {
            background: #FF000A;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: box-shadow 0.2s ease-in-out;
        }

        .form-group input:focus {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            background: #EE7214;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: black;
        }

        a {
            text-decoration: none;
            color: #EE7214;
            transition: color 0.3s ease;
        }

        a:hover {
            color: black; 
        }
    </style>
</head>
<body>
    <div class="split">
        <div class="left">
            <div>
                <h1>Selamat Datang di Website Solo Journey Guide!</h1>
                <p>Masuk untuk melanjutkan ke akun Anda dan temukan destinasi petualangan solo yang menakjubkan!</p>
            </div>
        </div>

        <div class="right">
            <h2>Login</h2>
            <?php
                if (!empty($error_messages)) {
                    echo '<div class="errors">';
                    foreach ($error_messages as $message) {
                        echo "<p>$message</p>";
                    }
                    echo '</div>';
                }
            ?>
            <form action="" method="post" autocomplete="off">
                <div class="form-group">
                    <label for="usernameemail">Username atau Email:</label>
                    <input type="text" name="usernameemail" id="usernameemail" required>
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
            <br>
            <a href="register.php">Belum punya akun? Daftar di sini.</a>
        </div>
    </div>
</body>
</html>
