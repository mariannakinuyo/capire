<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap"  rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body <?php body_class(); ?>>

<?php  

$lang = get_bloginfo("language");

if ( $lang === 'en-US' ) {
  $link = "http://capiremov.org/en/about-us/";

} elseif ( $lang === 'es' ) {
  $link = "http://capiremov.org/es/quienes-somos/";

} elseif ( $lang === 'fr-FR' ) {
  $link = "http://capiremov.org/fr/a-propos-de-nous/";

} elseif ( $lang === 'pt-BR' ) {
  $link = "http://capiremov.org/quem-somos/";

}

?>

<header>
  <div class="container-fluid d-none d-lg-block">
    <div class="row b-bottom">
      <div class="container social-lang">
        <div class="row">
          <div class="col-md-8">
            <button class="botao-secundario">
              <a href="<?php echo $link; ?>">QUEM SOMOS</a>
            </button>
            <div class="social">
              <a href="https://facebook.com/capiremov" class="facebook" target="_blank">
                <span></span>
              </a>
              <a href="https://instagram.com/capiremov" class="instagram" target="_blank">
                <span></span>
              </a>
              <a href="https://twitter.com/capiremov" class="twitter" target="_blank">
                <span></span>
              </a>
              <a href="https://www.youtube.com/channel/UCTS7q5yxlq7wQWp9wu2w-FQ/" class="youtube" target="_blank">
                <span></span>
              </a>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="float-right">
              <?php  wp_nav_menu( array( 'menu' => 'language', 'container' => FALSE, 'menu_class' => 'menu-language', 'menu_id' => false ) ); ?>
              <button class="button-doe">
                <a href="#donation">APOIE</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid d-none d-lg-block">
    <div class="row b-bottom">
      <div class="container">
        <div class="menu-principal">
          <div class="logo-menu">
            <a href="<?php echo home_url() ?>">
              <img src="<?php bloginfo('template_url'); ?>/images/logo-capire.png" alt="">
            </a>
          </div>
          <div class="list-menu">
            <div>
              <a href="<?php echo home_url() ?>">
                <img class="logo-redu-menu" src="<?php bloginfo('template_url'); ?>/images/logo-capire.png" alt="">
              </a>
              <?php  wp_nav_menu( array( 'menu' => 'menu-primario', 'container' => FALSE, 'menu_class' => 'menu-menu-primario-container', 'menu_id' => false ) ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid d-none d-lg-block">
    <div class="row b-bottom">
      <div class="container">
        <div class="list-tags">
          <?php wp_nav_menu( array( 'menu' => 'menu-tags', 'container' => FALSE, 'menu_class' => 'menu-menu-tags-container', 'menu_id' => false ) ); ?>
        </div>
      </div>
    </div>
  </div>


  <nav role='navigation' class="mobile-menu d-lg-none d-block">
    <div class="logo-menu">
      <a href="<?php echo home_url() ?>">
        <img src="<?php bloginfo('template_url'); ?>/images/logo-capire.png" alt="">
      </a>
    </div>
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>

      <ul id="menu-mobile">
        <?php  wp_nav_menu( array( 'menu' => 'menu-primario', 'container' => FALSE, 'menu_class' => 'menu-menu-primario-container', 'menu_id' => false ) ); ?>
      </ul>
    </div>
  </nav>
  <div class="line-gradient d-lg-none d-block"></div>



</header>