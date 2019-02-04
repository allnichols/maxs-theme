<?php get_header();
/*
  Template Name: Blog Page.
 */
?>

       <div class="container">
         <?php
             $args = array(
               'type' => 'post',
                'posts_per_page' => 3,
                'cat' => '-2',
             );
            $lastBlog = new WP_Query( $args );
          if ($lastBlog->have_posts()) : ?>
           <?php while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>

             <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <?php echo get_the_post_thumbnail(); ?>
               <ul class="post-meta">
                 <li>Category: <?php the_category(', '); ?></li>
                 <li>Date: <?php the_time('F jS, Y'); ?></li>
              </ul>

             <div class="post-entry">
               <?php the_content(); ?>
             </div>

         </div>

          <?php
            endwhile;
            endif;
            wp_reset_postdata();
           ?>
        </div>
<?php get_template_part('template-parts/call-to', 'action') ?>
<?php get_footer(); ?>
