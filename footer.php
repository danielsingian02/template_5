<?php
    wp_footer();
    ?>

<footer>
    <div class="footer-logo">
    <a class="header-link" href="<?php bloginfo('url'); ?>">
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            
            if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
          ?>
      </a>
        
    </div>
    <div class="footer-message"><p><?php printf( get_theme_mod('Footer_text', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ipsum nunc turpis arcu dui cursus habitasse elit tempus nisi.', 'Footer_text' ) )); ?></p>

</footer>
<div class="copyright">            <p>
                        <?php 
                            printf( 
                                '%s. %s &copy; %s', 
                                get_theme_mod('copyright_text', __( '© Copyright 2021 HOA Management', 'copyright_text' ) ),
                                get_bloginfo('name'), 
                                date_i18n( 'Y' )
                            ); 
                        ?>
                    </p></div>

</body>

    
</html>