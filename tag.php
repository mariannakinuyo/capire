<?php get_header(); ?>

<?php 
$tag = get_queried_object();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$posts_tag = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'tag' => $tag->slug,
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'paged' => $paged,
    'hide_empty' => true,
));
?>

<div class="container p-top tags categories">
    <div class="row">
        <div class="col-12 col-lg-7 description-cat">
            <h4 class="name-categoria tag title"><?php echo $tag->name ?></h4>
            <?php if ( term_description() ) { ?>
                <div class=""><?php echo term_description(); ?></div>
            <?php } ?>
        </div>
    </div>

    <?php foreach ($posts_tag->posts as $i => $post) {
        $thumb = get_the_post_thumbnail_url( $post->ID, 'full');
        $categoria = get_the_category( $post->ID )[0]->name;
        $linha_fina = get_field('linha_fina', $post->ID);
    ?>
    <div class="row">
        <div class="col-lg-4">
            <a href="<?php the_permalink() ?>">
            <div class="box-cats-home">
                
                <div class="bg-img img-cats-home" style="background-image: url(<?php echo $thumb ?>)"></div>
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