<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top >
    <div class="headerContainer">
    <a class="navbar-brand" style="font-size: 50px !important; text-decoration: none; color: white !important;" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="text-decoration: none;"></span>
      </button>
      <div class="collapse navbar-collapse color-light" style="margin-right: 50px" id="navbarNav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'navbar-nav ml-auto custom-menu-class',
        'link_before' => '<span style="color: white; margin-right: 40px; text-decoration: none!important;">',
      ));
      ?>
        </div>
    </div>
  </header>
