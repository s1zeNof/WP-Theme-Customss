<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
   <header id="header">
        <div class="container_spec header_content">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="menu">
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'head-menu',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'header_menu',
                        'menu_class' => 'header_menu'
                    ) );
                ?>

                <!-- Mobile Menu -->
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'head-menu',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'menu_mobile',
                        'menu_class' => 'menu_mobile'
                    ) );
                ?>
            </div>
            <div class="burger">
                <button class="burger_btn" > 
                    <img src="<?php echo get_template_directory_uri(); ?> ./src/img/burger.png"> 
                </button>
            </div>
            <div class="sign_section">
                <button class="btn login_btn"><a href="#">Login</a></button>
                <button class="btn login_btn"><a href="#">Sign up</a></button>
            </div>

        </div>
   </header>