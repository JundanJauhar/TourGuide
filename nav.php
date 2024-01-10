<?php
include 'php/koneksi.php';
?>

 
 <!-- Topbar Start -->
 <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+08126969444</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/jundan_jhr/?hl=en">
                            <i class="fab fa-instagram" ></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 fixed-top">
            <a href="" class="navbar-brand">
                <h1 class="m-0 text-primary"><span class="text-dark">TOUR</span>GUIDE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php?page=page1" class="nav-item nav-link">About</a>
                    <a href="contact.php?page=page2" class="nav-item nav-link">Contact</a>
                    <?php
                    // Check if the user is logged in
                    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
                        echo '<a href="logout.php" class="nav-item nav-link">Logout</a>';
                    } else {
                        echo '<a href="login.php" class="nav-item nav-link">Login</a>';
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->



