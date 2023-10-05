<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
 
        <h1><?php  the_title(); // Título da postagem ?></h1>
        <h4><?php the_category()?> </h4>
        
        <p><?php         the_content(); // Conteúdo da postagem?></p>

        <?php
    endwhile;
else :
    // Caso não haja postagens
    echo "Desculpe, a postagem não foi encontrada.";
endif;
?>

<?php get_footer(); ?>
