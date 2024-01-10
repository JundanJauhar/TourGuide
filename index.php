<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>


    <?php include 'nav.php'; ?>

    
    
   
 
 <!-- Carousel Start -->
 <div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/portrait-young-asian-handsome-man-with-backpack-trekking-hat-pretty-girlfriend-standing-checking-direction-paper-map-while-walking-forest-trail-backpack-travel-concept.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Guide</h4>
                        <h1 class="display-3 text-white mb-md-4">Memiliki Pengetahuan Lebih Saat Berwisata</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img\png-transparent-computer-icons-symbol-addition-plus-and-minus-signs-plus-miscellaneous-logo-plus.png" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3">Guide</h4>
                        <h1 class="display-3 text-white mb-md-4">Memiliki Pengetahuan Lebih Saat Berwisata</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->



<?php
    include 'php\koneksi.php';

    $query = "SELECT * FROM pemandu;";
    $sql = mysqli_query($koneksi, $query);
    $no = 0;
?>


<head>
  
   
    <title>Our Travel Guides</title>
</head>
<body>

    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
                <h1>Our Travel Guides</h1>
            </div>
            <div class="row">
                <!-- Loop through the guides and display them -->
<?php while ($result = mysqli_fetch_assoc($sql)) : ?>
    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
        <div class="team-item bg-white mb-4">
            <div class="team-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="img/<?php echo $result['foto']; ?>" alt="">
                <div class="team-social">
                    <!-- Add the guide's ID to the profile link -->
                    <a class="btn btn-outline-primary btn-square" href="profilPemandu.php?id=<?php echo $result['id']; ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="profilPemandu.php?id=<?php echo $result['id']; ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="profilPemandu.php?id=<?php echo $result['id']; ?>"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="profilPemandu.php?id=<?php echo $result['id']; ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <!-- Add the guide's ID to the profile link -->
                <a class="text-truncate" href="profilPemandu.php?id=<?php echo $result['id']; ?>"><?php echo $result['nama']; ?></a>
                <p class="m-0"><?php echo $result['negara']; ?></p>
            </div>
        </div>
    </div>
<?php endwhile; ?>


                <?php
                    
                ?>
            </div>
        </div>
    </div>

</body>



 


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">Tour</span>Guide</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonial</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jalan Kali KM 0,3</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+08126969444</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>
</html>
