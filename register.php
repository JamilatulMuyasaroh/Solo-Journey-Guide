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

$error_messages = [];

if (isset($_POST["submit"])) {
    $name = trim($_POST["name"]);
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $role = $_POST["role"];

    if (empty($name)) {
        $error_messages[] = "Nama tidak boleh kosong.";
    }
    
    if (empty($username)) {
        $error_messages[] = "Username tidak boleh kosong.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_messages[] = "Format email tidak valid.";
    }

    if (strlen($password) < 6) {
        $error_messages[] = "Kata sandi harus minimal 6 karakter.";
    }

    if ($password !== $confirmpassword) {
        $error_messages[] = "Kata sandi dan konfirmasi kata sandi tidak cocok.";
    }

    if (empty($role)) {
        $error_messages[] = "Role tidak boleh kosong.";
    }

    $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        $error_messages[] = "Username atau Email sudah digunakan.";
    }

    if (empty($error_messages)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO user (name, username, email, password, role) VALUES ('$name', '$username', '$email', '$hashed_password', '$role')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil!');</script>";
        } else {
            $error_messages[] = "Terjadi kesalahan pada server.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(rgba(15, 23, 43, .7), rgba(15, 23, 43, .7)), url('img/balaikota.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            background-size: cover;
        }

        .split {
            display: flex;
            width: 80%; 
            height: 80vh;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            border : 1px solid white;
        }

        .left {
            flex: 0.4; 
            background: linear-gradient(to right, rgb(238, 114, 20,0.9),  rgb(247, 183, 135,0.9)); 
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        .right {
            flex: 0.6; 
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
            background: #ff9a9e;
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
        /* font-weight: bold; */
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Grid container */
    .form-container {
        display: grid;
        grid-template-columns: 1fr 1fr; /* Mengatur dua kolom yang sama lebar */
        gap: 20px; /* Jarak antar elemen */
    }


        .eye-icon {
            position: absolute;
            top: 35px;
            right: 15px;
            cursor: pointer;
        }

        button {
            background: #EE7214;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
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

        .formrole {
        width: 100%;
        padding: 10px;
        font-size: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 0px;
        margin-bottom: 16px;
    }

    /* Styling options */
    .formrole option {
        background-color: #f9f9f9;
        color: #333;
    }

    /* Hover effect */
    .formrole option:hover {
        background-color: #e9e9e9;
    }

    /* Focus effect */
    .formrole option:focus {
        outline: none;
        background-color: #ccc;
    }



    </style>
</head>
<body>
    <div class="split">
        <div class="left">
            <div>
                <h1>Selamat Datang di Website Solo Journey Guide!</h1>
                <p>Belum punya akun? Daftar sekarang dan mulai perjalanan Anda dengan Solo Journey Guide!</p>
            </div>
        </div>

        <div class="right">
            <h2>Registrasi</h2>
            <?php
            if (!empty($error_messages)) {
                echo '<div class="errors">';
                foreach ($error_messages as $error_message) {
                    echo "<p>$pesan</p>";
                }
                echo '</div>';
            }
            ?>
            <form action="" method="post" autocomplete="off">
    <div class="form-container">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirmpassword">Konfirmasi Kata Sandi:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>
        </div>
        <div class="form-group">
            <label for="role">Pilih Role:</label>
            <select class="formrole" id="select-role" name="role" required>
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>
        </div>
    </div>
    <button type="submit" name="submit">Daftar</button>
</form>
            <br>
            <a href="login.php">Sudah punya akun? Login di sini.</a><br>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(id) {
            var input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>
</body>
</html>
