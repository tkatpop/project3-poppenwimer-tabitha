<?php get_header(); ?>
    <main class="container">
        <h1><?php single_post_title(); ?></h1>
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="individual-post">

                        <div class="text-container">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                        </div>

                        <div class="featured-image">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>

                    </div>
                    
                    <?php
                    
                }
            }
        ?>
    </main>
<?php get_footer(); ?>