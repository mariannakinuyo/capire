<?php function componente_regioes() { ?>

<section class="container-fluid bg-grey py-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>Navegue por regiões</h3>
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
      ?>
        
        <div class="col-reg">
            <a href="<?php echo $link ?>">
                <div class="box-reg">
                    <div class="bg-img img-reg-home" style="background-image: url(https://via.placeholder.com/560x365)">
                        <span class="cat-reg"><?php echo $regs->name ?></span>
                    </div>
                    <span><?php echo $categoria->name ?></span>
                    <span><?php echo get_the_date('d/m/Y') ?></span>
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
