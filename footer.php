<footer id="footer">
    <div class="container_footer">
        <div class="footer_content">
            <div id="footer_column">
                <h6>Company</h6>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'footer-company',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'footer_column',
                        'menu_class' => 'footer_menu'
                    ) );
                ?>
            </div>
            <div id="footer_column">
                <h6>Support</h6>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'footer-support',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'footer_column',
                        'menu_class' => 'footer_menu'
                    ) );
                ?>
            </div>
            <div id="footer_column">
                <h6>Legal</h6>
                <?php 
                    wp_nav_menu( array(
                        'theme_location' => 'footer-legal',
                        'depth' => 1,
                        'container' => 'div',
                        'container_id' => 'footer_column',
                        'menu_class' => 'footer_menu'
                    ) );
                    ?>
            </div>
            <div id="footer_column" class="badges">
                <h6>Install App</h6>
                <a href="#" class="badge"><img src="<?php echo get_template_directory_uri(); ?> ./src/img/playMarket.svg"></a>
                <a href="#" class="badge"><img src="<?php echo get_template_directory_uri(); ?> ./src/img/appStore.svg"></a>
                
            </div>
        </div>
        <div class="footer_bottom">
            <div class="copyright">
                <p><?php echo nl2br (esc_html(get_theme_mod('footer_text'))); ?></p>
            </div>
            <div class="social_links">
             <?php   
                if ( is_active_sidebar( 'after-content-widget-area' ) ) { ?>
 
 <aside class="after-content widget-area full-width" role="complementary">
  <?php dynamic_sidebar( 'after-content-widget-area' ); ?>
 </aside>
 
 
 
<?php } ?>

            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>