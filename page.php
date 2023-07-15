<?php get_header(); ?> 
         <?php while(have_posts()): the_post(); ?>
         <div class="bg-primary extrwe">
                <?php echo get_post_meta(get_the_id(),'sub-title',true); ?>
         </div>       
        <?php endwhile; ?>
            <div class="container">               
                
                    <?php while(have_posts()): the_post(); ?>
                                
                                   <a href="#"><?php the_post_thumbnail(); ?></a>                                 
                                                       
                              
                                     <p><?php the_content(); ?>                   
                    <?php endwhile; ?>             
            </div>
    <?php while(have_posts()): the_post(); ?>
        <?php echo do_shortcode(get_post_meta(get_the_id(),'contact-form',true)); ?>
    <?php endwhile; ?>
<?php get_footer(); ?>