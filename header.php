<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site wordpress</title>
    <?php wp_head(); ?>
</head>
<body>
<nav class="navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  
<?php wp_nav_menu(['theme_location'=>'header',
          'container' => false,
          'menu_class' => 'navbar-nav mr-auto'

        ]) ?>
    <?= get_search_form() ?>
</div>

  <!-- <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">Pricing</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div> -->
</nav>
<div class="container">
