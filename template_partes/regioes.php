<?php function componente_regioes() { ?>

<section class="container-fluid bg-grey py-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Navegue por regiões</h2>
      </div>

      <?php 
      $posts_regs = get_posts(array(
        'post_type' => 'post',
        'numberposts' => -1,
        'orderby'=>'id', 
        'order'=>'DESC',
        'hide_empty' => true,
        'tax_query' => array(
            array(
                'taxonomy' => 'regioes',
                'field' => 'slug',
                'terms' => ['africa', 'americas', 'asia-oceania', 'europa', 'mundo-arabe'],
            )
        )
      ) );

      foreach ( $posts_regs as $post  ) {
        $regs = get_the_terms( $post->ID, 'regioes' )[0];
        $categoria = get_the_terms( $post->ID, 'category' )[0];
        $link = get_permalink( $post->ID );
        $thumb = get_the_post_thumbnail_url( $post->ID, 'full');
      ?>
        
        <div class="col-reg">
            <a href="<?php echo $link ?>">
                <div class="box-reg">
                    <div class="bg-img img-reg-home" style="background-image: url(<?php echo $thumb ?>)">
                        <span class="cat-reg"><?php echo $regs->name ?></span>
                    </div>
                    <div class="name-categoria small">
                      <span><?php echo $categoria->name ?></span>
                      <span class="float-right"><?php echo get_the_date('d/m/Y') ?></span>
                    </div>
                    
                    <h5><?php echo get_the_title( $post->ID ); ?></h5>
                </div>
            </a>
        </div>
        
      <?php } ?>
    </div>
  </div>
</section>


<?php
}
