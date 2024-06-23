<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>
    <!-- Topbar Start -->
    <?php include_once('topbar.php'); ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php 
        $pageTitle = "home";
        include_once("navbar.php"); 
    ?>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/tourist-spots/bucas-grande-overlooking.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tour & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Island Places</h1>
                            <a href="tourist-spots.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/delicacies/delicacy-multiple.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Delicacy and Culture</h4>
                            <h1 class="display-3 text-white mb-md-4">Indulge in Island Cultural Delicacies</h1>
                            <a href="delicacies.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Discover Our Delicacies</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/tourist-spots/bulahanon.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Barangay and Community</h4>
                            <h1 class="display-3 text-white mb-md-4">Population and Officials List</h1>
                            <a href="barangays.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn Now</a>
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

    <!-- Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Whole Map of Socorro</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125863.41631899662!2d125.8561945658465!3d9.661228383191364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e3b1411a3e55%3A0x3ee789b24f4e50dd!2sSocorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1719115759210!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Destination Start -->
    <?php include_once("tourist-destination.php"); ?>
    <!-- Destination Start -->

    <?php include_once('footer.html'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once("javascript.php"); ?>
</body>

</html>