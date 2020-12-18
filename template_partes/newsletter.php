<?php function componente_newsletter() { 
  $lang = get_bloginfo("language");

  if ( $lang === 'en-US' ) {
    $page = get_page_by_path( 'home-en' );
    $titulo_news = get_field('titulo_newsletter_en', $page->ID);
    $texto_news = get_field('texto_newsletter_en', $page->ID);
    $botao_news = get_field('botao_newsletter_en', $page->ID);

  } elseif ( $lang === 'es' ) {
    $page = get_page_by_path( 'home-es' );
    $titulo_news = get_field('titulo_newsletter_es',$page->ID);
    $texto_news = get_field('texto_newsletter_es', $page->ID);
    $botao_news = get_field('botao_newsletter_es', $page->ID);

  } elseif ( $lang === 'fr-FR' ) {
    $page = get_page_by_path( 'home-fr' );
    $titulo_news = get_field('titulo_newsletter_fr', $page->ID);
    $texto_news = get_field('texto_newsletter_fr', $page->ID);
    $botao_news = get_field('botao_newsletter_fr', $page->ID);

  } elseif ( $lang === 'pt-BR' ) {
    $page = get_page_by_path( 'home' );
    $titulo_news = get_field('titulo_newsletter', $page->ID);
    $texto_news = get_field('texto_newsletter', $page->ID);
    $botao_news = get_field('botao_newsletter', $page->ID);

  }

?>

<section id="newsletter" class="container">
  <div class="wrap-newsletter">
    <div class="row">
      <div class="offset-md-2 col-md-4 col-12">
        <div class="element-left">
          <h2 class="purple"><?php echo $titulo_news ?></h2>
          <p><?php echo $texto_news ?></p>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="element-right">
          <?php
            if ( $lang === 'en-US' ) {
              echo do_shortcode( '[newsletter_form lists="2" form="2"]' );
            } elseif ( $lang === 'es' ) {
              echo do_shortcode( '[newsletter_form lists="3" form="3"]' );
            } elseif ( $lang === 'fr-FR' ) {
              echo do_shortcode( '[newsletter_form lists="4" form="4"]' );
            } elseif ( $lang === 'pt-BR' ) {
              echo do_shortcode( '[newsletter_form lists="1" form="1"]' );
            }
          ?>
        </div>
      </div>
    </div>
  </div>



</section>

<?php
}
