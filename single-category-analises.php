<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $postID = get_the_ID();
    $linha_fina = get_field('linha_fina');
    $thumb = get_the_post_thumbnail();
    $categoria = get_the_category( $postID )[0]->name;
    $tags = get_the_tags();
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">


            <div class="chapeu">

                <p><?php echo $categoria ?></p>
                <p><?php echo get_the_date('d/m/Y') ?></p>

                <?php if ( $tags ) {
                    foreach( $tags as $tag ) { ?>

                    <p><?php echo $tag->name ?></p>

                <?php }
                } ?>

            </div>


            <div class="single-thumb">

                <?php echo $thumb ?>

            </div>

        </div>

        <div class="col-12 col-lg-6 offset-3">

            <div class="cabeca">

                <h1><?php the_title(); ?></h1>
                <h3><?php echo $linha_fina ?></h3>
                <p><?php the_author() ?></p>

            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-12 col-lg-1 offset-2">
            <div class="social">
                <a href="" class="twitter">
                <span></span>
                </a>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <article>

                <p><?php the_content(); ?></p>

            </article>

        </div>


    </div>
</div>





<?php endwhile; else: ?>
    <div class="artigo">
        <h2>Nada Encontrado</h2>
        <p>Erro 404</p>
        <p>Lamentamos mas não foram encontrados artigos.</p>
    </div>            
<?php endif; ?>

<?php get_footer(); ?>
