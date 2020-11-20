<?php get_header(); 

$pageID = get_the_ID();

?>


<section class="container-fluid p-top">
  <div class="row bg-grey">
    <div class="col-md-6 offset-md-3">
        <h5><?php echo get_field('texto_do_topo', $pageID) ?></h5>
    </div>
  </div>
</section>

<section class="container home mt-md-5">
  <div class="row">
    <div class="col-md-10 offset-md-1">

      <?php
        $rows = get_field('carousel_principal', $pageID);
        if( $rows ) {
      ?>
        <div class="carousel hero-slide" data-flickity='{ "autoPlay": true }'>
        <!-- data-flickity='{ "autoPlay": true }' -->
        <?php
          foreach( $rows as $row ) {
            $post_principal = $row['post_carousel_principal'];
            $title = get_the_title( $post_principal->ID );
            $link = get_permalink( $post_principal->ID );
            $thumb = get_the_post_thumbnail_url( $post_principal->ID, 'full');
            $categoria = get_the_category( $post_principal->ID )[0]->name;
            $linha_fina = get_field('linha_fina', $post_principal->ID);
        ?>
          <div class="carousel-cell">
            <a href="<?php echo $link ?>">
              <div class="row">
                <div class="col-md-8">
                  <div class="bg-img img-hero-slide" style="background-image: url(<?php echo $thumb ?>)"></div>
                </div>
                <div class="col-md-4">
              
                  <p class="name-categoria">
                    <?php echo $categoria ?>
                    <span class="float-right"><?php echo get_the_date('d/m/Y') ?></span>
                  </p>
                  <h1><?php echo $title ?></h1>
                  <p class="subtitle"><?php echo $linha_fina ?></p>
                </div>
              </div>
            </a>
          </div>

        <?php
        wp_reset_postdata();
          }
        ?>
        </div>
      <?php
        }
      ?>

    </div>
  </div>
</section>


<?php componente_regioes() ?>


<section class="container">
  <div class="row">
    <div class="offset-md-1 col-md-10">
      <div class="row">

        <?php
          $formatos_1 = get_field('formatos_1', $pageID);
          if( $formatos_1 ) {
      
            foreach( $formatos_1 as $formato_1 ) {
              $post_formato_1 = $formato_1['post_formato_1'];
              $title = get_the_title( $post_formato_1->ID );
              $link = get_permalink( $post_formato_1->ID );
              $thumb = get_the_post_thumbnail_url( $post_formato_1->ID, 'full');
              $categoria = get_the_category( $post_formato_1->ID )[0]->name;
              $linha_fina = get_field('linha_fina', $post_formato_1->ID);
          ?>

          <div class="col-md-4">
            <div class="box-cats-home">
              <span><?php echo $categoria ?></span>
              <span><?php echo get_the_date('d/m/Y') ?></span>
              <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
              <h4><?php echo $title ?></</h4>
              <p class="subtitle"><?php echo $linha_fina ?></p>
            </div>      
          </div>

          <?php
          wp_reset_postdata();
            }
          }
        ?>

        <div class="col-md-4">
          <h5>LEIA MAIS</h5>
        
          <?php 
          $posts_last = new WP_Query( array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
          ) );
          
          foreach ( $posts_last->posts as $post ) {
            $title = get_the_title( $post->ID );
          ?>

          <div class="more-home">
            <h5><?php echo $title ?></h5>
          </div>

          <?php } ?>

        </div>

        <?php
          $formatos_2 = get_field('formatos_2', $pageID);
          if( $formatos_2 ) {
      
            foreach( $formatos_2 as $formato_2 ) {
              $post_formato_2 = $formato_2['post_formato_2'];
              $title = get_the_title( $post_formato_2->ID );
              $link = get_permalink( $post_formato_2->ID );
              $thumb = get_the_post_thumbnail_url( $post_formato_2->ID, 'full');
              $categoria = get_the_category( $post_formato_2->ID )[0]->name;
              $linha_fina = get_field('linha_fina', $post_formato_2->ID);
          ?>

          <div class="col-md-4">
            <div class="box-cats-home">
              <span><?php echo $categoria ?></span>
              <span><?php echo get_the_date('d/m/Y') ?></span>
              <div class="bg-img img-cats-home" style="background-image: url(https://via.placeholder.com/560x365)"></div>
              <h5><?php echo $title ?></</h5>
              <p class="subtitle"><?php echo $linha_fina ?></p>
            </div>      
          </div>

          <?php
          wp_reset_postdata();
            }
          }
        ?>


      </div>
    </div>
  </div>
</section>



<section class="container">
  <div class="row">
    <div class="offset-md-2 col-md-8">
      
      <h3>Assista</h3>

      <div class="carousel" data-flickity='{ "freeScroll": true }'>

        <?php 
        $posts_midias = new WP_Query( array(
          'post_type'      => 'post',
          'post_status'    => 'publish',
          'posts_per_page' => 4,
          'tax_query'      => array(
            array(
              'taxonomy' => 'category',
              'field'    => 'slug',
              'terms'    => 'multimidia',
            ),
          ),
        ) );
        
        foreach ( $posts_midias->posts as $post ) {
          $thumbvideo = get_the_post_thumbnail_url( $post->ID, 'full');
        ?>

          <div class="carousel-cell slide-video">
            <div class="bg-img slide-video-home" style="background-image: url( <?php echo $thumbvideo ?> )"></div>
            <h3><?php echo get_the_title( $post->ID ); ?></h3>
          </div>
        
        <?php } ?>

      </div>


    </div>
  </div>
</section>

<?php componente_newsletter() ?>

<section class="container-fluid bg-grey mt-5">
  <div class="row">
    <div class="offset-lg-3 col-lg-6">
        <h2><?php echo get_field('texto_doacao', $pageID) ?></h2>
        <button>paypall</button>
    </div>
  </div>
</section>

<?php get_footer(); ?>
