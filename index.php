<?php 

get_header();
?>

<main class="theme-principal">
    <div class="theme-principal-container">
        <div class="theme-principal-conteudo">

        
        <?php 
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    // Aqui você pode exibir o conteúdo do post
                    the_title(); // Exibe o título do post
                    the_content(); // Exibe o conteúdo do post
                }
        }?>


        </div>
    </div>

</main>


<?php get_footer(); ?>



