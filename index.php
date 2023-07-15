<?php get_header(); ?>      
     <!-- Breadcrumb part -->
    <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Grid</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>                      
                        <a href="index.php">Blog</a>                        
                    </div>
                </div>
            </div>
    </div>

        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles</h2>
                </div>
                <div class="row">
                    <?php while(have_posts()): the_post(); ?>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="blog-img">
                                   <a href="#"><?php the_post_thumbnail(); ?></a> 
                                    <div class="meta-date">
                                       <span><?php the_time('j M, Y');  ?></span> <!-- <span>01</span><strong>Jan</strong><span>2045</span> -->
                                    </div>
                                </div>
                                
                                <div class="blog-text">
                                        <h3><?php echo wp_trim_words(get_the_title(),7,'') ?></h3>
                                    <div class="blog-meta">
                                        <p><i class="fa fa-user"></i><a href=""><?php the_author(); ?></a></p>
                                        <p><i class="fa fa-folder"></i><a href="">Web Design</a></p>
                                        <p><i class="fa fa-comments"></i><a href=""><?php comments_popup_link('No Comment','1 Comment','% Comments','abir-class','Disable Comment') ?></a></p>
                                    </div>
                                     <p><?php echo wp_trim_words(get_the_content(),25,'</p></div><div class="read-more"><a class="btn btn-custom" href="'.get_the_permalink().'">Read More</a></div>'); ?><!--</p>
                                </div>
                                <div class="read-more">
                                    <a class="btn btn-custom" href="<?php the_permalink(); ?>">Read More</a>
                                </div> -->

                            </div>
                        </div>
                    <?php endwhile; ?> 



                    <?php the_posts_pagination(array(
                        'screen_reader_text'        =>'pagination-button',
                        'prev_text'                 =>'Previous',
                        'next_text'                 =>'Next',
                    )); ?>
                </div>
            </div>
        </div>
        <!-- Blog End -->
<?php get_footer(); ?>

                    <!-- <div class="col-12">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul> 
                    </div> --> 