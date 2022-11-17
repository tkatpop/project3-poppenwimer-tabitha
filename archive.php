<?php get_header(); ?>
 <main class="container">
    <section class="archive-container">
        <h1 class="archive-title">
            <?php 
                if(is_category()){
                    single_cat_title();
                }elseif(is_tag()){
                    single_tag_title();
                }else{
                    echo "Archives";
                }
            ?>    
        </h1>

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <article class="individual-post">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                        <?php the_post_thumbnail('thumbnail'); ?>
                        <?php the_excerpt(); ?>
                    </article>

                    <?php
                }
            }

        ?>
    </section>

 </main>

<?php get_footer(); ?>