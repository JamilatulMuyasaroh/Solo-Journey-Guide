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

?>
    <div className="data-user">
      <div className="balkot-1">
      </div>
      <div className="rectangle-2">
      </div>
      <div className="container-8">
        <div className="logo-rev-1">
        </div>
        <div className="container-5">
          <img className="vector-1" src="assets/vectors/Vector869_x2.svg" />
          <span className="dashboard">
            Dashboard
          </span>
        </div>
        <div className="data-pesanan">
          Data Pesanan
        </div>
        <div className="container-7">
          <img className="vector-4" src="assets/vectors/Vector1501_x2.svg" />
          <span className="data-user-2">
            Data User
          </span>
        </div>
        <div className="container-14">
          <img className="vector-3" src="assets/vectors/Vector459_x2.svg" />
          <span className="ulasan-customer">
            Ulasan Customer
          </span>
        </div>
        <div className="container">
          <img className="vector" src="assets/vectors/Vector1406_x2.svg" />
          <span className="profile">
            Profile
          </span>
        </div>
        <div className="container-3">
          <img className="vector-2" src="assets/vectors/Vector597_x2.svg" />
          <span className="logout">
            Logout
          </span>
        </div>
      </div>
      <div className="container-12">
        <span className="data-user-1">
          Data User
        </span>
        <div className="check-out-lastest-updates">
          Check Out lastest updates
        </div>
        <div className="group-83">
          <div className="user-name-nama-lengkap-email-role">
            UserName                     Nama Lengkap                   Email                                    Role
          </div>
          <div className="container-15">
            <div className="shawn">
              shawn
            </div>
            <div className="shawn-mendes">
              Shawn Mendes
            </div>
            <div className="shawngmail-com">
              shawn@gmail.com
            </div>
            <div className="customer">
              Customer
            </div>
          </div>
          <div className="container-11">
            <div className="junkyu">
              junkyu
            </div>
            <div className="kim-junkyu">
              Kim Junkyu
            </div>
            <div className="junkyugmail-com">
              junkyu@gmail.com
            </div>
            <div className="customer-1">
              Customer
            </div>
          </div>
          <div className="container-9">
            <div className="taylor">
              taylor
            </div>
            <div className="taylor-swift">
              Taylor Swift
            </div>
            <div className="taylorgmail-com">
              taylor@gmail.com
            </div>
            <div className="customer-2">
              Customer
            </div>
          </div>
          <div className="container-4">
            <div className="tiara">
              tiara
            </div>
            <div className="tiara-andini">
              Tiara Andini
            </div>
            <div className="tiaragmail-com">
              tiara@gmail.com
            </div>
            <div className="admin">
              Admin
            </div>
          </div>
          <div className="container-13">
            <div className="jay-1">
              jay
            </div>
            <div className="jay">
              Jay
            </div>
            <div className="jaygmail-com">
              jay@gmail.com
            </div>
            <div className="customer-3">
              Customer
            </div>
          </div>
          <div className="container-1">
            <div className="riri">
              riri
            </div>
            <div className="hanifah-salsabila">
              Hanifah Salsabila
            </div>
            <div className="ririgmail-com">
              riri@gmail.com
            </div>
            <div className="admin-1">
              Admin
            </div>
          </div>
          <div className="container-6">
            <div className="raisa">
              raisa
            </div>
            <div className="fakhira-ammara">
              Fakhira Ammara
            </div>
            <div className="raisagmail-com">
              raisa@gmail.com
            </div>
            <div className="admin-2">
              Admin
            </div>
          </div>
          <div className="container-2">
            <div className="mila">
              mila
            </div>
            <div className="jamilatul">
              Jamilatul
            </div>
            <div className="milagmail-com">
              mila@gmail.com
            </div>
            <div className="admin-3">
              Admin
            </div>
          </div>
          <div className="container-10">
            <div className="ais">
              ais
            </div>
            <div className="fadhila-aisyah">
              Fadhila Aisyah
            </div>
            <div className="aisyahgmail-com">
              aisyah@gmail.com
            </div>
            <div className="admin-4">
              Admin
            </div>
          </div>
        </div>
      </div>
    </div>

