<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;1,100;0,900;1,300&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body <?php body_class(); ?>>

<header>
  <div class="social-lang b-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="social">
            <a href="" class="facebook">
              <span></span>
            </a>
            <a href="" class="instagram">
              <span></span>
            </a>
            <a href="" class="twitter">
              <span></span>
            </a>
            <a href="" class="whatsapp">
              <span></span>
            </a>
            <a href="" class="telegram">
              <span></span>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="float-right">
            <?php  wp_nav_menu( array( 'menu' => 'language', 'container' => FALSE, 'menu_class' => 'menu-language', 'menu_id' => false ) ); ?>
            <div class="button-doe">
              <a href="">APOIE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center b-bottom">
    <div class="logo-menu">
      <a href="">
        <img src="https://via.placeholder.com/206x66" alt="">
      </a>
    </div>
    <div class="list-menu">
      <?php  wp_nav_menu( array( 'menu' => 'menu-primario', 'container' => FALSE, 'menu_class' => 'menu-menu-primario-container', 'menu_id' => false ) ); ?>
    </div>
  </div>
  <div class="list-tags b-bottom">
    <?php wp_nav_menu( array( 'menu' => 'menu-tags', 'container' => FALSE, 'menu_class' => 'menu-menu-tags-container', 'menu_id' => false ) ); ?>
  </div>
</header>