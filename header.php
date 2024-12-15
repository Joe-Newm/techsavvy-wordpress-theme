<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">

<?php
wp_head();
        ?>

	  <link rel="icon" type="image/svg+xml" href="/favicon.svg"/>
	  <meta name="generator" content={Astro.generator} />
    </head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand" href="./index.html">
<?php
	if (function_exists('the_custom_logo')) {
	        the_custom_logo();
	} 
?>
  </a>
  <!-- Hamburger Button -->
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Menu -->
  <div class="collapse navbar-collapse" id="navbarNav">
	<div class="navbar-nav ml-auto">

<?php
	  wp_nav_menu(
	  array(
	  'menu' => 'primary',
	  'container' => '',
	  'theme_location' => 'primary',
	  'items_wrap' => '%3$s',
'walker' => new My_Custom_Walker_Nav_Menu()
	  )
	  );
	  ?>
      <!--
      <a class="nav-item nav-link" href="./services.html">Services</a>
      <a class="nav-item nav-link" href="./about.html">About Us</a>
      <a class="nav-item nav-link" href="./contact">Contact Us</a>
	  <a class="nav-item nav-link" href="./careers">Careers</a>
	  -->
      <button class="btn btn-primary" style="gap: 10px; margin-top: 9px; margin-left: 20px;" type="button" onclick="window.location.href='tel:+13188840844';">
        <i class="bi bi-telephone-fill" style="font-size: 1.5em"></i>(318) 884-0844
      </button>
    </div>
  </div>
        </nav>
