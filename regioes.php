<?php get_header(); ?>

<?php 
$taxonomy = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts_taxonomy = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'tax_query' => array(
        array('taxonomy' => 'regioes',
              'field' => 'term_id',
              'terms' => $taxonomy->term_id,
    )),
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'paged' => $paged,
    'hide_empty' => true,
));
?>

<div class="container p-top categories cat-regions">
    <div class="row">
        <div class="col-12 col-lg-7 description-cat">
            <h4 class="name-categoria title"><?php echo $taxonomy->name ?></h4>

            <?php if ( term_description() ) { ?>
                <div class="description-cat"><?php echo term_description(); ?></div>
            <?php } ?>
        </div>
    </div>

    <div class="row">

        <?php foreach ($posts_taxonomy->posts as $i => $post) {
            $thumb = get_the_post_thumbnail_url( $post->ID, 'full');
            $taxonomy = $taxonomy->name;
            $categoria = get_the_category( $post->ID )[0]->name;
            $linha_fina = get_field('linha_fina', $post->ID);
            $tags = get_the_tags();
            foreach( $tags as $tag ) {
                $tag = $tag->name;
            }
        ?>

            <div class="col-lg-4 col-12">
                <a href="<?php the_permalink() ?>">
                <div class="box-cats-home">
                    
                    <div class="bg-img img-cats-home" style="background-image: url(<?php echo $thumb ?>)">
                        <span class="cat-reg"><?php echo $tag ?></span>
                    </div>
                    <div class="name-categoria">
                        <span><?php echo $categoria ?></span>
                        <span class="float-right date"><?php echo get_the_date('d/m/Y') ?></span>
                    </div>
                    <h4><?php the_title(); ?></h4>
                    <p class="subtitle"><?php echo $linha_fina ?></p>
                </div>
                </a> 
            </div>

        <?php } ?>
        
    </div>
</div>


<?php get_footer(); ?>