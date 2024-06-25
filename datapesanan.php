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

// Ambil data pesanan dari tabel pesanan
$sql_pesanan = "SELECT * FROM pesanan";
$result_pesanan = mysqli_query($conn, $sql_pesanan);
?>
    <div className="data-pesanan">
      <div className="balkot-1">
      </div>
      <div className="rectangle-2">
      </div>
      <div className="container-12">
        <div className="logo-rev-1">
        </div>
        <div className="container-6">
          <img className="vector-1" src="assets/vectors/Vector595_x2.svg" />
          <span className="dashboard">
            Dashboard
          </span>
        </div>
        <div className="data-pesanan-1">
          Data Pesanan
        </div>
        <div className="container-11">
          <img className="vector-4" src="assets/vectors/Vector198_x2.svg" />
          <span className="data-user">
            Data User
          </span>
        </div>
        <div className="container-14">
          <img className="vector-3" src="assets/vectors/Vector1022_x2.svg" />
          <span className="ulasan-customer">
            Ulasan Customer
          </span>
        </div>
        <div className="container">
          <img className="vector" src="assets/vectors/Vector1062_x2.svg" />
          <span className="profile">
            Profile
          </span>
        </div>
        <div className="container-7">
          <img className="vector-2" src="assets/vectors/Vector274_x2.svg" />
          <span className="logout">
            Logout
          </span>
        </div>
      </div>
      <div className="container-9">
        <span className="data-pesanan-customer">
          Data Pesanan Customer
        </span>
        <div className="check-out-lastest-updates">
          Check Out lastest updates
        </div>
        <div className="group-82">
          <div className="user-name-nama-lengkap-email-hari-tanggal-paket-request-bukti-pembayaran">
            UserName             Nama Lengkap               Email                   .      .     Hari/Tanggal                  Paket                Request                Bukti Pembayaran
          </div>
          <div className="container-2">
            <div className="shawn">
              shawn
            </div>
            <div className="shawn-mendes">
              Shawn Mendes
            </div>
            <div className="shawngmail-com">
              shawn@gmail.com
            </div>
            <div className="container">
              04/06/2024
            </div>
            <div className="paket-1">
              Paket 1
            </div>
            <div className="container-1">
              -
            </div>
            <div className="group-72">
              <div className="group-711">
                <img className="vector-5" src="assets/vectors/Vector134_x2.svg" />
              </div>
              <div className="group-71">
                <span className="bukti-bayar-png">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-15">
            <div className="junkyu">
              junkyu
            </div>
            <div className="kim-junkyu">
              Kim Junkyu
            </div>
            <div className="junkyugmail-com">
              junkyu@gmail.com
            </div>
            <div className="container-10">
              15/01/2024
            </div>
            <div className="paket-5">
              Paket 5
            </div>
            <div className="container-2">
              -
            </div>
            <div className="group-73">
              <div className="group-713">
                <img className="vector-6" src="assets/vectors/Vector432_x2.svg" />
              </div>
              <div className="group-712">
                <span className="bukti-bayar-png-1">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-1">
            <div className="taylor">
              taylor
            </div>
            <div className="taylor-swift">
              Taylor Swift
            </div>
            <div className="taylorgmail-com">
              taylor@gmail.com
            </div>
            <div className="container-11">
              14/02/2024
            </div>
            <div className="paket-3">
              Paket 3
            </div>
            <div className="container-3">
              -
            </div>
            <div className="group-74">
              <div className="group-715">
                <img className="vector-7" src="assets/vectors/Vector1475_x2.svg" />
              </div>
              <div className="group-714">
                <span className="bukti-bayar-png-2">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-10">
            <div className="zayn">
              Zayn
            </div>
            <div className="zayn-malik">
              Zayn Malik
            </div>
            <div className="zayngmail-com">
              zayn@gmail.com
            </div>
            <div className="container-12">
              13/06/2024
            </div>
            <div className="paket-2">
              Paket 2
            </div>
            <div className="container-4">
              -
            </div>
            <div className="group-75">
              <div className="group-717">
                <img className="vector-8" src="assets/vectors/Vector293_x2.svg" />
              </div>
              <div className="group-716">
                <span className="bukti-bayar-png-3">
                  bukti_bayar.png
                </span>
              </div>
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
            <div className="container-13">
              23/05/2024
            </div>
            <div className="paket-11">
              Paket 1
            </div>
            <div className="container-5">
              -
            </div>
            <div className="group-76">
              <div className="group-719">
                <img className="vector-9" src="assets/vectors/Vector359_x2.svg" />
              </div>
              <div className="group-718">
                <span className="bukti-bayar-png-4">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-5">
            <div className="nadin">
              nadin
            </div>
            <div className="nadin-amizah">
              Nadin Amizah
            </div>
            <div className="nadingmail-com">
              nadin@gmail.com
            </div>
            <div className="container-14">
              21/04/2024
            </div>
            <div className="paket-9">
              Paket 9
            </div>
            <div className="container-6">
              -
            </div>
            <div className="group-77">
              <div className="group-7111">
                <img className="vector-10" src="assets/vectors/Vector52_x2.svg" />
              </div>
              <div className="group-7110">
                <span className="bukti-bayar-png-5">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-8">
            <div className="jaeyun">
              jaeyun
            </div>
            <div className="sim-jaeyun">
              Sim Jaeyun
            </div>
            <div className="jaeyungmail-com">
              jaeyun@gmail.com
            </div>
            <div className="container-15">
              19/03/2024
            </div>
            <div className="paket-6">
              Paket 6
            </div>
            <div className="container-7">
              -
            </div>
            <div className="group-78">
              <div className="group-7113">
                <img className="vector-11" src="assets/vectors/Vector780_x2.svg" />
              </div>
              <div className="group-7112">
                <span className="bukti-bayar-png-6">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-3">
            <div className="tulus-1">
              tulus
            </div>
            <div className="tulus">
              Tulus
            </div>
            <div className="tulusgmail-com">
              tulus@gmail.com
            </div>
            <div className="container-16">
              12/04/2024
            </div>
            <div className="paket-4">
              Paket 4
            </div>
            <div className="container-8">
              -
            </div>
            <div className="group-79">
              <div className="group-7115">
                <img className="vector-12" src="assets/vectors/Vector949_x2.svg" />
              </div>
              <div className="group-7114">
                <span className="bukti-bayar-png-7">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
          <div className="container-4">
            <div className="yura">
              yura
            </div>
            <div className="yura-yunita">
              Yura Yunita
            </div>
            <div className="yuragmail-com">
              yura@gmail.com
            </div>
            <div className="container-17">
              30/01/2024
            </div>
            <div className="paket-31">
              Paket 3
            </div>
            <div className="container-9">
              -
            </div>
            <div className="group-80">
              <div className="group-7117">
                <img className="vector-13" src="assets/vectors/Vector1454_x2.svg" />
              </div>
              <div className="group-7116">
                <span className="bukti-bayar-png-8">
                  bukti_bayar.png
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<style>
    .data-pesanan {
    background: #FFFFFF;
    display: flex;
    flex-direction: row;
    padding-right: 41px;
    width: 1280px;
    box-sizing: border-box;
    }
    .data-pesanan .balkot-1 {
    background: url('assets/images/Balkot4.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .data-pesanan .rectangle-2 {
    background: rgba(0, 0, 0, 0.51);
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .data-pesanan .logo-rev-1 {
    background: url('assets/images/LogoRev1.png') 50% / cover no-repeat;
    margin: 0 12.9px 56px 0;
    width: 114px;
    height: 81px;
    }
    .data-pesanan .dashboard {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .data-pesanan-customer {
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 35px;
    color: #FFFFFF;
    }
    .data-pesanan .check-out-lastest-updates {
    margin-bottom: 40px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #FFFFFF;
    }
    .data-pesanan .data-user {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .ulasan-customer {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .data-pesanan-1 {
    margin: 0 0 33px 19.6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .profile {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .logout {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .data-pesanan .vector {
    width: 20px;
    height: 20px;
    }
    .data-pesanan .vector-1 {
    width: 20px;
    height: 20px;
    }
    .data-pesanan .vector-2 {
    width: 20px;
    height: 20px;
    }
    .data-pesanan .vector-3 {
    width: 20px;
    height: 20px;
    }
    .data-pesanan .vector-4 {
    margin-bottom: 4px;
    width: 20px;
    height: 16px;
    }
    .data-pesanan .group-82 {
    border-radius: 12px;
    background: #FFFFFF;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 14px 0 8px 0;
    width: fit-content;
    box-sizing: border-box;
    }
    .data-pesanan .user-name-nama-lengkap-email-hari-tanggal-paket-request-bukti-pembayaran {
    margin: 0 24px 16px 8px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #000000;
    }
    .data-pesanan .shawn {
    margin: 4px 9.5px 0 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .shawn-mendes {
    margin-top: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .shawngmail-com {
    margin-top: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container {
    margin: 1px 0 3px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-1 {
    margin: 1px 0 3px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-1 {
    margin-bottom: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-2 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-3 {
    margin-top: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-4 {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-5 {
    margin-bottom: 1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-6 {
    margin: 2px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-7 {
    margin: 4px 0 3px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-8 {
    margin: 1px 0 4px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-9 {
    margin: 1px 0 5px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-5 {
    margin: 3px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-3 {
    margin-top: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-2 {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-11 {
    margin-bottom: 1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-9 {
    margin: 2px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-6 {
    margin: 4px 0 3px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-4 {
    margin: 1px 0 4px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .paket-31 {
    margin: 1px 0 5px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-10 {
    margin-top: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-11 {
    margin: 4px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-12 {
    margin-top: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-13 {
    margin-top: 1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-14 {
    margin-top: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-15 {
    margin-top: 7px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-16 {
    margin-top: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .container-17 {
    margin-top: 6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .junkyugmail-com {
    margin-top: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .taylorgmail-com {
    margin: 4px 0 1px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .zayngmail-com {
    margin-bottom: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .jaygmail-com {
    margin-bottom: 1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .nadingmail-com {
    margin-bottom: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .jaeyungmail-com {
    margin-bottom: 7px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .tulusgmail-com {
    margin-bottom: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .yuragmail-com {
    margin-bottom: 6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .kim-junkyu {
    margin-bottom: 4px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .taylor-swift {
    margin-bottom: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .zayn-malik {
    margin-bottom: 2px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .jay {
    margin-bottom: 1px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .nadin-amizah {
    margin: 1px 0 3px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .sim-jaeyun {
    margin: 3px 0 4px 0;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .tulus {
    margin-bottom: 5px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .yura-yunita {
    margin-bottom: 6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .junkyu {
    margin: 0 9.5px 4px 0;
    display: inline-block;
    width: 110.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .taylor {
    margin: 0 9.5px 5px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .zayn {
    margin: 0 9.5px 2px 0;
    display: inline-block;
    width: 110.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .jay-1 {
    margin: 0 9.5px 1px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .nadin {
    margin: 0 9.5px 4px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .jaeyun {
    margin: 3px 9.5px 4px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .tulus-1 {
    margin: 0 9.5px 5px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .yura {
    margin: 0 9.5px 6px 0;
    display: inline-block;
    width: 111.5px;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-72 {
    margin: 2px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-71 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-711 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-5 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-73 {
    margin: 3px 0 1px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-712 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-1 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-713 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-6 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-74 {
    margin: 4px 0 1px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-714 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-2 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-715 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-7 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-75 {
    margin-bottom: 2px;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-716 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-3 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-717 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-8 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-76 {
    margin-bottom: 1px;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-718 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-4 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-719 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-9 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-77 {
    margin-bottom: 4px;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-7110 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-5 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-7111 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-10 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-78 {
    margin: 4px 0 3px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-7112 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-6 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-7113 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-11 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-79 {
    margin: 1px 0 4px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-7114 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-7 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-7115 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-12 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .group-80 {
    margin: 1px 0 5px 0;
    display: flex;
    flex-direction: row;
    box-sizing: border-box;
    }
    .data-pesanan .group-7116 {
    margin-bottom: 0px;
    display: flex;
    box-sizing: border-box;
    }
    .data-pesanan .bukti-bayar-png-8 {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 13px;
    color: #000000;
    }
    .data-pesanan .group-7117 {
    margin: 1px 3.3px 0 0;
    display: flex;
    width: 18px;
    height: 18px;
    box-sizing: border-box;
    }
    .data-pesanan .vector-13 {
    width: 18px;
    height: 18px;
    }
    .data-pesanan .container {
    margin: 0 73.9px 26px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 89px;
    box-sizing: border-box;
    }
    .data-pesanan .container-1 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 13px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 10px 30.3px 15px 8px;
    width: 956px;
    box-sizing: border-box;
    }
    .data-pesanan .container-2 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 12px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 10px 30.3px 16px 8px;
    width: 956px;
    box-sizing: border-box;
    }
    .data-pesanan .container-3 {
    margin: 0 30.3px 11px 8px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 917.7px;
    box-sizing: border-box;
    }
    .data-pesanan .container-4 {
    background: #F9E8D9;
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 14px 30.3px 10px 8px;
    width: 956px;
    box-sizing: border-box;
    }
    .data-pesanan .container-5 {
    margin: 0 30.3px 13px 8px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 917.7px;
    box-sizing: border-box;
    }
    .data-pesanan .container-6 {
    margin: 0 43.5px 33px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 119.3px;
    box-sizing: border-box;
    }
    .data-pesanan .container-7 {
    margin-right: 70.7px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 92.1px;
    box-sizing: border-box;
    }
    .data-pesanan .container-8 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 14px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 11px 30.3px 12px 8px;
    width: 956px;
    box-sizing: border-box;
    }
    .data-pesanan .container-9 {
    position: relative;
    margin: 66px 0 120px 0;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    }
    .data-pesanan .container-10 {
    margin: 0 30.3px 15px 9px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 916.7px;
    box-sizing: border-box;
    }
    .data-pesanan .container-11 {
    margin: 0 49.8px 32px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 113.1px;
    box-sizing: border-box;
    }
    .data-pesanan .container-12 {
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
    .data-pesanan .container-13 {
    background: #F9E8D9;
    position: relative;
    margin-bottom: 13px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    padding: 15px 30.3px 14px 8px;
    width: 956px;
    box-sizing: border-box;
    }
    .data-pesanan .container-14 {
    margin-bottom: 243px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 162.9px;
    box-sizing: border-box;
    }
    .data-pesanan .container-15 {
    margin: 0 30.3px 14px 9px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 916.7px;
    box-sizing: border-box;
    }
</style>