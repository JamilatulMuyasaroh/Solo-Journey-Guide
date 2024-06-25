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
    <div className="ulasan-customer">
      <div className="balkot-1">
      </div>
      <div className="rectangle-2">
      </div>
      <div className="container-5">
        <div className="logo-rev-1">
        </div>
        <div className="container-2">
          <img className="vector-1" src="assets/vectors/Vector527_x2.svg" />
          <span className="dashboard">
            Dashboard
          </span>
        </div>
        <div className="data-pesanan">
          Data Pesanan
        </div>
        <div className="container-3">
          <img className="vector-4" src="assets/vectors/Vector177_x2.svg" />
          <span className="data-user">
            Data User
          </span>
        </div>
        <div className="container-8">
          <img className="vector-3" src="assets/vectors/Vector877_x2.svg" />
          <span className="ulasan-customer-1">
            Ulasan Customer
          </span>
        </div>
        <div className="container">
          <img className="vector" src="assets/vectors/Vector508_x2.svg" />
          <span className="profile">
            Profile
          </span>
        </div>
        <div className="container-6">
          <img className="vector-2" src="assets/vectors/Vector881_x2.svg" />
          <span className="logout">
            Logout
          </span>
        </div>
      </div>
      <div className="container-7">
        <span className="testimoni-customer">
          Testimoni Customer
        </span>
        <div className="check-out-lastest-updates">
          Check Out lastest updates
        </div>
        <div className="group-84">
          <div className="shawn-mendes">
            Shawn Mendes
          </div>
          <span className="paket-6-menawarkan-kombinasi-sempurna-antara-sejarah-belanja-dan-rekreasi-pura-mangkunegaran-sangat-indah-dan-pasar-klewer-penuh-dengan-barang-barang-menarik-mengakhiri-hari-di-taman-balekambang-sangat-menyenangkan">
            &#34;Paket 6 menawarkan kombinasi sempurna antara sejarah, belanja, dan rekreasi. Pura Mangkunegaran sangat indah, dan Pasar Klewer penuh dengan barang-barang menarik. Mengakhiri hari di Taman Balekambang sangat menyenangkan.&#34;
          </span>
        </div>
        <div className="group-86">
          <span className="kim-junkyu">
            Kim Junkyu
          </span>
          <span className="paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-1">
            &#34;Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!&#34;
          </span>
        </div>
      </div>
      <div className="container-1">
        <div className="group-85">
          <span className="sim-jaeyun">
            Sim Jaeyun
          </span>
          <span className="paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan">
            &#34;Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!&#34;
          </span>
        </div>
        <div className="group-87">
          <span className="nadin-amizah">
            Nadin Amizah
          </span>
          <span className="paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-2">
            &#34;Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!&#34;
          </span>
        </div>
      </div>
      <div className="container-4">
        <div className="group-88">
          <span className="tiara-andini">
            Tiara Andini
          </span>
          <span className="paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-3">
            &#34;Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!&#34;
          </span>
        </div>
        <div className="group-89">
          <span className="taylor-swift">
            Taylor Swift
          </span>
          <span className="paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-4">
            &#34;Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!&#34;
          </span>
        </div>
      </div>
    </div>

