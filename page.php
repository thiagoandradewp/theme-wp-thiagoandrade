<?php get_header(); ?>

<main class="theme-principal">
    <div class="theme-principal-container">
        <div class="theme-principal-conteudo">

        
        <?php 
            if (have_posts()) {
                while (have_posts()) {  ?>
                    
                Publicado em: <?php the_time( get_option( 'date_format' ) ); ?> 
                por <?php the_author(); ?> • <?php comments_number(); ?>
                </p>
                <?php 
                }
        }
        ?>


        </div>
    </div>

</main>


<?php get_footer(); ?>



