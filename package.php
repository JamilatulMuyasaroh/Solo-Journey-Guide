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
    <meta charset="utf-8">
    <title>Solo Journey Guide</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>>Kota Surakarta, Jawa Tengah, Indonesia</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 123 4567 8910</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>infojourneyguide@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="img/logooo.png" alt="Logo" class="enlarge-image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="package.php" class="nav-item nav-link active">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item">Destination</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                            <a href="team.php" class="dropdown-item">Team</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="logout.php" class="btn btn-primary rounded-pill py-2 px-4">Logout</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
        <!-- Package Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3" style="color: var(--primary);">Packages</h6>
                    <h1 class="mb-5" style="color: #527853;">Awesome Packages</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <!-- Package Item Start -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-1.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 1
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 1 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 295.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pasar Gede, Museum Keris, Keraton Surakarta (Kesunanan)</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Pasar Gede Hardjonagoro, museum keris, dan Keraton Surakarta Hadiningrat menawarkan pengalaman menyeluruh di Solo. Pasar Gede adalah pasar tradisional terbesar dengan berbagai produk lokal dan kuliner khas seperti nasi liwet dan es dawet telasih. Museum Keris menyimpan lebih dari 400 koleksi keris, menjelaskan proses pembuatannya dan menampilkan keindahan seni tradisional ini. Keraton Surakarta, istana resmi Kesunanan Surakarta, menawarkan wawasan mendalam tentang sejarah dan kebudayaan Jawa melalui koleksi benda-benda kerajaan dan upacara adat yang masih dilestarikan. \n')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-2.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 2
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 1 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 295.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Keraton Surakarta (Kesunanan), Museum Tumurun, Pasar Klewer</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert(' Keraton Surakarta Hadiningrat, Museum Tumurun, dan Pasar Klewer memberikan perpaduan sejarah, seni kontemporer, dan belanja batik. Di Keraton Surakarta, pengunjung bisa menikmati keindahan arsitektur Jawa dan mempelajari budaya kerajaan. Museum Tumurun menampilkan seni modern dan kontemporer dengan karya-karya dari seniman lokal dan internasional. Pasar Klewer, pusat batik terbesar di Solo, menawarkan berbagai jenis batik dengan harga terjangkau, menjadikannya tempat ideal untuk berbelanja oleh-oleh.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-3.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 3
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 1 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 295.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Keraton Surakarta (Kesunanan), Pasar Triwindu, Masjid Raya Sheikh Zayed</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Keraton Surakarta Hadiningrat, Pasar Triwindu, dan Masjid Raya Sheikh Zayed menyuguhkan wisata sejarah, barang antik, dan keindahan arsitektur Islam. Keraton Surakarta memberikan wawasan tentang sejarah dan budaya Jawa. Pasar Triwindu adalah surga bagi pecinta barang antik dengan berbagai koleksi unik dari masa lalu. Masjid Raya Sheikh Zayed menampilkan arsitektur megah dengan ornamen indah, mencerminkan toleransi dan persahabatan antara Indonesia dan Uni Emirat Arab.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-4.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 4
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 1 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 295.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Keraton Surakarta (Kesunanan), Kampung Batik Kauman, Museum Keris</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Keraton Surakarta Hadiningrat, Kampung Batik Kauman, dan Museum Keris Solo menyajikan wisata sejarah, seni batik, dan keindahan keris. Di Keraton Surakarta, pengunjung bisa mengeksplorasi sejarah Jawa. Kampung Batik Kauman memungkinkan pengunjung melihat proses pembuatan batik dan bahkan mencoba membuatnya sendiri. Museum Keris Solo menyimpan lebih dari 400 keris, memperlihatkan proses pembuatan dan keindahan seni tradisional ini.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-5.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 5
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 1 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 295.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Keraton Surakarta (Kesunanan), Museum Batik Danar Hadi, Taman Sriwedari</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Keraton Surakarta Hadiningrat, Museum Batik Danar Hadi, dan Taman Sriwedari menawarkan pengalaman budaya, sejarah batik, dan rekreasi. Keraton Surakarta menampilkan sejarah dan budaya Jawa yang megah. Museum Batik Danar Hadi menyimpan koleksi batik terbesar di Indonesia, menampilkan proses pembuatannya dan sejarah perkembangan batik. Taman Sriwedari, tempat rekreasi legendaris, menawarkan berbagai fasilitas rekreasi dan pertunjukan seni, menjadikannya tempat yang cocok untuk bersantai bersama keluarga..')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-6.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 6
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 2 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 345.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pura Mangkunegaran, Keraton Surakarta (Kesunanan), Taman Balekambang, Pasar Klewer </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Kunjungi Keraton Surakarta Hadiningrat, istana megah yang didirikan tahun 1744 dan menyimpan berbagai koleksi kerajaan Jawa, serta saksikan upacara adat dan festival budaya. Nikmati keindahan alam dan sejarah di Taman Balekambang, dengan fasilitas taman bunga, danau buatan, dan pertunjukan seni. Berbelanja batik di Pasar Klewer, pusat tekstil terbesar di Solo, yang menawarkan berbagai jenis batik dengan harga terjangkau.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-7.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 7
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 2 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 345.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pasar Klewer, Museum Tumurun, Kampung Batik Kauman, Pura Mangkunegaran </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Eksplorasi budaya Jawa di Pura Mangkunegaran, istana berarsitektur Jawa dan Eropa, dengan koleksi seni dan kegiatan budaya yang beragam. Belanja batik di Pasar Klewer, pusat tekstil terbesar di Solo, dengan koleksi batik yang luas dan harga yang dapat dinegosiasikan. Kunjungi Museum Tumurun untuk menikmati seni kontemporer dari seniman lokal dan internasional dalam suasana yang elegan. Pelajari pembuatan batik di Kampung Batik Kauman dan cobalah membuat batik sendiri dalam workshop yang tersedia.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-8.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 8
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 2 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 345.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pura Mangkunegaran, Night Market Ngarsopuro, Lokananta Bloc, Pasar Klewer </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Nikmati keindahan Pura Mangkunegaran, istana megah yang memadukan arsitektur Jawa dan Eropa, serta berbagai koleksi seni. Belanja batik di Pasar Klewer yang terkenal dengan koleksi batik luas dan harga terjangkau. Kunjungi Night Market Ngarsopuro, pasar malam yang meriah dengan beragam barang dan kuliner lokal, serta hiburan musik dan seni. Jelajahi Lokananta Bloc, bekas studio rekaman legendaris yang kini menjadi kompleks wisata kreatif dengan galeri musik, kafe, dan ruang pertunjukan.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-9.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 9
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 2 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 345.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pura Mangkunegaran, The Heritage Palace, Pasar Gede, Taman Sriwedari</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Jelajahi Pura Mangkunegaran dengan arsitektur megah dan koleksi seni budaya yang kaya. Nikmati pengalaman unik di The Heritage Palace, bekas pabrik gula dengan arsitektur kolonial yang kini menampilkan museum 3D dan taman indah. Rasakan suasana tradisional di Pasar Gede, pasar terbesar di Solo yang menawarkan berbagai produk lokal dan kuliner khas. Bersantai di Taman Sriwedari, taman kota legendaris yang sering menggelar pertunjukan seni dan memiliki fasilitas rekreasi yang lengkap.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-10.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 10
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 2 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 345.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Solo Safari, Masjid Raya Sheikh Zayed, Pasar Gede, Pura Mangkunegaran </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Kunjungi Pura Mangkunegaran, istana berarsitektur Jawa dan Eropa dengan koleksi seni dan budaya yang kaya. Nikmati pengalaman keluarga di Solo Safari, kebun binatang dengan berbagai satwa dan wahana permainan anak. Kagumi arsitektur megah Masjid Raya Sheikh Zayed, simbol persahabatan Indonesia dan UEA, yang juga berfungsi sebagai pusat kegiatan sosial dan budaya. Berbelanja di Pasar Gede, pasar tradisional terbesar di Solo yang menawarkan produk lokal dan kuliner khas.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-11.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 11
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 3 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 375.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pura Mangkunegaran, Pasar Klewer, Keraton Surakarta (Kesunanan), Kereta Api Jalandra, Gedung Djoeang 45</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Jelajahi keindahan Pura Mangkunegaran, sebuah istana megah dengan arsitektur Jawa dan Eropa, penuh koleksi seni dan budaya. Lalu, kunjungi Pasar Klewer, pusat perdagangan batik terbesar di Solo, dengan berbagai pilihan batik dan produk-produk batik jadi. Nikmati juga Keraton Surakarta Hadiningrat, istana bersejarah dengan koleksi kerajaan dan berbagai acara adat. Terakhir, pengalaman unik di Kereta Api Jalandra yang menawarkan pemandangan indah dan nostalgia perjalanan kereta klasik, serta Gedung Djoeang 45, situs sejarah perjuangan kemerdekaan Indonesia.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-12.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 12
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 3 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 375.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Museum Keris, Pasar Gede, Waterpark Tirtamas Summerland, Keraton Surakarta (Kesunanan), Taman Sriwedari</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Jelajahi Pasar Gede Hardjonagoro, pasar tradisional terbesar di Solo yang kaya akan produk lokal dan kuliner khas. Selanjutnya, kunjungi Keraton Surakarta Hadiningrat dengan kekayaan budaya dan sejarah Jawa. Museum Keris Solo menampilkan koleksi keris dari seluruh Indonesia, memperlihatkan proses pembuatan dan filosofinya. Selain itu, nikmati kegembiraan di Waterpark Tirtamas Summerland yang penuh wahana air menarik, dan relaksasi di Taman Sriwedari yang hijau dan bersejarah.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-13.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 13
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 3 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 375.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Pandawa Water Land, Museum Tumurun, Masjid Raya Sheikh Zayed, Pasar Gede, The Heritage Palace</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Nikmati kemegahan Masjid Raya Sheikh Zayed dengan arsitektur Islam yang menawan dan kegiatan sosial budaya yang aktif. Kemudian, kunjungi Pasar Gede Hardjonagoro untuk merasakan pasar tradisional Solo dengan berbagai produk lokal dan kuliner. Jelajahi The Heritage Palace yang memadukan arsitektur kolonial dengan atraksi modern. Pandawa Water Land menawarkan wahana air yang menyenangkan di alam yang asri. Akhiri dengan Museum Tumurun, tempat seni kontemporer dengan koleksi karya lokal dan internasional.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-14.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 14
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 3 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 375.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Museum Batik Danar Hadi, Masjid Raya Sheikh Zayed, Solo Safari, Pasar Klewer, Taman Balekambang </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Kunjungi Solo Safari, tempat yang menyenangkan untuk melihat berbagai satwa dan belajar tentang konservasi. Lanjutkan dengan mengagumi Masjid Raya Sheikh Zayed, simbol persahabatan Indonesia dan UEA. Berbelanja batik di Pasar Klewer dengan koleksi yang beragam dan harga terjangkau. Taman Balekambang menawarkan keindahan alam dan acara budaya di taman yang tenang. Terakhir, kunjungi Museum Batik Danar Hadi dengan koleksi batik terbesar dan pengetahuan mendalam tentang sejarah batik.')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/package-15.png" alt="">
                            </div>
                            <div class="d-flex border-bottom">
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-map-marker-alt" style="color: #527853;"></i> Paket 15
                                </small>
                                <small class="flex-fill text-center border-end py-2">
                                    <i class="fa fa-calendar-alt" style="color: #527853;"></i> 3 hari
                                </small>
                                <small class="flex-fill text-center py-2">
                                    <i class="fa fa-user" style="color: #527853;"></i> 1-3 orang
                                </small>
                            </div>
                            <div class="text-center p-4">
                                <h3 class="mb-0">Rp 375.000,-</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                    <small class="fa fa-star" style="color: #527853;"></small>
                                </div>
                                <p>Taman Sriwedari, Kampung Batik Kauman, Pasar Gede, Lokananta Bloc, Gedung Djoeang 45</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="#" class="btn btn-sm btn-primary px-3 border-end" 
                                    style="border-radius: 30px 0 0 30px;" 
                                    onclick="alert('Kunjungi Pasar Gede Hardjonagoro, pasar tradisional terbesar dengan suasana yang ramai dan produk lokal yang melimpah. Jelajahi Gedung Djoeang 45, situs sejarah perjuangan kemerdekaan dengan berbagai artefak bersejarah. Taman Sriwedari menyediakan tempat rekreasi yang hijau dan pertunjukan seni. Di Kampung Batik Kauman, Anda bisa melihat langsung proses pembuatan batik dan membeli batik dari pembuatnya. Terakhir, kunjungi Lokananta Bloc, kompleks wisata kreatif yang dulunya adalah studio rekaman legendaris dengan berbagai atraksi seni dan musik.4')">Read More</a>
                                    <a href="booking.php" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function showAlert(destinasi1, destinasi2, destinasi3, destinasi4) {
                            alert(`Destinasi: ${destinasi1}`);
                        }
                    </script>   
            <!-- Package End -->
<!-- Process Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3" style="color: var(--primary);">Process</h6>
            <h1 class="mb-5" style="color: #527853;">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px; background-color: #527853;">
                        <i class="fa fa-car fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Choose A Destination</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Telusuri berbagai paket wisata menarik yang kami tawarkan dan pilih destinasi yang paling sesuai dengan minat Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px; background-color: #527853;">
                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Payment</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Selesaikan pembayaran dengan mudah melalui berbagai metode yang kami sediakan, aman dan cepat.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px; background-color: #527853;">
                        <i class="fa fa-car fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Enjoy your trip</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Bersiaplah untuk menikmati pengalaman perjalanan yang tak terlupakan di berbagai destinasi pilihan Anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Process Start -->
<!-- Process End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kota Surakarta, Jawa Tengah, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 123 4567 8910</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>infojourneyguide@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-1.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-2.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-3.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-4.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-5.png" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="img/galeri-6.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Petualangan solo terbaik di Solo Journey Guide!</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Solo Journey Guide</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="#team-section">Group 8</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>