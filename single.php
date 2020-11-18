<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    <p><?php the_content(); ?></p>
    <p><?php the_author() ?></p>

<?php endwhile; else: ?>
    <div class="artigo">
        <h2>Nada Encontrado</h2>
        <p>Erro 404</p>
        <p>Lamentamos mas não foram encontrados artigos.</p>
    </div>            
<?php endif; ?>

<?php get_footer(); ?>
