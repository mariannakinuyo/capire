<?php get_header(); ?>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$lang = get_bloginfo("language");
if ( $lang === 'en-US' ) {
    $none = "No results";
} elseif ( $lang === 'es' ) {
    $none = "No hay resultados";
} elseif ( $lang === 'fr-FR' ) {
    $none = "Aucun résultat";
} elseif ( $lang === 'pt-BR' ) {
    $none = "Sem resultados";
}
?>

<div class="container p-top categories">
    <div class="row">
        <div class="col-12 col-lg-7 description-cat">
            <h4 class="name-categoria title"><?php the_search_query(); ?></h4>
        </div>
    </div>

    <div class="row">

        <?php 

        if (have_posts() && strlen( trim(get_search_query()) ) != 0 ) :
           
        while ( have_posts() ) : the_post();

        $thumb = get_the_post_thumbnail_url( $post->ID, 'full');   
        $linha_fina = get_field('linha_fina', $post->ID);
        $tags = get_the_tags();
        if($tags) { 
            foreach( $tags as $tag ) {
                $tag = $tag->name;
            }
        }
        ?>

            <div class="col-lg-4 col-12">
                <a href="<?php the_permalink() ?>">
                <div class="box-cats-home">
                    
                    <div class="bg-img img-cats-home" style="background-image: url(<?php echo $thumb ?>)">
                        <?php if($tag) { ?>    
                            <span class="cat-reg"><?php echo $tag ?></span>
                        <?php }
                         ?>
                    </div>
                        
                    <h4><?php the_title(); ?></h4>
                    <p class="subtitle"><?php echo $linha_fina ?></p>
                </div>
                </a> 
            </div>
        <?php endwhile; ?>
        <?php else : ?>
 
            <h4 class="mb-5 pb-5"><?php echo $none; ?></h4>

        <?php endif; ?>
        <?php/* }*/ ?>
        
    </div>
</div>


<?php get_footer(); ?>