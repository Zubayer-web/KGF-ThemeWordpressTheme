<?php
/*
Template Name: Right Sideber
*/
get_header(); ?>
        
        <?php get_template_part('inc/Breadcrumb'); ?> 
<div class="single">
    <div class="container">               
                <div class="row">
                       <div class="col-md-8">
                                <?php while(have_posts()): the_post(); ?>
                                        
                                        <a href="#"><?php the_post_thumbnail(); ?></a>                                 
                                                            
                                
                                        <p><?php the_content(); ?>                   
                                <?php endwhile; ?>        
             
                       </div>
                       <div class="col-md-4">
                                <?php get_sidebar(); ?>
                       </div> 
                </div>                   
        </div>

</div>
<?php wp_footer(); ?>