
<?php
/*
Template Name: Portfólio Template 
*/
?>
<?php 
get_header();?>
<?php get_template_part('./parts/navbarSlider')?>
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
                portfolio

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

