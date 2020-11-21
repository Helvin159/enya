<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand  poppins" href="<?php echo esc_url(site_url('/'))?>"><img src="<?php echo get_theme_file_uri('assets/img/logo6.png')?>" alt="logo"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse m-auto" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <?php
      if($_SERVER['REQUEST_URI'] != '/' and $_SERVER['REQUEST_URI'] != '/pages/enya/'){?>
        <li class="nav-item  ">
        <a class="nav-link colorD fontSize20 <?php if($_SERVER['REQUEST_URI'] == '/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/'))?>">Home </a>
      </li>
      <?php } ?>
      <li class="nav-item  ">
        <a class="nav-link colorD fontSize20 <?php if($_SERVER['REQUEST_URI'] == '/blog/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/blog/'))?>">Blog</a>
      </li>
      <li class="nav-item  ">
        <a class="nav-link colorD fontSize20 <?php if($_SERVER['REQUEST_URI'] == '/contact/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/contact/'))?>">Book a Session</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link colorD fontSize20 <?php if($_SERVER['REQUEST_URI'] == '/about/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/about/'))?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link colorD fontSize20 <?php if($_SERVER['REQUEST_URI'] == '/faq/'){echo 'active';}; ?>" href="<?php echo esc_url(site_url('/faq/'))?>">FAQ</a>
      </li>
    </ul>
    
  </div>
        
</nav>