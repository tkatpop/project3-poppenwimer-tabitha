<?php 

    /* 
    Template Name: Tour Page
    Template Post Type: page
    */

    get_header(); 
?>
    <main class="container">

        <!--Single Page Content-->
        <div class="single-page">
            <div class="text-container">
                <h1><?php the_title(); ?></h1>
                <p class="body-content"><?php the_content(); ?></p>
            </div>
        </div>

        <div class="duck">
            <?php dynamic_sidebar('tour-widget'); ?>
        </div>
                    
    </main>
<?php get_footer(); ?>