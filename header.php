<?php
/**
 * @package WordPress
 * @subpackage Freelance Site
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="<?php bloginfo('name'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?><?php wp_title('I') ?></title>
    <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> -->

    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

  <nav class="navigation">
    <div class="container grid-menu">

          <div class="logo-div">
            <a href="<?php  $url = home_url();  echo $url; ?>"class="logo">(MN<span>+</span>) Max Nichols</a>
          </div>

          <div class="menu-div">
            <?php wp_nav_menu(array(
              'theme_location' => 'menu-main',
              'menu_class' => 'menu',
            )); ?>
            <div class="burger">
              <span></span>
              <span></span>
              <span></span>
           </div>
          </div>

    </div>
  </nav>
