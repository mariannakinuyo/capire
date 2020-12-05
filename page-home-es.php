<?php get_header(); 

$pageID = get_the_ID();
?>


<section class="container p-top">
  <div class="row">
    <div class="col-lg-6 offset-lg-3 my-5">
        <h3 class="lato highlight text-center"><strong><?php echo get_field('texto_do_topo_es', $pageID) ?></strong></h3>
    </div>
  </div>
</section>

<section class="container hero">
  <div class="row bg-red-mobile">
    <div class="col-lg-10 offset-lg-1 col-12">

      <?php
        $rows = get_field('carousel_principal_es', $pageID);
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
            $category_id = get_cat_ID( $categoria );
            $category_link = get_category_link( $category_id );
        ?>
          <div class="carousel-cell">
            
              <div class="row">
                <div class="col-lg-8 col-12">
                  <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                    <div class="bg-img img-hero-slide" style="background-image: url(<?php echo $thumb ?>)"></div>
                  </a>
                </div>
                <div class="col-lg-4 col-12 p-15">
                  <div class="p-15">
                    <p class="name-categoria">
                      <a href="<?php echo $category_link ?>">
                        <?php echo $categoria ?>
                      </a>
                      <span class="float-right"><?php echo get_the_date('d/m/Y') ?></span>
                    </p>
                    <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                      <h1><?php echo $title ?></h1>
                      <p class="subtitle"><?php echo $linha_fina ?></p>
                      <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>"><p class="d-block d-lg-none text-right small"><strong>Leia mais</strong></p></a>
                    </a>
                  </div>
                </div>
              </div>
            
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
    <div class="offset-lg-1 col-lg-10">
      <div class="row">

        <?php
          $formatos_1 = get_field('formatos_1_es', $pageID);
          if( $formatos_1 ) {
      
            foreach( $formatos_1 as $formato_1 ) {
              $post_formato_1 = $formato_1['post_formato_1'];
              $title = get_the_title( $post_formato_1->ID );
              $link = get_permalink( $post_formato_1->ID );
              $thumb = get_the_post_thumbnail_url( $post_formato_1->ID, 'full');
              $categoria = get_the_category( $post_formato_1->ID )[0]->name;
              $linha_fina = get_field('linha_fina', $post_formato_1->ID);
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
          ?>

          <div class="col-lg-4">
            
              <div class="box-cats-home">
                <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                  <div class="bg-img img-cats-home" style="background-image: url(<?php echo $thumb ?>)"></div>
                </a>
                <div class="name-categoria">
                  <a href="<?php echo $category_link ?>">
                    <span><?php echo $categoria ?></span>
                  </a>
                  <span class="float-right date"><?php echo get_the_date('d/m/Y') ?></span>
                </div>
                <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                  <h4><?php echo $title ?></h4>
                  <p class="subtitle"><?php echo $linha_fina ?></p>
                </a>
              </div>
            
          </div>

          <?php
          wp_reset_postdata();
            }
          }
        ?>

        <div class="col-lg-4 col-8 offset-2 offset-lg-0 read-more">
          
          <h6><?php echo get_field('titulo_leia_mais_es') ?></h6>
          <div class="line-gradient more"></div>
        
          <?php 
          $posts_last = new WP_Query( array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
          ) );
          
          foreach ( $posts_last->posts as $post ) {
            $title = get_the_title( $post->ID );
            $link = get_permalink( $post->ID );
          ?>

            <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
              <h4><?php echo $title ?></h4>
            </a>
            <div class="line-gradient more-home"></div>

          <?php } ?>

        </div>

        <?php
          $formatos_2 = get_field('formatos_2_es', $pageID);
          if( $formatos_2 ) {
      
            foreach( $formatos_2 as $formato_2 ) {
              $post_formato_2 = $formato_2['post_formato_2'];
              $title = get_the_title( $post_formato_2->ID );
              $link = get_permalink( $post_formato_2->ID );
              $thumb = get_the_post_thumbnail_url( $post_formato_2->ID, 'full');
              $categoria = get_the_category( $post_formato_2->ID )[0]->name;
              $linha_fina = get_field('linha_fina', $post_formato_2->ID);
              $category_id = get_cat_ID( $categoria );
              $category_link = get_category_link( $category_id );
          ?>

          <div class="col-lg-4">
            <div class="box-cats-home">
              <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                <div class="bg-img img-cats-home" style="background-image: url(<?php echo $thumb ?>)"></div>
              </a>
              <div class="name-categoria">
                <a href="<?php echo $category_link ?>">
                  <span><?php echo $categoria ?></span>
                </a>
                <span class="float-right date"><?php echo get_the_date('d/m/Y') ?></span>
              </div>
              <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
                <h4><?php echo $title ?></h4>
                <p class="subtitle"><?php echo $linha_fina ?></p>
              </a>
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

    <div class="col-10 offset-1 col-lg-10 offset-lg-1">
      <div class="line-gradient"></div>
    </div>

    <div class="offset-lg-2 col-lg-8">
      <h2 class="title-watch"><?php echo get_field('titulo_multimidias_es'); ?></h2>

      <div class="carousel slider-videos" data-flickity='{ "freeScroll": true }'>

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
          $link = get_permalink( $post_formato_2->ID );
        ?>

          <div class="carousel-cell slide-video">
            <!-- <div class="bg-img img-video-home" style="background-image: url( <?php echo $thumbvideo ?> )"> -->
            <!-- </div> -->
            <img src="<?php echo $thumbvideo ?>" alt="<?php echo get_the_title( $post->ID ) ?>">
            <h3><?php echo get_the_title( $post->ID ); ?></h3>
            <a href="<?php echo $link ?>" alt="<?php echo get_the_title( $post->ID ) ?>" title="<?php echo get_the_title( $post->ID ) ?>">
              <button class="player-video"></button>
            </a>

          </div>
        
        <?php } ?>

      </div>
    </div>

    <div class="col-10 offset-1 col-lg-10 offset-lg-1">
      <div class="line-gradient"></div>
    </div>

  </div>
</section>

<?php componente_newsletter() ?>

<?php /* componente_doacao() */ ?>

<?php get_footer(); ?>
