<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    wp_head();
    ?>
</head>
    <nav>
      <div class="logo">
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
      <div class="menu">
      <?php wp_nav_menu('primary'); ?>
      </div>
    </nav>

    