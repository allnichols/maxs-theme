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
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Open+Sans:800|Roboto+Condensed:700|Roboto:900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/brands.css" integrity="sha384-n9+6/aSqa9lBidZMRCQHTHKJscPq6NW4pCQBiMmHdUCvPN8ZOg2zJJTkC7WIezWv" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css" integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
  </head>
<body <?php body_class(); ?>>

  <nav class="navigation">

          <div class="menu-div">

          <div class="menu">
            <ul>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#skills">About Me</a></li>
              <li><a download href="<?php the_field('resume') ?>">Resume</a></li>
            </ul>
          </div>

            <div class="burger">
              <span></span>
              <span></span>
              <span></span>
           </div>
          </div>

  </nav>
