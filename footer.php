<?php wp_footer(); ?>

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div>
                        <a href="<?php echo home_url() ?>">
                            <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo-branco-capire.png" alt="">
                        </a>
                        <img src="<?php bloginfo('template_url'); ?>/images/cc.png" alt="">
                        <p class="ex-small">Dictum non consectetur a erat nam. Sem nulla pharetra</p>

                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <p class="small">NOME DO SITE</p>
                    <?php  wp_nav_menu( array( 'menu' => 'footer', 'container' => FALSE, 'menu_class' => 'menu-footer', 'menu_id' => false ) ); ?>
                </div>
                <div class="col-12 col-lg-2">
                    <p class="small">SIGA NOSSAS REDES</p>
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
