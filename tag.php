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
    'posts_per_page' => 10,
    'paged' => $paged,
    'hide_empty' => true,
));
?>

<div class="container">
    <div class="row">

        <div class="col-12">
            <h1><?php echo $tag->name ?></h1>

            <?php if ( term_description() ) { ?>
                <div class=""><?php echo term_description(); ?></div>
            <?php } ?>
        </div>

        <?php foreach ($posts_tag->posts as $i => $post) {
            $thumb = get_the_post_thumbnail_url( $post->ID, 'full');    
        ?>

            <div class="col-lg-4 col-12">
                <div class="bg-img img-hero-slide" style="background-image: url(<?php echo $thumb ?>)"></div>
                <a href="<?php the_permalink() ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
            </div>

        <?php } ?>
        
    </div>
</div>


<?php get_footer(); ?>