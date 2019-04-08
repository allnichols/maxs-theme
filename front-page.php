<?php /*
  Template Name: Front Page.
 */ get_header(); ?>

    <div class="hero">
      <div class="container">
        <div class="call-to-action">
          <h1><?php the_field('main_title') ?></h1>
        </div>
      </div>
        <div class="learn">
          <h4 class="learn-more">Learn More</h4>
          <i class="arrow down"></i>
      </div>
    </div>



    <section class="section_works">
      <h1 class="content-title">Featured Work</h1>
      <div class="container grid">
          <?php

          $args = array(
            'type' => 'post',
             'posts_per_page' => 3,
             'cat' => '-1',
             'order' => 'ASC'
          );
          $thumb_id = get_post_thumbnail_id();
          $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
            $lastBlog = new WP_Query( $args );
            if( $lastBlog->have_posts() ):
              while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

                <?php get_template_part("template-parts/content", "work") ?>

              <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                  ?>



    </section>

    <?php get_template_part('template-parts/call-to', 'action') ?>



<?php get_footer(); ?>