<style>
    .data-user {
    background: #FFFFFF;
    display: flex;
    flex-direction: row;
    width: 1280px;
    box-sizing: border-box;
    }
    .data-user .balkot-1 {
    background: url('assets/images/Balkot4.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .data-user .rectangle-2 {
    background: rgba(0, 0, 0, 0.51);
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .data-user .logo-rev-1 {
    background: url('assets/images/LogoRev1.png') 50% / cover no-repeat;
    margin: 0 12.9px 56px 0;
    width: 114px;
    height: 81px;
    }
    .data-user .dashboard {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .data-user-1 {
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 35px;
    color: #FFFFFF;
    }
    .data-user .check-out-lastest-updates {
    margin-bottom: 41px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #FFFFFF;
    }
    .data-user .data-user-2 {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .ulasan-customer {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .data-pesanan {
    margin: 0 0 33px 19.6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .profile {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .logout {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-user .vector {
    width: 20px;
    height: 20px;
    }
    .data-user .vector-1 {
    width: 20px;
    height: 20px;
    }
    .data-user .vector-2 {
    width: 20px;
    height: 20px;
    }
    .data-user .vector-3 {
    width: 20px;
    height: 20px;
    }
    .data-user .vector-4 {
    margin-bottom: 4px;
    width: 20px;
    height: 16px;
    }
    .data-user .group-83 {
    border-radius: 12px;
    background: #FFFFFF;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 18px 0 7px 0;
    width: fit-content;
    box-sizing: border-box;
    }
    .data-user .user-name-nama-lengkap-email-role {
    margin: 0 51.5px 12px 16px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #000000;
    }
    .data-user .shawn {
    margin: 0 9.5px 2px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .shawn-mendes {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .shawngmail-com {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .customer {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .customer-1 {
    margin: 5px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .customer-2 {
    margin: 4px 0 2px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .admin {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .customer-3 {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .admin-1 {
    margin-bottom: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .admin-2 {
    margin-bottom: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .admin-3 {
    margin-bottom: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .admin-4 {
    margin-bottom: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .junkyugmail-com {
    margin-top: 6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .taylorgmail-com {
    margin-top: 6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .tiaragmail-com {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .jaygmail-com {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .ririgmail-com {
    margin: 2px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .raisagmail-com {
    margin-bottom: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .milagmail-com {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .aisyahgmail-com {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .kim-junkyu {
    margin: 2px 0 4px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .taylor-swift {
    margin: 2px 0 4px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .tiara-andini {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .jay {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .hanifah-salsabila {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .fakhira-ammara {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .jamilatul {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .fadhila-aisyah {
    margin-top: 3px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .junkyu {
    margin: 0 9.5px 6px 0;
    display: inline-block;
    width: 134.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .taylor {
    margin: 0 9.5px 6px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .tiara {
    margin: 0 9.5px 2px 0;
    display: inline-block;
    width: 134.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .jay-1 {
    margin: 0 9.5px 2px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .riri {
    margin: 0 9.5px 3px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .raisa {
    margin: 1px 9.5px 2px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .mila {
    margin: 1px 9.5px 2px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .ais {
    margin: 1px 9.5px 2px 0;
    display: inline-block;
    width: 135.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-user .container {
    margin: 0 73.9px 26px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 89px;
    box-sizing: border-box;
    }
    .data-user .container-1 {
    margin: 0 44.4px 14px 16px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 529.6px;
    box-sizing: border-box;
    }
    .data-user .container-2 {
    margin: 0 44.4px 14px 16px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 529.6px;
    box-sizing: border-box;
    }
    .data-user .container-3 {
    margin-right: 70.7px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 92.1px;
    box-sizing: border-box;
    }
    .data-user .container-4 {
    margin: 0 44.4px 15px 17px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 528.6px;
    box-sizing: border-box;
    }
    .data-user .container-5 {
    margin: 0 43.5px 33px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 119.3px;
    box-sizing: border-box;
    }
    .data-user .container-6 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 13px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 13px 44.4px 14px 16px;
    width: 590px;
    box-sizing: border-box;
    }
    .data-user .container-7 {
    margin: 0 49.8px 32px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 113.1px;
    box-sizing: border-box;
    }
    .data-user .container-8 {
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
    .data-user .container-9 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 13px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 10px 25.5px 14px 16px;
    width: 590px;
    box-sizing: border-box;
    }
    .data-user .container-10 {
    background: #F9E8D9;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 13px 44.4px 14px 16px;
    width: 590px;
    box-sizing: border-box;
    }
    .data-user .container-11 {
    margin: 0 25.5px 12px 17px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 547.5px;
    box-sizing: border-box;
    }
    .data-user .container-12 {
    position: relative;
    margin: 66px 0 120px 0;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    }
    .data-user .container-13 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 13px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 15px 25.5px 13px 16px;
    width: 590px;
    box-sizing: border-box;
    }
    .data-user .container-14 {
    margin-bottom: 243px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 162.9px;
    box-sizing: border-box;
    }
    .data-user .container-15 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 12px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 14px 25.5px 14px 16px;
    width: 590px;
    box-sizing: border-box;
    }
</style>