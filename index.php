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
    <div class="container-fluid p-0">
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

    <!-- Destination Start -->
    <?php include_once("tourist-destination.php"); ?>
    <!-- Destination Start -->

    <?php include_once('footer.html'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once("javascript.php"); ?>
</body>

</html>