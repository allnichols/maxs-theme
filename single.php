<!--  single post template  -->

<?php get_header(); ?>

<div class="container post-single">

<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

  <h1>
    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
  </h1>

    <?php echo get_the_post_thumbnail(); ?>
  <p>
    <?php the_content(); ?>
  </p>

  <time datetime="<?php the_time('Y-m-j'); ?>">
        <?php the_time('F jS, Y'); ?>
  </time>

<?php endwhile; ?>

 <?php else : ?>

   <?php get_template_part('post', 'not-found'); ?>

 <?php endif; ?>

</div>



  <?php get_footer(); ?>
