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
                <h3 class="display-4 text-white text-uppercase">Albino Taruc</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="barangays.php">Barangays</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Barangay Detail</p>
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
                    <!-- Barangay Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="img/barangays/albino_taruc.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Image above shows residents celebrating near the barangay hall</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Albino Taruc is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 3,988. This represented 15.37% of the total population of Socorro.</p>
                            <p>The household population of Albino Taruc in the 2015 Census was 2,498 broken down into 510 households or an average of 4.90 members per household.</p>
                            <table class="chart-table" id="households-table">
                                <caption class="chart-table-caption" id="households-table-caption">Number of households in Albino Taruc (1990‑2015)</caption>
                                <thead>
                                    <tr>
                                    <th scope="col">Census date</th>
                                    <th scope="col">Household population</th>
                                    <th scope="col">Number of households</th>
                                    <th scope="col">Average household size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th>
                                    <td id="household-pop-1990">–</td>
                                    <td>0</td>
                                    <td></td></tr><tr>
                                    <th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">–</td><td>0</td><td></td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">2,484</td><td>453</td><td>5.48</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">3,233</td><td>577</td><td>5.60</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">2,240</td><td>436</td><td>5.14</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">2,498</td><td>510</td><td>4.90</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/barangays/albino_taruc-1.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Albino Taruc is 10 to 14, with 276 individuals. Conversely, the age group with the lowest population is 80 and over, with 17 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 32.51% (812). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 63.17% (1,578). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 4.32% (108) in all. The computed Age Dependency Ratios mean that among the population of Albino Taruc, there are 51 youth dependents to every 100 of the working age population; there are 7 aged/senior citizens to every 100 of the working population; and overall, there are 58 dependents (young and old-age) to every 100 of the working population. The median age of 24 indicates that half of the entire population of Albino Taruc are aged less than 24 and the other half are over the age of 24.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-3.jpg">
                            <p>The population of Albino Taruc grew from 2,485 in 2000 to 3,988 in 2020, an increase of 1,503 people over the course of 20 years. The latest census figures in 2020 denote a positive growth rate of 10.35%, or an increase of 1,490 people, from the previous population of 2,498 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Albino Taruc shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list"><li><a href="navarro.php">Navarro (Poblacion), Socorro, Surigao del Norte</a></li><li><a href="songkoy.php">Songkoy, Socorro, Surigao del Norte</a></li><li><a href="rizal.php">Rizal (Poblacion), Socorro, Surigao del Norte</a></li></ul>
                        </div>
                    </div>
                    <!-- Brangay Detail End -->
    
                    <!-- Notes Start-->
                    <?php include_once("barangay-notes.php"); ?>
                    <!-- Notes End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Barangay Bio -->
                    <div class="d-flex flex-column text-center bg-white mb-5 py-5 px-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.802460307302!2d125.96261877480678!3d9.612270879586694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e39a4ff2b113%3A0xf0e03c72a32f6d67!2sBarangay%20Hall%20Of%20Don.%20Albino%20Taruc!5e0!3m2!1sen!2sph!4v1718431608967!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>Albino Taruc is situated at approximately 9.6146, 125.9650, in the island of Bucas Grande. Elevation at these coordinates is estimated at 10.0 meters or 32.8 feet above mean sea level.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">RAUL T. CARDUZA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">TITA C. MANTE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ELVERA D. DOTILLOS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">PEDRO R. GINGANE JR.</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">GLORIA Q. MANTE</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">DINDO C. SANICO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">EDGARDO L. ADLAO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">JIV SOCORRO S. ALABAT</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">KARYL J. BOHOL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">CHYMBIE M. CULATA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                    <!-- Explore More -->
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