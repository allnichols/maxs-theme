<?php
 /*
Template Name: Contact Page
*/
get_header();?>
<div class="next">
  <div class="title-container">
    <h1>Details about your project.</h1>
    <h2 class="form-title">Provide details to help me better understand your project.</h2>
  </div>


  <div class="container">
    <div class="form-container">
      <?php
        $id=66;
        $post = get_post($id);
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
        ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>
