<?php /*
  Template Name: Front Page.
 */ get_header(); ?>

    <div class="hero">
      <div class="canvas-container">
                <canvas id="canvas"></canvas>
         </div>

         <div class="overlay">
            <div class="overlay-content">
                    <h1>Hello, I'm Max Nichols</h1>
                    <h2>I'm a Front-End Developer</h2>
                    <button>Look at my Projects</button>
                    <button>Download Resume</button>
            </div>
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