<style>
    .ulasan-customer {
    background: #FFFFFF;
    display: flex;
    flex-direction: row;
    padding-right: 59px;
    width: 1280px;
    box-sizing: border-box;
    }
    .ulasan-customer .balkot-1 {
    background: url('assets/images/Balkot4.jpeg') 50% / cover no-repeat;
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .ulasan-customer .rectangle-2 {
    background: rgba(0, 0, 0, 0.51);
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    height: 100%;
    }
    .ulasan-customer .logo-rev-1 {
    background: url('assets/images/LogoRev1.png') 50% / cover no-repeat;
    margin: 0 12.9px 56px 0;
    width: 114px;
    height: 81px;
    }
    .ulasan-customer .dashboard {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .testimoni-customer {
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 35px;
    color: #FFFFFF;
    }
    .ulasan-customer .group-84 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin: 0 30.8px 27px 1px;
    display: flex;
    flex-direction: column;
    padding: 10.4px 0 36.8px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .shawn-mendes {
    margin: 0 0 0.8px 17.1px;
    display: inline-block;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-6-menawarkan-kombinasi-sempurna-antara-sejarah-belanja-dan-rekreasi-pura-mangkunegaran-sangat-indah-dan-pasar-klewer-penuh-dengan-barang-barang-menarik-mengakhiri-hari-di-taman-balekambang-sangat-menyenangkan {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .group-85 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin-bottom: 27px;
    display: flex;
    flex-direction: column;
    padding: 9px 0 21px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .sim-jaeyun {
    margin-left: 12.2px;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .group-86 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin-right: 31.8px;
    display: flex;
    flex-direction: column;
    padding: 9px 0 21px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .kim-junkyu {
    margin-left: 12.2px;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-1 {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .group-87 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    display: flex;
    flex-direction: column;
    padding: 9px 0 21px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .nadin-amizah {
    margin-left: 12.2px;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-2 {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .group-88 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin: 0 1px 27px 0;
    display: flex;
    flex-direction: column;
    padding: 9px 0 21px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .tiara-andini {
    margin-left: 12.2px;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-3 {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .group-89 {
    border-radius: 20px;
    background: #FFFFFF;
    position: relative;
    margin-left: 1px;
    display: flex;
    flex-direction: column;
    padding: 9px 0 21px 21px;
    width: fit-content;
    box-sizing: border-box;
    }
    .ulasan-customer .taylor-swift {
    margin-left: 12.2px;
    align-self: center;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 700;
    font-size: 18px;
    color: #527853;
    }
    .ulasan-customer .paket-2-sangat-memuaskan-keraton-surakarta-selalu-menakjubkan-dan-museum-tumurun-menambahkan-perspektif-seni-modern-yang-menarik-pasar-klewer-penuh-dengan-kehidupan-makanan-enak-dan-banyak-tempat-untuk-berbelanja-sangat-berkesan-4 {
    align-self: flex-start;
    text-align: justify;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 400;
    font-size: 12px;
    color: #EE7214;
    }
    .ulasan-customer .check-out-lastest-updates {
    margin-bottom: 64px;
    display: inline-block;
    align-self: flex-start;
    overflow-wrap: break-word;
    font-family: 'Heebo';
    font-weight: 500;
    font-size: 15px;
    color: #FFFFFF;
    }
    .ulasan-customer .data-user {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .ulasan-customer-1 {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .data-pesanan {
    margin: 0 0 33px 19.6px;
    display: inline-block;
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .profile {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .logout {
    overflow-wrap: break-word;
    font-family: 'Nunito';
    font-weight: 700;
    font-size: 15px;
    color: #527853;
    }
    .ulasan-customer .vector {
    width: 20px;
    height: 20px;
    }
    .ulasan-customer .vector-1 {
    width: 20px;
    height: 20px;
    }
    .ulasan-customer .vector-2 {
    width: 20px;
    height: 20px;
    }
    .ulasan-customer .vector-3 {
    width: 20px;
    height: 20px;
    }
    .ulasan-customer .vector-4 {
    margin-bottom: 4px;
    width: 20px;
    height: 16px;
    }
    .ulasan-customer .container {
    margin: 0 73.9px 26px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 89px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-1 {
    position: relative;
    margin: 203px 33px 206px 0;
    display: flex;
    flex-direction: column;
    width: 290px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-2 {
    margin: 0 43.5px 33px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 119.3px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-3 {
    margin: 0 49.8px 32px 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 113.1px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-4 {
    position: relative;
    margin: 203px 0 206px 0;
    display: flex;
    flex-direction: column;
    width: 291px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-5 {
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
    .ulasan-customer .container-6 {
    margin-right: 70.7px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 92.1px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-7 {
    position: relative;
    margin: 66px 2.2px 206px 0;
    display: flex;
    flex-direction: column;
    width: 321.8px;
    box-sizing: border-box;
    }
    .ulasan-customer .container-8 {
    margin-bottom: 243px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 162.9px;
    box-sizing: border-box;
    }
</style>