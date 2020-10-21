<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand palePink millgoudy mr-0 pl-5" href="#">ENYAS LASHES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item ">
        <a class="nav-link  <?php if($_SERVER['REQUEST_URI'] == '/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/'))?>">Home <span class="sr-only">(current)</span></a>
      </li>
      
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
        <a class="nav-link  <?php if($_SERVER['REQUEST_URI'] == '/contact/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/contact/'))?>">Contact</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/about/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/about/'))?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/faq/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/faq/'))?>">FAQ</a>
      </li>
    </ul>
    <div class="nav-item pr-5 ">
      <a class="palePink <?php if($_SERVER['REQUEST_URI'] == '/shop/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/shop/'))?>">Book a Session</a>
    </div>
  </div>
</nav>