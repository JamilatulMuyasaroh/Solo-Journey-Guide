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

?>
    <div className="profile">
      <div className="balkot-1">
      </div>
      <div className="rectangle-2">
      </div>
      <div className="container-4">
        <div className="logo-rev-1">
        </div>
        <div className="container-5">
          <img className="vector-1" src="assets/vectors/Vector152_x2.svg" />
          <span className="dashboard">
            Dashboard
          </span>
        </div>
        <div className="data-pesanan">
          Data Pesanan
        </div>
        <div className="container-3">
          <img className="vector-4" src="assets/vectors/Vector660_x2.svg" />
          <span className="data-user">
            Data User
          </span>
        </div>
        <div className="container-1">
          <img className="vector-3" src="assets/vectors/Vector122_x2.svg" />
          <span className="ulasan-customer">
            Ulasan Customer
          </span>
        </div>
        <div className="container-6">
          <img className="vector" src="assets/vectors/Vector680_x2.svg" />
          <span className="profile-2">
            Profile
          </span>
        </div>
        <div className="container">
          <img className="vector-2" src="assets/vectors/Vector926_x2.svg" />
          <span className="logout">
            Logout
          </span>
        </div>
      </div>
      <div className="container-7">
        <span className="profile-1">
          Profile
        </span>
        <div className="here-is-your-profile-data">
          Here is your profile data
        </div>
        <div className="group-65">
          <div className="container-2">
            <img className="ellipse-11" src="assets/vectors/Ellipse1121_x2.svg" />
            <div className="tiara-andini">
              Tiara Andini
            </div>
          </div>
          <span className="tiara-tiaragmail-com-6285123456789-jakarta-indonesia">
            tiara<br />
            tiara@gmail.com<br />
            +6285123456789<br />
            Jakarta, Indonesia
          </span>
        </div>
      </div>
    </div>
  )
}

<style>
    .profile {
    background: #FFFFFF;
    display: flex;
    flex-direction: row;
    padding-right: 50px;
    width: 1280px;
    box-sizing: border-box;
    }
    .profile .balkot-1 {
    background: url('assets/images/Balkot4.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .profile .rectangle-2 {
    background: rgba(0, 0, 0, 0.51);
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .profile .logo-rev-1 {
    background: url('assets/images/LogoRev1.png') 50% / cover no-repeat;
    margin: 0 12.8px 56px 0;
    width: 114px;
    height: 81px;
    }
    .profile .dashboard {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .profile-1 {
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 35px;
    color: #FFFFFF;
    }
    .profile .here-is-your-profile-data {
    margin-bottom: 65px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #FFFFFF;
    }
    .profile .data-user {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .ulasan-customer {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .data-pesanan {
    margin: 0 0 33px 19.6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .profile-2 {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .logout {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .profile .vector {
    width: 20px;
    height: 20px;
    }
    .profile .vector-1 {
    width: 20px;
    height: 20px;
    }
    .profile .vector-2 {
    width: 20px;
    height: 20px;
    }
    .profile .vector-3 {
    width: 20px;
    height: 20px;
    }
    .profile .vector-4 {
    margin-bottom: 4px;
    width: 20px;
    height: 16px;
    }
    .profile .group-65 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    padding: 27px 36.3px 49.2px 36.3px;
    width: fit-content;
    box-sizing: border-box;
    }
    .profile .tiara-andini {
    margin-bottom: 75.5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 32px;
    color: #527853;
    }
    .profile .tiara-tiaragmail-com-6285123456789-jakarta-indonesia {
    position: absolute;
    left: 179.4px;
    bottom: 38.7px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #527853;
    }
    .profile .ellipse-11 {
    margin: 10px 26.6px 0 0;
    width: 115.4px;
    height: 112.5px;
    }
    .profile .container {
    margin-right: 70.7px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 92.1px;
    box-sizing: border-box;
    }
    .profile .container-1 {
    margin-bottom: 243px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 162.8px;
    box-sizing: border-box;
    }
    .profile .container-2 {
    position: relative;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .profile .container-3 {
    margin: 0 49.8px 32px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 113.1px;
    box-sizing: border-box;
    }
    .profile .container-4 {
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
    .profile .container-5 {
    margin: 0 43.5px 33px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 119.3px;
    box-sizing: border-box;
    }
    .profile .container-6 {
    margin: 0 73.9px 26px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 89px;
    box-sizing: border-box;
    }
    .profile .container-7 {
    position: relative;
    margin: 66px 0 397.3px 0;
    display: flex;
    flex-direction: column;
    width: 947px;
    box-sizing: border-box;
    }
</style>