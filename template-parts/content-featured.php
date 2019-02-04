<div class="front--article">
  <!-- <div class="image">
    <?php the_post_thumbnail('medium')?>
  </div> -->
  <div class="front--article__content">
    <?php the_title( sprintf('<h3 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>') ?>
    <?php the_excerpt(); ?>
  </div>
</div>

<section class="section_articles">
 <div class="container">
   <h1 class="content-title">Featured Articles</h1>
   <div class="row">
     <?php
     $args = array(
       'type' => 'post',
        'posts_per_page' => 3,
        'cat' => '-2',
     );
     $thumb_id = get_post_thumbnail_id();
     $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
       $lastBlog = new WP_Query( $args );
       if( $lastBlog->have_posts() ):
         while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
         <div class="column">
           <?php get_template_part("template-parts/content", "featured") ?>
         </div>

         <?php
               endwhile;
               endif;
               wp_reset_postdata();
             ?>
   </div>

 </div>
</section>
