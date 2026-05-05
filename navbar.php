<div class="container-fluid position-relative nav-bar p-0">
  <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
      <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-sm py-3 py-lg-0 pl-3 pl-lg-5" aria-label="Primary">
          <a href="/" class="navbar-brand py-2">
              <span class="brand-lockup d-inline-block">
                <span class="brand-lockup__title text-dark text-uppercase">E-SUROY</span>
                <span class="brand-lockup__accent text-primary text-uppercase">Socorro</span>
              </span>
          </a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
              <div class="navbar-nav ml-auto py-0">
                <a href="/" class="nav-item nav-link <?php echo ($pageTitle === 'home') ? 'active' : ''; ?>">Home</a>
                <a href="tourist-spots.php" class="nav-item nav-link <?php echo ($pageTitle === 'tourist-spots') ? 'active' : ''; ?>">Spots</a>
                <a href="delicacies.php" class="nav-item nav-link <?php echo ($pageTitle === 'delicacies') ? 'active' : ''; ?>">Delicacies</a>
                <a href="barangays.php" class="nav-item nav-link <?php echo ($pageTitle === 'barangays') ? 'active' : ''; ?>">Barangays</a>
                <a href="about.php" class="nav-item nav-link <?php echo ($pageTitle === 'about') ? 'active' : ''; ?>">About</a>
                <a href="guide.php" class="nav-item nav-link <?php echo ($pageTitle === 'guide') ? 'active' : ''; ?>">Guide</a>
                <a href="contact-us.php" class="nav-item nav-link <?php echo ($pageTitle === 'contact') ? 'active' : ''; ?>">Contact</a>
              </div>
          </div>
      </nav>
  </div>
</div>
