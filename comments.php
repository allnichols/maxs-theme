<!-- Comments Template  -->
<?php if (post_password_required()) return; ?>

<div id="comments">
  <?php if (have_comments()) : ?>
    <h3><?php comments_number(); ?></h3>
  <ul class="comments">
      <?php wp_list_comments(array(
          'type' => 'comment',
          'avatar-size' => 96
      )); ?>
  </ul>
  <?php //paged comments_number
    $pages_count = get_comment_pages_count();
    $pages_count = get_option('page_comments');
    if ($pages_count > 1 && $page_comments) : ?>

    <div class="prev"><?php previous_comments_link(); ?></div>
    <div class="next"><?php next_comments_link(); ?></div>
  <?php endif ?>
<?php else: //no comments yet.. ?>
<?php endif; //no comments yet.. ?>
</div>
<div id="respond">
  <?php if(comments_open()) : ?>
          <?php comment_form(); ?>
  <?php else : ?>
      <p>comments are closed.</p>
    <?php endif; ?>
</div>
