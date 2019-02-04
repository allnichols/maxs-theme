<!-- Single Page Template  -->

<?php get_header(); ?>

    <div class="container page-single">

     <?php if (have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <?php edit_post_link('Edit this post', '<p>', '</p>'); ?>
        <div class="post-entry"><?php the_content(); ?></div>
        <?php wp_link_pages(); ?>
      </div>

      <?php endif; ?>

     <?php endwhile; ?>
   <?php else : ?>

      <?php get_template_part('post', 'not-found'); ?>

     <?php endif; ?>

    </div>

 <?php get_footer(); ?>
