<?php
/*
Template Name: Full Width
*/


get_header(); ?> 
        
            <div class="container">               
                
                    <?php while(have_posts()): the_post(); ?>
                                
                                   <a href="#"><?php the_post_thumbnail(); ?></a>                                 
                                                       
                              
                                     <p><?php the_content(); ?>                   
                    <?php endwhile; ?>             
            </div>
  
<?php get_footer(); ?>