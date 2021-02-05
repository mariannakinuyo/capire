<?php function componente_relacionados() { 
    
$lang = get_bloginfo("language");

if ( $lang === 'en-US' ) {
    $page = get_page_by_path( 'home-en' );
    $titulo_rel = get_field('titulo_artigos_relacionados_en', $page->ID);

} elseif ( $lang === 'es' ) {
    $page = get_page_by_path( 'home-es' );
    $titulo_rel = get_field('titulo_artigos_relacionados_es', $page->ID);

} elseif ( $lang === 'fr-FR' ) {
    $page = get_page_by_path( 'home-fr' );
    $titulo_rel = get_field('titulo_artigos_relacionados_fr', $page->ID);

} elseif ( $lang === 'pt-BR' ) {
    $page = get_page_by_path( 'home' );
    $titulo_rel = get_field('titulo_artigos_relacionados', $page->ID);
}    
    
?>


<div class="container relacionados">
    <div class="row">
        <div class="col-12 col-lg-4 offset-lg-4">
            <h3 class="highlight text-center"><strong><?php echo $titulo_rel ?></strong></h3>
        </div>
    </div>

    <div class="row">
        <?php  
            $postID = get_the_ID();
            $categoria = get_the_category( $postID )[0];

            $posts_rel = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby'=>'id', 
                'order'=>'DESC',
                'hide_empty' => true,
                'posts_per_page' => 3,
                'cat' => $categoria->term_id,
                'post__not_in' => array($postID),
            ) );

            foreach ( $posts_rel->posts as $i => $post) {
                $link = get_permalink( $post->ID );
                $linha_fina = get_field('linha_fina', $post->ID );
                $categoria = get_the_category( $post->ID )[0];
        ?>

            <div class="col-12 col-lg-4 wrap-card">
                <div class="card-relacionados">
                    <p class="name-categoria">
                        <?php echo $categoria->name ?>
                        <span class="float-right"><?php echo get_the_date('d/m/Y') ?></span>
                    </p>
                    <a href="<?php echo $link; ?>"><h5><?php echo get_the_title( $post->ID ); ?></h5></a>
                </div>
                <a href="<?php echo $link; ?>"><p class="linha-fina"><?php echo $linha_fina; ?></p></a>
            </div>

        <?php } ?>

    </div>
</div>



<?php
}