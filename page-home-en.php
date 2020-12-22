<?php get_header(); 

$pageID = get_the_ID();
?>


<section class="container p-top">
  <div class="row">
    <div class="col-12 text-center">
        <img class="img-highlight" src="<?php  echo get_field('imagem_do_topo_en', $pageID) ?>" alt="Image highlight">
    </div>
  </div>
</section>

<section class="container hero">
  <div class="row bg-red-mobile">
    <div class="col-lg-10 offset-lg-1 col-12">

      <?php
        $rows = get_field('carousel_principal_en', $pageID);
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
                      <h2><?php echo $title ?></h2>
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
          $formatos_1 = get_field('formatos_1_en', $pageID);
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
          
          <h6><?php echo get_field('titulo_leia_mais_en') ?></h6>
          <div class="line-gradient more"></div>
        
          <?php 
          $posts_last = new WP_Query( array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
          ) );
          
          $mylimit = 20 * 86400; //days * seconds per day

          while ($posts_last->have_posts()) : $posts_last->the_post();
            $title = get_the_title( $post->ID );
            $link = get_permalink( $post->ID );
            $post_age = date('U') - get_post_time('U');

            if ($post_age > $mylimit) {
          ?>

            <a href="<?php echo $link ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
              <h4><?php echo $title ?></h4>
            </a>
            <div class="line-gradient more-home"></div>

          <?php
            } 
            endwhile;
          ?>

        </div>

        <?php
          $formatos_2 = get_field('formatos_2_en', $pageID);
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
      <h2 class="title-watch"><?php echo get_field('titulo_multimidias_en'); ?></h2>

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
            <img src="<?php echo $thumbvideo ?>" alt="<?php echo get_the_title( $post->ID ) ?>">
            <a href="<?php echo $link ?>" alt="<?php echo get_the_title( $post->ID ) ?>" title="<?php echo get_the_title( $post->ID ) ?>">
              <h3><?php echo get_the_title( $post->ID ); ?></h3>
            </a>
            <button type="button" class="player-video" data-toggle="modal" data-target="#<?php echo $post->ID ?>Modal"></button>
          </div>
        
        <?php } ?>

      </div>
    </div>

    <?php foreach ( $posts_midias->posts as $post ) { 
      $video = get_field('video_multimidia');
    ?>
      <!-- Modal -->
      <div class="modal fade" id="<?php echo $post->ID ?>Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo $video ?>
            </div>
            <div class="modal-footer">
              <a href="<?php echo $link ?>" alt="<?php echo get_the_title( $post->ID ) ?>" title="<?php echo get_the_title( $post->ID )?>">
                <h3><?php echo get_the_title( $post->ID ); ?></h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <div class="col-10 offset-1 col-lg-10 offset-lg-1">
      <div class="line-gradient"></div>
    </div>

  </div>
</section>

<?php componente_newsletter() ?>

<?php componente_doacao() ?>

<?php get_footer(); ?>
