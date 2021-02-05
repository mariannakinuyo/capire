<?php
$lang = get_bloginfo("language");
if ( $lang === 'en-US' ) {
    $buscar = "Search";
} elseif ( $lang === 'es' ) {
    $buscar = "Buscar";
} elseif ( $lang === 'fr-FR' ) {
    $buscar = "Chercher";
} elseif ( $lang === 'pt-BR' ) {
    $buscar = "Pesquisar";
}
?>

<form action="/" method="get" accept-charset="utf-8" id="searchform" role="search" class="search-form">
  <div>
    <label for="s"></label>
    <input class="search-input" type="text" name="s" id="s" placeholder="<?php echo $buscar ?>" value="<?php the_search_query(); ?>" />
    <input class="search-button" type="submit" id="searchsubmit" value="" />
  </div>
</form>