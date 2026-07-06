<!DOCTYPE html>
<html <?php language_attributes(); // display the html language tag ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="<?php bloginfo('description'); // description in WP --> Impostazioni > Generali > Motto ?>">

  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/favicon.svg" type="image/svg">

  <?php wp_head(); // insert all the styles of WordPress ?>

</head>

<body <?php body_class(); // add automic css classes based on the page ?>>

<div class="overflow">

<?php wp_body_open(); // insert script right after the body if needed ?>

<header class="header-container">

  <div class="header">

    <a href="<?php echo esc_url(home_url()); ?>" class="header__logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/logo.svg" alt="<?php bloginfo('title'); ?>">
    </a>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'header',
      'container' => false,
      'items_wrap' => '<ul class="header__menu">%3$s</ul>'
    ));
    ?>

    <div class="header__hamburger">
      <span></span>
      <span></span>
    </div>
    
  </div>

</header>
  