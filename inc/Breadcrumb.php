
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Blog Grid</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                       <?php while(have_posts()): the_post(); ?>
                        <a href=""><?php the_title(); ?></a>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>