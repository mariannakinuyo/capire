<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $postID = get_the_ID();
    $linha_fina = get_field('linha_fina');
    $traduzido = get_field('tradutora');
    $revisado = get_field('revisora');
    $escrito = get_field('autora_alternativa');
    $thumb = get_the_post_thumbnail();
    $categoria = get_the_category( $postID )[0]->name;
    $tags = get_the_tags();
    $link = get_permalink( $postID );
    $caption = the_post_thumbnail_caption( $postID );
    if ( $lang === 'en' ) {
        $page = get_page_by_path( 'home-en' );
        $text_share = get_field('texto_artigo_en', $page->ID);
      
      } elseif ( $lang === 'es' ) {
        $page = get_page_by_path( 'home-es' );
        $text_share = get_field('texto_artigo_es', $page->ID);
      
      } elseif ( $lang === 'fr' ) {
        $page = get_page_by_path( 'home-fr' );
        $text_share = get_field('texto_artigo_fr', $page->ID);
      
      } elseif ( $lang === 'pt' ) {
        $page = get_page_by_path( 'home' );
        $text_share = get_field('texto_artigo', $page->ID);
      
      }
?>

<div class="container p-top">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2">

            <div class="chapeu">

                <p class="name-categoria"><?php echo $categoria ?>
                    <span class="date float-right"><?php echo get_the_date('d/m/Y') ?></span>
                </p>
                
                <?php if ( $tags ) {
                    foreach( $tags as $tag ) { ?>
                        <div class="tags-article">
                            <a href="<?php echo get_tag_link($tag); ?>">
                                <p class="small"><?php echo $tag->name ?></p>
                            </a>
                        </div>
                <?php }
                } ?>
                
            </div>

            <div class="single-thumb">
                <div class="img-leg">
                    <?php echo $thumb ?>
                    <p class="small"><?php the_post_thumbnail_caption(  ); ?></p>
                </div>
                
            </div>

        </div>
    </div>

    <article>
        <div class="row">

            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="cabeca">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $linha_fina ?></h5>
                    <?php if($escrito) { ?>
                        <div class="author">
                            <?php echo $escrito ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

        <div class="row wrap-article">
            <div class="col-12 col-lg-1 offset-lg-2 social-vert">
                <?php componente_compartilhar() ?>
            </div>

            <div class="col-12 col-lg-6">

                <div class="article-content">
                    <?php the_content(); ?>
                </div>
                
                <div class="infos-article text-right">
                    <?php if($traduzido) { ?>
                        <div class="author">
                            <?php echo $traduzido ?>
                        </div>
                    <?php } if($revisado) { ?>
                        <div class="author">
                            <?php echo $revisado ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="line-gradient mb-3 mt-2"></div>

                <div class="social-center">
                    <p><?php echo $text_share ?></p>
                    <?php componente_compartilhar() ?>
                </div>
                
            </div>

        </div>

    </article>
 
</div>


<?php endwhile; else: ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Nada Encontrado</h2>
            <p>Erro 404</p>
            <p>Lamentamos mas não foram encontrados artigos.</p>
        </div>
    </div>
</div>

<?php endif; ?>


<?php componente_relacionados() ?>

<?php componente_newsletter() ?>

<?php /* componente_doacao() */ ?>

<?php get_footer(); ?>
