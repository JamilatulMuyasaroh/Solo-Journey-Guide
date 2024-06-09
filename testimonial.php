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
    <title>Tourist - Travel Agency HTML Template</title>
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Jebres, Surakarta</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+62 123 4567 8910</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>soloJG@gmail.com</small>
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
                    <a href="package.php" class="nav-item nav-link">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="destination.php" class="dropdown-item">Destination</a>
                            <a href="booking.php" class="dropdown-item">Booking</a>
                            <a href="team.php" class="dropdown-item">Team</a>
                            <a href="testimonial.php" class="dropdown-item active">Testimonial</a>
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
                        <h1 class="display-3 text-white animated slideInDown">Testimonial</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.3s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center px-3" style="color: var(--primary);">Testimonial</h6>
            <h1 class="mb-5" style="color: #527853;">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <!-- Testimonials go here -->
        </div>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Jake</h5>
                <p>Bandung, Jawa Barat</p>
                <p class="mt-2 mb-0 flex-grow-1">Paket 2 sangat memuaskan! Keraton Surakarta selalu menakjubkan, dan Museum Tumurun menambahkan perspektif seni modern yang menarik. Pasar Klewer penuh dengan kehidupan, makanan enak, dan banyak tempat untuk berbelanja. Sangat berkesan!</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Taylor</h5>
                <p>Malang, Jawa Timur</p>
                <p class="mt-2 mb-0 flex-grow-1">Paket 7 benar-benar paket yang lengkap! Pasar Klewer sangat ramai dengan barang-barang murah, Pura Mangkunegaran sangat elegan, dan belajar batik di Kampung Batik Kauman adalah pengalaman yang sangat berharga. Kita juga mengunjungi Museum Tumurun sangatlah menakjubkan. Pasti akan merekomendasikan paket ini kepada teman-teman saya.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Junkyu</h5>
                <p>Bekasi, Jawa Barat</p>
                <p class="mt-2 mb-0 flex-grow-1">Saya besama teman-teman memesan paket 11 memberikan pengalaman yang lengkap dan bervariasi. Dari sejarah di Keraton Surakarta dan Pura Mangkunegaran hingga pengalaman unik dengan Kereta Api Jalandra, semuanya sangat mengesankan. Gedung Djoeang 45 juga menawarkan banyak informasi sejarah yang menarik. Dan berbelanja di Pasar Klewer yang barangnya kualitas baik dengan harga yang terjangkau.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Nadin Amizah</h5>
                <p>Surakarta, Jawa tengah</p>
                <p class="mt-2 mb-0 flex-grow-1">Saya sangat menikmati Paket 5. Museum Batik Danar Hadi memiliki koleksi yang luar biasa, dan Taman Sriwedari adalah tempat yang indah untuk bersantai. Mengunjungi salah satu keraton yang berada di Solo tepatnya bernama Keraton Surakarta (Kesunanan) yang sangat historical. Terima kasih kepada tim travel yang telah membuat perjalanan ini sangat menyenangkan!</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-5.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Shawn Mendes</h5>
                <p>Bekasi, Jawa Barat</p>
                <p class="mt-2 mb-0 flex-grow-1">Paket 6 menawarkan kombinasi sempurna antara sejarah, belanja, dan rekreasi. Pura Mangkunegaran sangat indah, dan Pasar Klewer penuh dengan barang-barang menarik. Mengakhiri hari di Taman Balekambang sangat menyenangkan.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-6.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Jay</h5>
                <p>Surabaya</p>
                <p class="mt-2 mb-0 flex-grow-1">Paket 14 adalah perjalanan yang sangat memuaskan. Museum Batik Danar Hadi memiliki koleksi yang luar biasa, dan Solo Safari adalah pengalaman yang sangat menyenangkan untuk anak-anak. Masjid Raya Sheikh Zayed sangat mengesankan. Saya juga berbelanja di Pasar Klewer yang tempatnya bersih dan pedagangnya ramah. Santai sore menikmati suasana solo di Taman Balekambang sangatlah menenangkan.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4 h-100 d-flex flex-column">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-7.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Tiara Andini</h5>
                <p>Tegal, Jawa Tengah</p>
                <p class="mt-2 mb-0 flex-grow-1">Paket 15 benar-benar berkesan! Belajar membatik di Kampung Batik Kauman adalah pengalaman yang sangat berharga, dan pertunjukan di Gedung Wayang Orang Sriwedari sangat memukau. Mencoba berbagai kuliner di Pasar Gede dan tidak lupa berbelanja oleh-oleh. Tempat unik nan menawan di Lokananta Bloc dapat bersantai, menikmati suasana sambil menyantap sajian yang dipesan. Mendapat informasi baru mengenai artefak sejarah di Gedung Djoeang 45. Terima kasih untuk perjalanan yang luar biasa!</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Testimonial Form Start -->  
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="form-testi p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">TESTIMONI</h6>
                    <h1 class="text-white mb-4">Beri Kami Testimoni</h1>
                    <p class="mb-4" style="text-align: justify;">Kami menghargai setiap masukan dari Anda. Silakan tuliskan komentar dan pengalaman Anda bersama kami di bawah ini. Kami selalu berusaha untuk memberikan layanan terbaik bagi pelanggan kami.</p>
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Tulis Testimoni</h1>
                    <form id="bookingForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Nama Lengkap</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">                                        
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Tulis Komentar</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="button" onclick="submitForm()">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitForm() {
        alert("Terkirim!");
    }
</script>
<!-- Testimonial Form End -->
        

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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jebres, Surakarta</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 123 4567 8910</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>soloJG@gmail.com</p>
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
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
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