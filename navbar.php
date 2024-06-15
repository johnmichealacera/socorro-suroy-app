<div class="container-fluid position-relative nav-bar p-0">
  <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
      <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
          <a href="/" class="navbar-brand">
              <h1 class="m-0 text-primary"><span class="text-dark">SOROY SOCOR</span>RO</h1>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
              <div class="navbar-nav ml-auto py-0">
              <a href="/" class="nav-item nav-link <?php echo ($pageTitle === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php echo ($pageTitle === 'about') ? 'active' : ''; ?>">About</a>
                <a href="destination.php" class="nav-item nav-link <?php echo ($pageTitle === 'destination') ? 'active' : ''; ?>">Destination</a>
                <a href="delicacies.php" class="nav-item nav-link <?php echo ($pageTitle === 'delicacies') ? 'active' : ''; ?>">Delicacies</a>
                <a href="barangays.php" class="nav-item nav-link <?php echo ($pageTitle === 'barangays') ? 'active' : ''; ?>">Barangays</a>
                  <!-- <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                      <div class="dropdown-menu border-0 rounded-0 m-0">
                          <a href="single.php" class="dropdown-item <?php echo ($pageTitle === 'single') ? 'active' : ''; ?>">Blog Detail</a>
                          <a href="destination.php" class="dropdown-item <?php echo ($pageTitle === 'destination') ? 'active' : ''; ?>">Destination</a>
                          <a href="guide.php" class="dropdown-item <?php echo ($pageTitle === 'guide') ? 'active' : ''; ?>">Travel Guides</a>
                          <a href="testimonial.php" class="dropdown-item <?php echo ($pageTitle === 'testimonial') ? 'active' : ''; ?>">Testimonial</a>
                      </div>
                  </div> -->
                  <a href="contact-us.php" class="nav-item nav-link <?php echo ($pageTitle === 'contact') ? 'active' : ''; ?>">Contact</a>
              </div>
          </div>
      </nav>
  </div>
</div>