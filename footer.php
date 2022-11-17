
        <footer>
            <br>
            <hr>
            <!--Footer Menu-->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php dynamic_sidebar('left-footer-widget'); ?>
                    </div>
                    
                    <div class="col-md-4">
                        <?php  
                            if(has_nav_menu('footer-middle')){ ?>
                                <nav class="footer-menu">
                                        <?php
                                            wp_nav_menu(array(
                                                'theme_location'    => 'footer-middle',
                                            ));
                                        ?>
                                </nav>
                                <?php
                            }

                        ?>
                    </div>

                    <div class="col-md-4">
                        <?php dynamic_sidebar('right-footer-widget'); ?>
                        <?php get_search_form(); ?>
                    </div>
                    
                </div>
            </div>

            <p class="copyright">&#169;Shears Cosmetology School, 2022</p>
            <p>This website is for educational purposes only.</p>

        
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>