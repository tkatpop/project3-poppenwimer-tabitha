<?php get_header(); ?>

<div class="container">
    <main class="row">
        <section class="col-lg-12">
            <h1 class="search-title">Search Results for: "<?php echo $s; ?>"</h1>

            <!--Search Results-->
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post(); ?>

                        <article class="col-lg-12">
                            <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </article>
                        
                   <?php }
                }else{ ?>
                    <div class="col-lg-12">
                        <?php
                            echo "<p>We're sorry, the term you are looking for was not found in our website. Please try another search. </p>";

                            get_search_form();
                        ?>
                    </div>
                <?php } ?>
        </section>
    </main>
</div>

<?php get_footer(); ?>