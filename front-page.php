<?php /*
  Template Name: Front Page.
 */ get_header(); ?>

<div class="hero">
  <div class="container">
    <div class="call-to-action">
      <h1><?php the_field('main_title') ?></h1>
      <h3><?php the_field('sub_title') ?> </h3>
      <a class="btn btn-1c" href="<?php echo get_page_link(66); ?>"><?php the_field('btn_text') ?></a>
    </div>
  </div>
</div>

<section class="section_sell">
  <h2 class="content-title"><?php the_field('service_header'); ?></h2>
  <div class="container grid">
    <div class="service">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
        <g>
        	<circle fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" cx="32" cy="19.001" r="4"/>
        	<path fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7
        		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z"/>
        </g>
        <polyline fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" points="21,37 12,37 1,57 32,57 63,57 52,37 43,37"/>
      </svg>
      <h2>Local Business SEO</h2>
      <p><?php the_field('seo_description') ?></p>
      <a href="!#" class="btn btn-service">Learn More</a>
    </div>
    <div class="service">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
        <g>
        	<circle fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" cx="32" cy="19.001" r="4"/>
        	<path fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7
        		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z"/>
        </g>
        <polyline fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" points="21,37 12,37 1,57 32,57 63,57 52,37 43,37"/>
      </svg>
      <h2>Web Design</h2>
      <p><?php the_field('design_description') ?></p>
      <a href="!#" class="btn btn-service">Learn More</a>
    </div>
    <div class="service">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
        <g>
        	<circle fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" cx="32" cy="19.001" r="4"/>
        	<path fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7
        		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z"/>
        </g>
        <polyline fill="none" stroke="#c9af98" stroke-width="2" stroke-miterlimit="10" points="21,37 12,37 1,57 32,57 63,57 52,37 43,37"/>
      </svg>
      <h2>Development</h2>
      <p><?php the_field('dev_description') ?></p>
      <a href="!#" class="btn btn-service">Learn More</a>
    </div>
  </div>

</section>


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
