<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewpoint" content="width=device-width, initial-scale=1" />

        <!--Adobe Font-->
        <link rel="stylesheet" href="https://use.typekit.net/uuu4lfb.css">

        <!--FontAwesome-->
        <script src="https://kit.fontawesome.com/864d9add69.js" crossorigin="anonymous"></script>

        <title><?php bloginfo('name'); ?></title>

        <?php wp_head(); ?>
    </head>
    
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 logo-container">
                            <?php
                                //Display Logo Image if set
                                if(get_header_image() == ''){
                                    ?>
                                    <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                                    <?php
                                }else{
                                    ?>
                                    <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Company Logo"/></a>
                                    <?php
                                }
                            ?>

                    </div>
                    
                    <div class="col-lg-6 navigation">
                            <nav class="custom-menu-class">
                                <?php
                                    wp_nav_menu(array(
                                        'theme_location'    => 'main-menu',
                                    ));
                                ?>
                            </nav>
                    </div>
                    
  
                </div>
            </div>    
        </header>  