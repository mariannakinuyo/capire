<?php wp_footer(); 

$lang = get_bloginfo("language");

if ( $lang === 'en-US' ) {
  $page = get_page_by_path( 'home-en' );
  $texto_cc = get_field('texto_cc_en', $page->ID);
  $texto_redes = get_field('texto_redes_sociais_en', $page->ID);

} elseif ( $lang === 'es' ) {
  $page = get_page_by_path( 'home-es' );
  $texto_cc = get_field('texto_cc_es', $page->ID);
  $texto_redes = get_field('texto_redes_sociais_es', $page->ID);

} elseif ( $lang === 'fr-FR' ) {
  $page = get_page_by_path( 'home-fr' );
  $texto_cc = get_field('texto_cc_fr', $page->ID);
  $texto_redes = get_field('texto_redes_sociais_fr', $page->ID);

} elseif ( $lang === 'pt-BR' ) {
  $page = get_page_by_path( 'home' );
  $texto_cc = get_field('texto_cc', $page->ID);
  $texto_redes = get_field('texto_redes_sociais', $page->ID);
}

?>

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div>
                        <a href="<?php echo home_url() ?>">
                            <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo-branco-capire.png" alt="">
                        </a>
                        <img class="d-none d-lg-block" src="<?php bloginfo('template_url'); ?>/images/cc.png" alt="">
                        <p class="d-none d-lg-block ex-small"><?php echo $texto_cc ?></p>

                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <p class="small">CAPIRE</p>
                    <?php  wp_nav_menu( array( 'menu' => 'footer', 'container' => FALSE, 'menu_class' => 'menu-footer', 'menu_id' => false ) ); ?>
                </div>
                <div class="col-12 col-lg-2">
                    <p class="small"><?php echo $texto_redes ?></p>
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

                <div class="col-12 col-lg-2 d-lg-none d-block mt-4">
                    <img src="<?php bloginfo('template_url'); ?>/images/cc.png" alt="">
                    <p class="ex-small"><?php echo $texto_cc ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/src/js/script.js"></script>

</body>
</html>
