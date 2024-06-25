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
    <div className="dashboard">
      <div className="balkot-1">
      </div>
      <div className="rectangle-2">
      </div>
      <div className="container-3">
        <div className="logo-rev-1">
        </div>
        <div className="container-6">
          <img className="vector-1" src="assets/vectors/Vector1347_x2.svg" />
          <span className="dashboard-1">
            Dashboard
          </span>
        </div>
        <div className="data-pesanan">
          Data Pesanan
        </div>
        <div className="container-1">
          <img className="vector-4" src="assets/vectors/Vector772_x2.svg" />
          <span className="data-user">
            Data User
          </span>
        </div>
        <div className="container-4">
          <img className="vector-3" src="assets/vectors/Vector1390_x2.svg" />
          <span className="ulasan-customer">
            Ulasan Customer
          </span>
        </div>
        <div className="container-8">
          <img className="vector" src="assets/vectors/Vector681_x2.svg" />
          <span className="profile">
            Profile
          </span>
        </div>
        <div className="container-5">
          <img className="vector-2" src="assets/vectors/Vector824_x2.svg" />
          <span className="logout">
            Logout
          </span>
        </div>
      </div>
      <div className="container">
        <span className="welcome-admin">
          Welcome, Admin!
        </span>
        <div className="check-out-lastest-updates">
          Check Out lastest updates
        </div>
        <div className="group-65">
          <span className="jumlah-pesanan">
            Jumlah Pesanan
          </span>
          <span className="container">
            10
          </span>
        </div>
      </div>
      <div className="group-69">
        <div className="container-2">
          <img className="vector-5" src="assets/vectors/Vector1373_x2.svg" />
          <div className="jumlah-user">
            Jumlah User
          </div>
        </div>
        <span className="container-1">
          10
        </span>
      </div>
      <div className="group-70">
        <div className="container-7">
          <img className="vector-6" src="assets/vectors/Vector290_x2.svg" />
          <div className="jumlah-ulasan">
            Jumlah Ulasan
          </div>
        </div>
        <span className="container-2">
          10
        </span>
      </div>
    </div>

<style>
    .dashboard {
    background: #FFFFFF;
    display: flex;
    flex-direction: row;
    width: 1280px;
    box-sizing: border-box;
    }
    .dashboard .balkot-1 {
    background: url('assets/images/Balkot4.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .dashboard .rectangle-2 {
    background: rgba(0, 0, 0, 0.51);
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .dashboard .logo-rev-1 {
    background: url('assets/images/LogoRev1.png') 50% / cover no-repeat;
    margin: 0 12.9px 56px 0;
    width: 114px;
    height: 81px;
    }
    .dashboard .dashboard-1 {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .welcome-admin {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 35px;
    color: #FFFFFF;
    }
    .dashboard .check-out-lastest-updates {
    margin-bottom: 65px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #FFFFFF;
    }
    .dashboard .data-user {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .ulasan-customer {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .data-pesanan {
    margin: 0 0 33px 19.6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .profile {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .logout {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .dashboard .vector {
    width: 20px;
    height: 20px;
    }
    .dashboard .vector-1 {
    width: 20px;
    height: 20px;
    }
    .dashboard .vector-2 {
    width: 20px;
    height: 20px;
    }
    .dashboard .vector-3 {
    width: 20px;
    height: 20px;
    }
    .dashboard .vector-4 {
    margin-bottom: 4px;
    width: 20px;
    height: 16px;
    }
    .dashboard .group-65 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    display: flex;
    align-self: flex-start;
    padding: 23px 16px 0 16px;
    width: fit-content;
    height: 125px;
    box-sizing: border-box;
    }
    .dashboard .jumlah-pesanan {
    position: relative;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .dashboard .container {
    position: absolute;
    right: 16px;
    bottom: 22px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 40px;
    color: #527853;
    }
    .dashboard .group-69 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin: 199px 63px 476px 0;
    display: flex;
    padding: 23px 16px 45px 22px;
    width: 247px;
    height: fit-content;
    box-sizing: border-box;
    }
    .dashboard .vector-5 {
    margin-top: 21px;
    width: 40px;
    height: 36px;
    }
    .dashboard .jumlah-user {
    margin-bottom: 31px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .dashboard .container-1 {
    position: absolute;
    right: 16px;
    bottom: 22px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 40px;
    color: #527853;
    }
    .dashboard .group-70 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin: 199px 0 476px 0;
    display: flex;
    padding: 23px 16px 33px 21px;
    box-sizing: border-box;
    }
    .dashboard .jumlah-ulasan {
    margin-bottom: 43px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .dashboard .container-2 {
    position: absolute;
    right: 16px;
    bottom: 22px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 40px;
    color: #527853;
    }
    .dashboard .vector-6 {
    margin: 19px 39.9px 0 0;
    width: 50px;
    height: 50px;
    }
    .dashboard .container {
    position: relative;
    margin: 66px 34px 471px 0;
    display: flex;
    flex-direction: column;
    width: 276px;
    box-sizing: border-box;
    }
    .dashboard .container-1 {
    margin: 0 49.8px 32px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 113.1px;
    box-sizing: border-box;
    }
    .dashboard .container-2 {
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 209px;
    height: fit-content;
    box-sizing: border-box;
    }
    .dashboard .container-3 {
    background: #FFFFFF;
    position: relative;
    margin-right: 33px;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 66px 0 110px 0;
    width: 250px;
    box-sizing: border-box;
    }
    .dashboard .container-4 {
    margin-bottom: 243px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 162.9px;
    box-sizing: border-box;
    }
    .dashboard .container-5 {
    margin-right: 70.7px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 92.1px;
    box-sizing: border-box;
    }
    .dashboard .container-6 {
    margin: 0 43.5px 33px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 119.3px;
    box-sizing: border-box;
    }
    .dashboard .container-7 {
    position: relative;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .dashboard .container-8 {
    margin: 0 73.9px 26px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 89px;
    box-sizing: border-box;
    }
</style>