<?php get_header(); ?>

<article>
    <div class="container p-top pb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-12">
                <h2 class="mb-3"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</article>

<?php componente_newsletter() ?>

<?php get_footer(); ?>
