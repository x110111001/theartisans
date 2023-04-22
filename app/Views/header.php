<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <meta name="title" content="<?php echo $meta_title;?>">
    <meta name="description" content="<?php echo $description; ?>">

    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $og_title; ?>">
    <meta property="og:description" content="<?php echo $og_description; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="theartisans.ae">
    <meta property="twitter:url" content="<?php echo $og_url; ?>">
    <meta name="twitter:title" content="<?php echo $og_title; ?>">
    <meta name="twitter:description" content="<?php echo $og_description; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    
    <?php echo $canonical;?>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css'); ?>">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('images/logo/favicon.png'); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8RSGQQMBM8"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-8RSGQQMBM8');
    </script>

    <title><?php echo $title; ?></title>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container px-lg-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
          <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/logo/logo.png'); ?>" width="150"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item ms-lg-3 mx-auto py-lg-0 py-2">
              <a class="nav-link sliding-border" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item ms-lg-3 dropdown my-auto">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu rounded-0 p-3 bg-white">
                <li><a class="dropdown-item py-3 sliding-border" href="<?php echo base_url('services/bespoke'); ?>">Bespoke</a></li>
                <li><a class="dropdown-item py-3 sliding-border" href="<?php echo base_url('services/custom'); ?>">Custom</a></li>
                <li><a class="dropdown-item py-3 sliding-border" href="<?php echo base_url('services/alteration'); ?>">Alterations</a></li>
                <li><a class="dropdown-item py-3 sliding-border" href="<?php echo base_url('services/uniforms'); ?>">Uniforms</a></li>
                <li><a class="dropdown-item py-3 sliding-border" href="<?php echo base_url('services/emirati-kandura'); ?>">Emirati Kandura</a></li>
              </ul>
            </li>
            
            <li class="nav-item ms-lg-3 mx-auto py-lg-0 py-2">
              <a class="nav-link sliding-border" href="<?php echo base_url('about'); ?>">About</a>
            </li>
            <li class="nav-item ms-lg-3 mx-auto py-lg-0 py-2">
              <a class="nav-link sliding-border" href="#">Blog</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto d-lg-block d-none">
            <li class="nav-item">
              <a class="nav-link mt-2" aria-current="page" href="https://www.instagram.com/wearetailors/"><i class="fab fa-instagram fa-2x"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start p-3" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header py-4">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/logo/logo.png'); ?>" width="150"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item mb-2">
              <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">Services <i class="fas fa-caret-down float-end"></i></a>
              <div class="collapse" id="services">
                <ul class="nav flex-column ms-4">
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('services/bespoke'); ?>">Bespoke</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('services/custom'); ?>">Custom</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('services/alteration'); ?>">Alterations</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('services/uniforms'); ?>">Uniforms</a>
                  </li>
                  <li class="nav-item mt-2">
                    <a class="nav-link" href="<?php echo base_url('services/emirati-kandura'); ?>">Emirati Kandura</a>
                  </li>
                </ul>
              </div>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link" href="<?php echo base_url('about'); ?>">About</a>
          </li>
          
          <li class="nav-item mb-4">
            <a class="nav-link">Blog</a>
          </li>
          <li class="nav-item ms-3">
            <div class="d-grid gap-2">
              <a class="btn btn-dark btn-lg rounded-0" href="tel:+97145844777">Book Now</a>
            </div>
          </li>
        </ul>
      </div>
    </div>