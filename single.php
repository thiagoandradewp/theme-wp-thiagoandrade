<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        // Conteúdo da postagem aqui
        the_title(); // Título da postagem
        the_content(); // Conteúdo da postagem
    endwhile;
else :
    // Caso não haja postagens
    echo "Desculpe, não há postagens para exibir.";
endif;

