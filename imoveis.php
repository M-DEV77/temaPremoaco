
<?php
/*
Template Name: Imoveis Template 
*/
?>
<?php get_header();?>
<!----------------------------------------------------------------->
        <main>
          <?php 
            if (have_posts()):
              while(have_posts()): 
               the_post();
                ?>
                <?php the_title();
                the_content();
                ?>
                imoveis

                <?php
                endwhile;
                else:
                ?>
                <p>Nenhum Post encontrado!</p>
                <?php endif;
                ?>
        </main>
<!----------------------------------------------------------------->
<?php get_footer();?>

