<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>
    <!-- Topbar Start -->
    <?php include_once('topbar.php'); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php 
        $pageTitle = "single";
        include_once("navbar.php"); 
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Pagatpat Treehouse</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="tourist-spots.php">Tourist Spots</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Swimming Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/tourist-spots/pagatpat1.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Wooden bridge connects the cottage near the sea</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Pagatpat Treehouse: A Seaside Retreat Amidst Mangroves</p>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" style="height: 400px;" src="img/tourist-spots/pagatpat2.jpg">
                            <h5 class="mb-3">Details</h5>
                            <p>Nestled by the sea and embraced by lush mangroves, Pagatpat Treehouse offers the perfect blend of relaxation and adventure. This charming resort, named after the thriving pagatpat trees, provides a serene escape with its hospitable atmosphere and delicious food. Dive into the refreshing sea for a swim or capture stunning photos of the picturesque surroundings. Ideal for family gatherings and friendly get-togethers, Pagatpat Treehouse invites you to enjoy the best of both worlds—the tranquil sea and the enchanting mangroves.</p>
                            <h5 class="mb-3">How to get there</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/tourist-spots/pagatpat4.jpg">
                            <p>Take a van or a car to Dapa Port from Sayak Airport. Then, charter a boat from Dapa Port to Bucas Grande. You can also join a Bucas Grande shared or private tour for a more convenient trip that includes land and boat transfers.</p>
                        </div>
                    </div>
                    <!-- Swimming Detail End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31466.749323130654!2d125.88513391118909!3d9.651647969639887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e29a25effcc1%3A0xc380713f6901c294!2sPamosaingan%2C%20Socorro%2C%20Surigao%20del%20Norte!5e0!3m2!1sen!2sph!4v1718526553860!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Experience the enchanting Pagatpat Treehouse nestled in Barangay Pamosaingan. Reachable from the port for around 200 pesos, this serene spot offers seaside relaxation and swimming. Please note, there are no lodging options available, ensuring a pure escape into nature's embrace.</p>
                    </div>
    
                    <!-- Explore More -->
                    <?php include_once("explore-more.php"); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php include_once("footer.html"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once("javascript.php"); ?>
</body>

</html>