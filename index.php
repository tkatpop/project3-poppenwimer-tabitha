<?php get_header(); ?>
    <main class="container">
        <h1><?php single_post_title(); ?></h1>

        <!--Posts Slider/Carousel-->
        <?php echo do_shortcode('[psac_post_carousel design="design-2" show_date="false" show_author="false" show_tags="false" show_comments="false" show_category="false" show_read_more="false" autoplay_interval="8000"]'); ?>

        <br>
    </main>
<?php get_footer(); ?>