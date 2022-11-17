<?php get_header(); ?>
    <main class="container">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>

                    <div class="individual-post">
                        <div class="text-container">
                            <h1><?php the_title(); ?></h1>
                            <p class="body-content"><?php echo the_content(); ?></p>
                        </div>
                    </div>
                    
                    <?php
                    
                }
            }
        ?>
    </main>
<?php get_footer(); ?>