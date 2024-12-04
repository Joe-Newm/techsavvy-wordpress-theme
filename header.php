<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>> <!-- Adds classes to the body tag for customization -->

<nav class="navbar navbar-expand-lg navbar-light container">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/public/logo/Horizontal-logo.png" alt="techsavvy logo">
  </a>
  <!-- Hamburger Button -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Menu -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav ml-auto">
      <!-- Services Dropdown -->
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php echo home_url('/services'); ?>" id="servicesDropdown" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
          <a class="dropdown-item" href="<?php echo home_url('/services/it-services'); ?>">IT Services</a>
          <a class="dropdown-item" href="<?php echo home_url('/services/seo'); ?>">SEO</a>
          <a class="dropdown-item" href="<?php echo home_url('/services/content-creation'); ?>">Content Creation</a>
        </div>
      </div>
      <a class="nav-item nav-link" href="<?php echo home_url('/about'); ?>">About Us</a>
      <a class="nav-item nav-link" href="<?php echo home_url('/contact'); ?>">Contact Us</a>
      <a class="nav-item nav-link" href="<?php echo home_url('/careers'); ?>">Careers</a>
      <button class="btn btn-primary" type="button" onclick="window.location.href='tel:+13188840844';">
        <i class="bi bi-telephone-fill" style="font-size: 1.5em"></i>(318) 884-0844
      </button>
    </div>
  </div>
</nav>


<style>
  /* Open dropdown on hover for desktop */
  @media (min-width: 992px) {
    .navbar-nav .dropdown:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
  }

  /* Fade-in animation for dropdown */
  .navbar-nav .dropdown-menu {
    animation: fadeIn 0.3s ease;
  }

  /* Fade-in animation */
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>
