<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        // Conteúdo da postagem única aqui
        <h1><?php  the_title(); // Título da postagem ?></h1>
        <h6><?php the_category()?> </h6>
        
        the_content(); // Conteúdo da postagem
        <?php
    endwhile;
else :
    // Caso não haja postagens
    echo "Desculpe, a postagem não foi encontrada.";
endif;
?>

<?php get_footer(); ?>
