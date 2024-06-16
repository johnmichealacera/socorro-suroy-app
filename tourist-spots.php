<!DOCTYPE html>
<html lang="en">

<?php include_once('head.php'); ?>

<body>
    <!-- Topbar Start -->
    <?php include_once("topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php 
        $pageTitle = "tourist-spots";
        include_once("navbar.php"); 
    ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Tourist Spots</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Destination</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Booking Start -->
    <div class="container-fluid booking mt-5">
        <div class="container">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="mb-3 mb-md-0" style="width: 100%">
                            <select id="destinationSelect" class="custom-select px-4" style="height: 47px;">
                                <option value="" selected disabled>Destination</option>
                                <option value="club-tara">Club Tara</option>
                                <option value="dagatan">Dagatan</option>
                                <option value="ecopark-grande">Ecopark Grande</option>
                                <option value="hidden-resort">Hidden Resort</option>
                                <option value="magkahuyog">Magkahuyog Falls</option>
                                <option value="pagatpat-treehouse">Pagatpat Treehouse</option>
                                <option value="puyangi-resort">Puyangi Beach Resort</option>
                                <option value="salog-busay">Salog Busay</option>
                                <option value="sohoton">Sohoton</option>
                                <option value="sunrise-peak">Sunrise Peak</option>
                                <option value="taruc-swimming">Taruc Swimming Pool</option>
                                <option value="tiktikan">Tiktikan</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button id="submitButton" class="btn btn-primary btn-block" type="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
    

    <!-- Destination Start -->
    <?php include_once("tourist-destination.php"); ?>
    <!-- Destination Start -->


    <!-- Footer Start -->
    <?php include_once("footer.html"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <?php include_once("javascript.php"); ?>
</body>

</html>

<script>
    // Add click event listener to the submit button
    document.getElementById('submitButton').addEventListener('click', function() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('destinationSelect').value;
        window.location.href = `${selectedValue}.php`;
        
        // Redirect based on the selected value
        // switch(selectedValue) {
        //     case 'tiktikan':
        //         window.location.href = 'tiktikan.php';
        //         break;
        //     case 'taruc-swimming':
        //         window.location.href = 'taruc-swimming.php';
        //         break;
        //     case 'sohoton':
        //         window.location.href = 'sohoton.php';
        //         break;
        //     // Add cases for other destinations if needed
        //     default:
        //         // Handle default behavior or do nothing
        //         break;
        // }
    });
</script>