<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav">
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item  ">
        <a class="nav-link colorD <?php if($_SERVER['REQUEST_URI'] == '/contact/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/contact/'))?>">Book a Session</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link colorD <?php if($_SERVER['REQUEST_URI'] == '/about/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/about/'))?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link colorD <?php if($_SERVER['REQUEST_URI'] == '/faq/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/faq/'))?>">FAQ</a>
      </li>
    </ul>
    
  </div>
        <a class="navbar-brand  poppins" href="<?php echo esc_url(site_url('/'))?>">ENYAS LASHES</a>
</nav>