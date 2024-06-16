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
                <h3 class="display-4 text-white text-uppercase">Helene</h3>
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
                                <img class="img-fluid w-100" src="img/barangays/helene.jpg" alt="">
                            </div>
                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <div class="text-primary text-uppercase text-decoration-none">Image above shows bird's eye view of the houses near the sea</div>
                            </div>
                            <h2 class="mb-3">Overview</h2>
                            <p>Helene is a barangay in the municipality of Socorro, in the province of Surigao del Norte. Its population as determined by the 2020 Census was 812. This represented 3.13% of the total population of Socorro.</p>
                            <p>The household population of Helene in the 2015 Census was 839 broken down into 176 households or an average of 4.77 members per household.</p>
                            <div class="tableWrap" id="households-table-wrap"><table class="chart-table" id="households-table"><caption class="chart-table-caption" id="households-table-caption">Number of households in Helene (1990‑2015)</caption><thead><tr><th scope="col">Census date</th><th scope="col">Household population</th><th scope="col">Number of households</th><th scope="col">Average household size</th></tr></thead><tbody><tr><th scope="row"><time datetime="1990-05-01">1990 May&nbsp;1</time></th><td id="household-pop-1990">578</td><td>84</td><td>6.88</td></tr><tr><th scope="row"><time datetime="1995-09-01">1995 <abbr title="September">Sep</abbr>&nbsp;1</time></th><td id="household-pop-1995">636</td><td>102</td><td>6.24</td></tr><tr><th scope="row"><time datetime="2000-05-01">2000 May&nbsp;1</time></th><td id="household-pop-2000">684</td><td>114</td><td>6.00</td></tr><tr><th scope="row"><time datetime="2007-08-01">2007 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2007">691</td><td>134</td><td>5.16</td></tr><tr><th scope="row"><time datetime="2010-05-01">2010 May&nbsp;1</time></th><td id="household-pop-2010">798</td><td>144</td><td>5.54</td></tr><tr><th scope="row"><time datetime="2015-08-01">2015 <abbr title="August">Aug</abbr>&nbsp;1</time></th><td id="household-pop-2015">839</td><td>176</td><td>4.77</td></tr></tbody></table></div>
                            <h4 class="mb-3">Population Information</h4>
                            <img class="img-fluid w-50 float-left mr-4 mb-2" src="img/barangays/helene-hidden-resort.jpg">
                            <h5 class="mb-3">Population by age group</h5>
                            <p>According to the 2015 Census, the age group with the highest population in Helene is 10 to 14, with 110 individuals. Conversely, the age group with the lowest population is 80 and over, with 3 individuals. Combining age groups together, those aged 14 and below, consisting of the young dependent population which include infants/babies, children and young adolescents/teenagers, make up an aggregate of 37.90% (318). Those aged 15 up to 64, roughly, the economically active population and actual or potential members of the work force, constitute a total of 59.00% (495). Finally, old dependent population consisting of the senior citizens, those aged 65 and over, total 3.10% (26) in all. The computed Age Dependency Ratios mean that among the population of Helene, there are 64 youth dependents to every 100 of the working age population; there are 5 aged/senior citizens to every 100 of the working population; and overall, there are 69 dependents (young and old-age) to every 100 of the working population. The median age of 21 indicates that half of the entire population of Helene are aged less than 21 and the other half are over the age of 21.</p>
                            <h5 class="mb-3">Historical population</h5>
                            <img class="img-fluid w-50 float-right ml-4 mb-2" src="img/blog-3.jpg">
                            <p>The population of Helene grew from 578 in 1990 to 812 in 2020, an increase of 234 people over the course of 30 years. The latest census figures in 2020 denote a negative growth rate of 0.69%, or a decrease of 27 people, from the previous population of 839 in 2015.</p>
                            <h5 class="mb-3">Adjacent barangays</h5>
                            <p>Helene shares a common border with the following barangay(s):</p>
                            <ul class="simList2col" id="adjacent-bgy-list">
                                <li><a href="san-roque.php">San Roque, Socorro, Surigao del Norte</a></li>
                                <li><a href="sudlon.php">Sudlon, Socorro, Surigao del Norte</a></li>
                            </ul>
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
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9357.422853673117!2d125.93094857314091!3d9.568379157084484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3303e115b17f1a23%3A0xba23a3cb1936e64f!2sBrgy.%20Do%C3%B1a%20Helene%2C%20Socorro%2C%20SDN!5e0!3m2!1sen!2sph!4v1718441527362!5m2!1sen!2sph" class="img-fluid mx-auto mb-3" style="border:0; height: 450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      <p>Helene is situated at approximately 9.5682, 125.9396, in the island of Bucas Grande. Elevation at these coordinates is estimated at 10.2 meters or 33.5 feet above mean sea level.</p>
                    </div>

                    <!-- Officials List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Officials</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0 small">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Punong Barangay
                                    <span class="badge badge-primary badge-pill">RICO A. ROSILLO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">RICO B. CONSIGNA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">SAMMY I. MANLIMOS</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">RICKY R. YAMSON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">CRISTY G. QUISTO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">ARCHIE A. DIZON</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">HALFORD Q. ALCALA</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Sangguniang Barangay Member
                                    <span class="badge badge-primary badge-pill">MAXIMINO V. SAVANDAL</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    SK Chairperson
                                    <span class="badge badge-primary badge-pill">KENNETH G. QUISTO</span>
                                </li>
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                    Barangay Secretary
                                    <span class="badge badge-primary badge-pill">JEMELITO G. GUIRAL</span>
                                </li>
                            </ul>
                        </div>
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