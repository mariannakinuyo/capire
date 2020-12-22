
<?php  function componente_doacao() { 
$lang = get_bloginfo("language");

if ( $lang === 'en-US' ) {
  $page = get_page_by_path( 'home-en' );
  $texto_doe = get_field('texto_doacao_en', $page->ID);
  $apoie = get_field('btn_apoie_en', $page->ID);

} elseif ( $lang === 'es' ) {
  $page = get_page_by_path( 'home-es' );
  $texto_doe = get_field('texto_doacao_es', $page->ID);
  $apoie = get_field('btn_apoie_es', $page->ID);

} elseif ( $lang === 'fr-FR' ) {
  $page = get_page_by_path( 'home-fr' );
  $texto_doe = get_field('texto_doacao_fr', $page->ID);
  $apoie = get_field('btn_apoie_fr', $page->ID);

} elseif ( $lang === 'pt-BR' ) {
  $page = get_page_by_path( 'home' );
  $texto_doe = get_field('texto_doacao', $page->ID);
  $apoie = get_field('btn_apoie', $page->ID);

}
?>

<section id="donation" class="container-fluid mt-5 donation">
  <div class="row">
    <div class="line-gradient"></div>
    <div class="offset-lg-3 col-lg-6 text-center p-donation">
        <h2><?php echo $texto_doe ?></h2>
        <button><?php echo $apoie ?></button>
    </div>
  </div>
</section>

<?php
} 